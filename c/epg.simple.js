/**
 * EPG simple modile (for dummies).
 */

(function(){
    
    function epg_simple_constructor(){
        
        this.layer_name = 'epg_simple';
        
        this.total_rows  = 10;
        
        this.row_blocks  = ['t_time', 'name', 'mark_memo'];
        
        this.load_params = {
            "type"   : "epg",
            "action" : "get_simple_data_table"
        };
        
        this.superclass = ListLayer.prototype;
        
        this.ch_id = 0;
        this.ch_name = '';
        
        this.week_days_map = [];
        
        this.epg_list_active = true;
        
        this.cur_week_row = 0;
        
        this.active_week_row = 0;
        
        this.fill_info_timer = 0;
        
        this.week = [];
        
        this.init = function(){
            _debug('epg_simple.init');
            
            this.superclass.init.call(this);
            
            this.program_info = create_block_element('program_info', this.dom_obj);
            
            var week = document.createElement('ul');
            week.addClass('week');
            
            for (var i=0; i<=6; i++){
                var day = document.createElement('li');
                week.appendChild(day);
                this.week_days_map.push({"dom_obj" : day});
            }
            
            this.dom_obj.appendChild(week);
            
            this.program_info = create_block_element('program_info', this.dom_obj);
            
        };
        
        this.init_page_bar = function(){};
        
        this.set_total_items = function(){};
        
        this.init_active_row = function(){};
        
        this.show = function(){
            _debug('epg_simple.show');
            
            this.superclass.show.call(this, 1);
            
            this.update_header_path([{"alias" : "name", "item" : this.ch_name}]);
            
            this.epg_list_active = true;
            this.cur_page = 0;
            
            this.load_params['ch_id'] = this.ch_id;
            
            this.load_week();
        };
        
        this.hide = function(do_not_reset){
            _debug('epg_simple.hide');
            
            this.set_passive_row();
            
            this.superclass.hide.call(this, do_not_reset);
        }
        
        this.bind = function(){
            _debug('epg_simple.bind');
            
            //this.superclass.bind.call(this);
            
            this.shift_row.bind(key.UP, this, -1);
            this.shift_row.bind(key.DOWN, this, 1);
            
            this.shift_page.bind(key.PAGE_PREV, this, -1);
            this.shift_page.bind(key.PAGE_NEXT, this, 1);
            
            /*(function(){
                this.hide();
                main_menu.show();
            }).bind(key.MENU, this).bind(key.EXIT, this);*/
            
            (function(){
                this.hide();
                this.parent.hide();
                main_menu.show();
            }).bind(key.MENU, this);
            
            (function(){
                this.parent.show(true);
                this.hide();
            }).bind(key.EXIT, this);
            
            (function(){
                if (!this.epg_list_active){
                    this.week_day_action();
                }
            }).bind(key.OK, this);
            
            this.horizontal_shift.bind(key.LEFT, this, -1);
            this.horizontal_shift.bind(key.RIGHT, this, 1);
        };
        
        this.set_active_epg_list = function(){
            _debug('epg_simple.set_active_epg_list');
            
            _debug('this.cur_row', this.cur_row);
            
            this.set_active_row(this.cur_row);
            this.set_passive_week_row();
        };
        
        this.set_passive_epg_list = function(){
            _debug('epg_simple.set_passive_epg_list');
            
            this.set_passive_row();
            this.set_active_week_row(this.cur_week_row);
        };
        
        this.shift_row = function(dir){
            _debug('epg_simple.shift_row', dir);
            
            _debug('this.epg_list_active', this.epg_list_active);
            
            if (this.epg_list_active){
                this.superclass.shift_row.call(this, dir);
            }else{
                this.shift_week_day(dir);
            }
        };
        
        this.horizontal_shift = function(dir){
            _debug('epg_simple.horizontal_shift', dir);
            
            if (dir > 0){
                if (!this.epg_list_active){
                    this.set_active_epg_list();
                    this.epg_list_active = true;
                }
            }else{
                if (this.epg_list_active){
                    this.set_passive_epg_list();
                    this.epg_list_active = false;
                }
            }
        };
        
        this.shift_week_day = function(dir){
            _debug('epg_simple.shift_week_day', dir);
            
            this.set_passive_week_row();
            
            if (dir > 0){
                if (this.cur_week_row < 6){
                    this.cur_week_row++;
                }else{
                    this.cur_week_row = 0;
                }
            }else{
                if (this.cur_week_row > 0){
                    this.cur_week_row--;
                }else{
                    this.cur_week_row = 6;
                }
            }
            
            this.set_active_week_row(this.cur_week_row);
        };
        
        this.set_passive_row = function(){
            _debug('epg_simple.set_passive_row');
            _debug('this.cur_row', this.cur_row);
            
            if (this.cur_row < 0){
                return;
            }
            
            this.map[this.cur_row]['row'].setAttribute('active', '');
            this.program_info.innerHTML = '';
        };
        
        this.set_active_row = function(num){
            _debug('epg_simple.set_active_row', num);
            
            if (this.loading || empty(this.data_items)){
                return;
            }
            
            this.map[this.prev_row]['row'].setAttribute('active', '');
            this.map[num]['row'].setAttribute('active', 'active');
            
            this.fill_program_info();
        };
        
        this.set_active_week_row = function(num){
            _debug('epg_simple.set_active_week_row', num);
            
            this.week_days_map[num].dom_obj.setAttribute('active', 'active');
        };
        
        this.set_passive_week_row = function(){
            _debug('epg_simple.set_passive_week_row');
            
            this.week_days_map[this.cur_week_row].dom_obj.setAttribute('active', '');
        };
        
        this.set_active_current_week_row = function(){
            _debug('epg_simple.set_current_week_row');
            
            this.set_passive_all_current_week_row()
            
            this.week_days_map[this.cur_week_row].dom_obj.setAttribute('rel', '');
            
            this.active_week_row = this.cur_week_row;
        };
        
        this.set_passive_current_week_row = function(){
            _debug('epg_simple.set_passive_current_week_row');
            
            this.week_days_map[this.cur_week_row].dom_obj.setAttribute('rel', 'close');
        };
        
        this.set_passive_all_current_week_row = function(){
            _debug('epg_simple.set_passive_current_week_row');
            
            this.week_days_map[this.active_week_row].dom_obj.setAttribute('rel', 'close');
        };
        
        this.fill_program_info = function(){
            _debug('epg_simple.fill_program_info');
            
            window.clearTimeout(this.fill_info_timer);
            
            var self = this;
            
            this.fill_info_timer = window.setTimeout(function(){
            
                if (!empty(self.data_items) && !empty(self.data_items[self.cur_row])){
                
                    self.program_info.innerHTML = '<span class="time">' + self.data_items[self.cur_row]['t_time'] + ' - ' + self.data_items[self.cur_row]['t_time_to'] +'</span> - ' + self.data_items[self.cur_row]['name'];
                }else{
                    self.program_info.innerHTML = '';
                }
            },
            
            300);
        }
        
        this.week_day_action = function(){
            _debug('epg_simple.week_day_action');
            
            this.page_dir = 1;
            this.cur_page = 0;
            
            this.set_active_current_week_row();
            
            this.load_params['date'] = this.week[this.cur_week_row].f_mysql;
            
            this.load_data();
        };
        
        this.load_week = function(){
            _debug('epg_simple.load_week');
            
            stb.load(
                {
                    "type"   : "epg",
                    "action" : "get_week"
                },
                
                function(result){
                    this.fill_week(result);
                },
                
                this
            )
        };
        
        this.fill_week = function(data){
            _debug('epg_simple.feel_week', data);
            
            this.week = data;
            
            _debug('this.week', this.week);
            
            for (var i=0; i <= 6; i++){
                this.week_days_map[i].dom_obj.innerHTML = this.week[i].f_human;
                
                this.week_days_map[i].dom_obj.setAttribute('active', '');
                
                if (this.week[i].today){
                    
                    this.week_days_map[i].dom_obj.setAttribute('rel', '');
                    //this.week_days_map[i].dom_obj.setAttribute('active', 'active');
                    
                    this.load_params['date'] = this.week[i].f_mysql;
                    
                    this.cur_week_row = i;
                    this.active_week_row = i;
                }else{
                    this.week_days_map[i].dom_obj.setAttribute('rel', 'close');
                    //this.week_days_map[i].dom_obj.setAttribute('active', '');
                }
            }
            
            this.load_data();
        };
        
        this.fill_list = function(data){
            _debug('epg_simple.fill_list');
            
            this.superclass.fill_list.call(this, data);
            
            if (this.epg_list_active){
                this.set_active_row(this.cur_row);
            }
        };
        
        this.shift_page = function(dir){

            this.page_dir = dir;
            
            if (dir > 0){
                if (this.cur_page < this.total_pages){
                    this.cur_page++;
                    this.load_data();
                }else{
                    this.set_active_row(this.cur_row);
                    //this.cur_page = 1;
                }
            }else{
                if (this.cur_page > 1){
                    this.cur_page--;
                    this.load_data();
                }else{
                    this.set_active_row(this.cur_row);
                    //this.cur_page = this.total_pages;
                }
            }
            
            //this.load_data();
        }
    }
    
    epg_simple_constructor.prototype = new ListLayer();
    
    var epg_simple = new epg_simple_constructor();
    
    epg_simple.parent = module.tv;
    
    if (module.epg_reminder){
        epg_simple.reminder = function(){};
        
        epg_simple.reminder.prototype = module.epg_reminder;
        epg_simple.reminder = new epg_simple.reminder;
        epg_simple.reminder.parent = epg_simple;
        
        epg_simple.reminder.get_ch_id = function(){
            _debug('epg_simple.reminder.get_ch_id');
            
            return this.parent.ch_id;
        }
        
        epg_simple.reminder.get_item = function(){
            _debug('epg_simple.reminder.get_item');
            
            return this.parent.data_items[this.parent.cur_row];
        }
        
        epg_simple.reminder.show_mark = function(){
            _debug('epg_simple.reminder.show_mark');
            
            this.parent.map[this.parent.cur_row]['mark_memo_block'].show();
            this.parent.data_items[this.parent.cur_row].mark_memo = 1;
        }
        
        epg_simple.reminder.hide_mark = function(){
            _debug('epg_simple.reminder.hide_mark');
            
            this.parent.map[this.parent.cur_row]['mark_memo_block'].hide();
            this.parent.data_items[this.parent.cur_row].mark_memo = 0;
        }
    }
    
    epg_simple.bind();
    epg_simple.init();
    
    epg_simple.init_header_path(word['epg_title']);
    
    epg_simple.init_color_buttons([
        {"label" : word['epg_record'], "cmd" : ''},
        {"label" : word['epg_remind'], "cmd" : (function(){if (epg_simple.reminder){return function(){epg_simple.reminder.add_del()}}else{return ''}})() },
        {"label" : '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', "cmd" : ''},
        {"label" : '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', "cmd" : ''}
    ]);
    
    epg_simple.hide();
    
    module.epg_simple = epg_simple;
    
})();

loader.next();