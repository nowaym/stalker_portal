<?php
/**
 * Please do not edit this file.
 * For localization, use the Poedit.
 */

$words = array();

// weather
$words['weather_comfort'] = _('Comfort');
$words['weather_pressure'] = _('Pressure');
$words['weather_mmhg'] = _('mm Hg');
$words['weather_wind'] = _('Wind');
$words['weather_speed'] = _('m/s');
$words['weather_humidity'] = _('Humidity');
$words['current_weather_unavailable'] = _('Current weather unavailable');
$words['current_weather_not_configured'] = _('The weather is not configured');

// karaoke
$words['karaoke_view'] = _('VIEW');
$words['karaoke_sort'] = _('SORT');
$words['karaoke_search'] = _('SEARCH');
$words['karaoke_sampling'] = _('PICKING');
$words['karaoke_by_letter'] = _('BY LETTER');
$words['karaoke_by_performer'] = _('BY NAME');
$words['karaoke_by_title'] = _('BY TITLE');
$words['karaoke_title'] = _('KARAOKE');

// layer
$words['layer_page'] = _('PAGE');
$words['layer_from'] = _('FROM');
$words['layer_found'] = _('FOUND');
$words['layer_records'] = _('RECORDS');
$words['layer_loading'] = _('LOADING...');
$words['Loading...'] = _('Loading...');

// media browser
$words['mbrowser_title'] = _('Media Browser');
$words['mbrowser_connected'] = _('connected');
$words['mbrowser_disconnected'] = _('disconnected');
$words['mbrowser_not_found'] = _('not found');

$words['usb_drive'] = _('USB drive');

// player
$words['player_limit_notice'] = _('The number of connections is limited. <br> Try again later');
$words['player_file_missing'] = _('File missing');
$words['player_server_error'] = _('Server error');
$words['player_access_denied'] = _('Access denied');
$words['player_server_unavailable'] = _('Server unavailable');
$words['player_series'] = _('part');
$words['player_track'] = _('Track');
$words['player_off'] = _('Off');
$words['player_subtitle'] = _('Subtitles');
$words['player_claim'] = _('Complain');
$words['player_on_sound'] = _('on sound');
$words['player_on_video'] = _('on video');
$words['player_audio'] = _('Audio');
$words['player_ty'] = _('Thank you, your opinion will be taken into account');
$words['series_by_one_play'] = _('one series');
$words['series_continuously_play'] = _('continuously');

$words['aspect_fit'] = _('fit on');
$words['aspect_big'] = _('zoom');
$words['aspect_opt'] = _('optimal');
$words['aspect_exp'] = _('stretch');
$words['aspect_cmb'] = _('combined');

// radio
$words['radio_title'] = _('RADIO');
$words['radio_sort'] = _('SORT');
$words['radio_favorite'] = _('FAVORITE');
$words['radio_search'] = _('SEARCH');
$words['radio_by_number'] = _('by number');
$words['radio_by_title'] = _('by title');
$words['radio_only_favorite'] = _('only favorite');
$words['radio_fav_add'] = _('add');
$words['radio_fav_del'] = _('del');
$words['radio_search_box'] = $words['radio_search'] = _('SEARCH');

// tv
$words['tv_view'] = _('VIEW');
$words['tv_sort'] = _('SORT');
$words['tv_favorite'] = $words['favorite'] = _('FAVORITE');
$words['tv_move'] = _('MOVE');
$words['tv_by_number'] = _('by number');
$words['tv_by_title'] = _('by title');
$words['tv_only_favorite'] = _('only favorite');
$words['tv_only_hd'] = _('HD only');
$words['tv_list'] = _('list');
$words['tv_list_w_info'] = _('list + info');
$words['tv_title'] = _('TV');

// vclub info
$words['vclub_info'] = _('information about the movie');
$words['vclub_year'] = _('Year');
$words['vclub_country'] = _('Country');
$words['vclub_genre'] = _('Genre');
$words['vclub_length'] = _('Length');
$words['vclub_minutes'] = _('min');
$words['vclub_director'] = _('Director');
$words['vclub_cast'] = _('Cast');
$words['vclub_rating'] = _('Rating');
$words['vclub_age'] = _('Age');
$words['vclub_rating_mpaa'] = _('Rating MPAA');

// vclub
$words['vclub_view'] = _('VIEW');
$words['vclub_sort'] = _('SORT');
$words['vclub_search'] = _('SEARCH');
$words['vclub_fav'] = _('FAVORITE');
$words['vclub_other'] = _('OTHER');
$words['vclub_find'] = _('FIND');
$words['vclub_by_letter'] = _('BY LETTER');
$words['vclub_by_genre'] = _('BY GENRE');
$words['vclub_by_year'] = _('BY YEAR');
$words['vclub_by_rating'] = _('BY RATING');
$words['vclub_search_box'] = _('search');
$words['vclub_query_box'] = _('picking');
$words['vclub_by_title'] = _('by title');
$words['vclub_by_addtime'] = _('by addtime');
$words['vclub_top'] = _('rating');
$words['vclub_only_hd'] = _('HD only');
$words['vclub_only_favorite'] = _('favorite only');
$words['vclub_only_purchased'] = _('purchased');
$words['vclub_not_ended'] = _('not ended');
$words['vclub_list'] = _('list');
$words['vclub_list_w_info'] = _('list + info');
$words['vclub_title'] = _('VIDEOCLUB');
$words['vclub_purchased'] = _('Purchased');
$words['vclub_rent_expires_in'] = _('rent expires in');

// common
$words['cut_off_msg'] = _('Your STB is blocked.<br/> Call the provider.');
$words['month_arr'] = array(_('JANUARY'),_('FEBRUARY'),_('MARCH'),_('APRIL'),_('MAY'),_('JUNE'),_('JULY'),_('AUGUST'),_('SEPTEMBER'),_('OCTOBER'),_('NOVEMBER'),_('DECEMBER'));
$words['week_arr'] = array(_('SUNDAY'),_('MONDAY'),_('TUESDAY'),_('WEDNESDAY'),_('THURSDAY'),_('FRIDAY'),_('SATURDAY'));
//$words['week_short_arr'] = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
/// Short year. "г" for RU and leave empty for EN;
$words['year'] = '';

// pvr
$words['records_title'] = _('RECORDS');

// ears
$words['ears_back'] = implode('<br>', preg_split('//u', _('BACK')));
$words['ears_about_movie'] = implode('<br>', preg_split('//u', _('ABOUT MOVIE')));
$words['ears_tv_guide'] = implode('<br>', preg_split('//u', _('TV GUIDE')));
$words['ears_about_package'] = implode('<br>', preg_split('//u', _('PACKAGE INFO')));

// settings
$words['settings_title'] = _('SETTINGS');
$words['parent_settings_cancel'] = _('CANCEL');
$words['parent_settings_save'] = _('SAVE');
$words['parent_settings_old_pass'] = _('Current password');
$words['parent_settings_title'] = _('PARENTAL SETTINGS');
$words['parent_settings_title_short'] = _('PARENTAL');
$words['parent_settings_new_pass'] = _('New password');
$words['parent_settings_repeat_new_pass'] = _('Repeat new password');

$words['settings_saved'] = _('Settings saved');
$words['settings_saved_reboot'] = _('Settings saved.<br>The STB will be rebooted. Press OK.');
$words['settings_check_error'] = _('Error filling fields');
$words['settings_saving_error'] = _('Saving error');

$words['localization_settings_title'] = _('LOCALIZATION');
$words['localization_label'] = _('Language of the interface');
$words['country_label'] = _('Country');
$words['city_label'] = _('City');
$words['localization_page_button_info'] = _('Use PAGE-/+ buttons to move through several menu items');

$words['settings_software_update'] = _('SOFTWARE UPDATE');
$words['update_settings_cancel'] = _('CANCEL');
$words['update_settings_start_update'] = _('START UPDATE');
$words['update_from_http'] = _('From HTTP');
$words['update_from_usb'] = _('From USB');
$words['update_source'] = _('Source');
$words['update_method_select'] = _('Method select');

$words['empty'] = _('EMPTY');

$words['course_title'] = _('Exchange rate on');
$words['course_title_nbu'] = _('NBU exchange rate on');
$words['course_title_cbr'] = _('CBR exchange rate on');

$words['dayweather_title'] = _('WEATHER');
$words['dayweather_pressure'] = _('pres.:');
$words['dayweather_mmhg'] = _('mm Hg');
$words['dayweather_wind'] = _('wind:');
$words['dayweather_speed'] = _('m/s');

$words['infoportal_title'] = _('INFOPORTAL');

$words['cityinfo_title'] = _('CITY INFO');
$words['cityinfo_main'] = _('emergency');
$words['cityinfo_help'] = _('help');
$words['cityinfo_other'] = _('other');
$words['cityinfo_sort'] = _('VIEW');

$words['horoscope_title'] = _('HOROSCOPE');

$words['anecdote_title'] = _('JOKES');

$words['anecdote_goto'] = _('GOTO');
$words['anecdote_like'] = _('LIKE');
$words['anecdote_bookmark'] = _('BOOKMARK');
$words['anecdote_to_bookmark'] = _('TO BOOKMARK');

$words['anecdote_pagebar_title'] = _('JOKE');

$words['mastermind_title'] = _('MASTERMIND');
$words['mastermind_rules'] = _('RULES');
$words['mastermind_rating'] = _('RATING');
/// Short Bull
$words['mastermind_bull'] = _('B');
// Short Cow
$words['mastermind_cow'] = _('C');

$words['mastermind_rules_text'] = _('Your task is to guess the number of unduplicated four digits, the first of them - not zero. Every your guess will be compared with the number put forth a STB. If you guessed a digit, but it is not in place, then it is a COW (C). If you guessed, and a number, and its location, this BULL (B).');
$words['mastermind_move_cursor'] = _('Moving the cursor');
$words['mastermind_cell_numbers'] = _('Enter numbers into cells');
$words['mastermind_step_confirmation'] = _('Confirmation of the step');
$words['mastermind_page'] = 'Page';
$words['mastermind_history_moves'] = _('Moving through the pages of history moves');

$words['msg_service_off'] = _('Service is disabled');
$words['msg_channel_not_available'] = _('Channel is not available');

$words['epg_title']  = _('TV Guide');
$words['epg_record'] = _('RECORD');
$words['epg_remind'] = _('REMIND');
$words['epg_memo']   = _('Memo');
$words['epg_goto_ch'] = _('Goto channel');
$words['epg_close_msg'] = _('Close');
$words['epg_on_ch']  = _('on channel');
$words['epg_now_begins'] = _('now begins');
$words['epg_on_time'] = _('in');
$words['epg_started'] = _('started');
$words['epg_more'] = _('MORE');
$words['epg_category'] = _('Category');
$words['epg_director'] = _('Director');
$words['epg_actors'] = _('Actors');
$words['epg_desc'] = _('Description');

/// TRANSLATORS: Search box languages. Comma separated without spaces.
$words['search_box_languages'] = explode(',', _('search_box_languages'));

/// TRANSLATORS: {0} - day, {1} - date, {2} - month, {3} - year.
$words['date_format'] = _('date_format');

/// TRANSLATORS: {0} - hours, {1} - minutes, {2} am/pm hour, {3} am/pm mark.
$words['time_format'] = _('time_format');

$words['timezone_label'] = _('Timezone');
$words['ntp_server'] = _('NTP Server');

$words['remote_pvr_del'] = _('DELETE');
$words['remote_pvr_stop'] = _('STOP');
$words['remote_pvr_del_confirm'] = _('Do you really want to delete this record?');
$words['remote_pvr_stop_confirm'] = _('Do you really want to stop this record?');

$words['alert_confirm'] = _('Confirm');
$words['alert_cancel'] = _('Cancel');

$words['recorder_server_error'] = _('Server error. Try again later.');
$words['record_duration'] = _('RECORDING DURATION');

$words['rest_length_title'] = _('FREE on the server, h');

$words['channel_recording_restricted'] = _('Recording this channel is forbidden');

$words['playback_settings_buffer_size'] = _('Buffer size');
$words['playback_settings_time'] = _('Time, sec');
$words['playback_settings_title'] = _('PLAYBACK');
$words['playback_settings_cancel'] = $words['settings_cancel'] = $words['cancel_btn'] = _('CANCEL');
$words['exit_btn'] = _('EXIT');
$words['yes_btn'] = _('YES');
$words['close_btn'] = _('CLOSE');
$words['ok_btn'] = _('OK');
$words['pay_btn'] = _('PAY');
$words['play_btn'] = _('PLAY');
$words['start_btn'] = _('START');
$words['add_btn'] = _('ADD');
$words['playback_settings_save'] = $words['settings_save'] = _('SAVE');

$words['audio_out'] = _('Audio out');
$words['audio_out_analog'] = _('Analog only');
$words['audio_out_analog_spdif'] = _('Analog and S/PDIF 2-channel PCM');
$words['audio_out_spdif'] = _('S/PDIF raw or 2-channel PCM');

$words['game'] = _('GAME');

// Downloads
$words['downloads_title'] = _('DOWNLOADS');
$words['not_found_mounted_devices'] = _('Not found mounted devices');
$words['downloads_add_download'] = _('Add download');
$words['downloads_device'] = _('Device');
$words['downloads_file_name'] = _('File name');
$words['downloads_ok'] = _('Ok');
$words['downloads_cancel'] = _('Cancel');
$words['downloads_create'] = _('CREATE');
$words['downloads_move_up'] = _('MOVE UP');
$words['downloads_move_down'] = _('MOVE DOWN');
$words['downloads_delete'] = _('DELETE');
$words['downloads_record'] = _('RECORDING');
$words['downloads_download'] = _('DOWNLOAD');
$words['downloads_record_and_file'] = _('RECORDING AND FILE');

$words['playback_limit_title']   = _('Duration of continuous playback');
$words['playback_limit_off']     = _('Without limit');
$words['playback_hours']         = _('hours');
$words['playback_limit_reached'] = _('Reached limit the duration of continuous playback. To continue playback, press the OK or EXIT.');

$words['common_settings_title']   = _('GENERAL SETTINGS');
$words['screensaver_delay_title'] = _('Screensaver interval');
$words['screensaver_off']         = _('Disabled');
$words['screensaver_minutes']     = _('min');

$words['demo_video_title']   = _('DEMO VIDEO');
$words['account_info_title'] = _('ACCOUNT');
$words['coming_soon']        = _('Coming soon');

$words['account_info']      = _('INFORMATION');
$words['account_payment']   = _('PAYMENT');
$words['account_pay']       = _('PAY');
$words['account_agreement'] = _('AGREEMENT');
$words['account_terms']     = _('TERMS OF USE');

$words['demo_video'] = _('Video instruction');


$words['tv_quality']        = _('QUALITY');
$words['tv_quality_low']    = _('low');
$words['tv_quality_medium'] = _('medium');
$words['tv_quality_high']   = _('high');

$words['tv_fav_add'] = _('add');
$words['tv_fav_del'] = _('del');

$words['internet']   = _('internet');

$words['network_status_title'] = _('NETWORK STATUS');
$words['network_status_refresh'] = _('REFRESH');

$words['test_speed'] = _('Speed test');
$words['speedtest_testing']   = _('testing...');
$words['speedtest_error']     = _('error');
$words['speedtest_waiting']   = _('waiting...');

$words['lan_up']     = _('UP');
$words['lan_down']   = _('DOWN');

$words['download_stopped']       = _('stopped');
$words['download_waiting_queue'] = _('waiting queue');
$words['download_running']       = _('running');
$words['download_completed']     = _('completed');
$words['download_temporary_error'] = _('temporary error');
$words['download_permanent_error'] = _('permanent error');

$words['auth_title'] = _('Authentication');
$words['auth_login'] = _('Login');
$words['auth_password'] = _('Password');
$words['auth_error']    = _('Error');

$words['play_or_download'] = _('Play this url or start download?');
$words['player_play']      = _('Play');

$words['player_download']    = _('Download');
$words['play_all']  = _('Play all');
$words['on']  = _('on');
$words['off'] = _('off');

$words['smb_auth'] = _('Network authentication');
$words['smb_username'] = _('Login');
$words['smb_password'] = _('Password');

$words['exit_title'] = _('Do you really want to exit?');

$words['identical_download_exist'] = _('There is an active downloads from this server');

$words['alert_form_title'] = _('Alert');
$words['confirm_form_title'] = _('Confirm');
$words['notice_form_title'] = _('Notice');
$words['select_form_title'] = _('Select');

$words['media_favorites'] = _('Favorites');

$words['stb_type_not_supported'] = _('Your STB is not supported');

$words['Phone'] = _('Phone');
$words['Tariff plan'] = _('Tariff plan');
$words['User'] = _('User');
$words['SERVICES MANAGEMENT'] = _('SERVICES MANAGEMENT');
$words['SUBSCRIBE'] = _('SUBSCRIBE');
$words['UNSUBSCRIBE'] = _('UNSUBSCRIBE');
$words['package_info_title'] = _('PACKAGE INFO');
$words['package_type'] = _('Type');
$words['package_content'] = _('Content');
$words['package_description'] = _('Description');

$words['confirm_service_subscribe_text'] = _('Are you really want to subscribe to this service?');
$words['confirm_service_unsubscribe_text'] = _('Are you really want to unsubscribe from this service?');
$words['confirm_service_price_text'] = _('The service costs {0}');

$words['service_subscribe_success'] = _('You have successfully subscribed to the service.');
$words['service_unsubscribe_success'] = _('You have successfully unsubscribed from the service.');

$words['service_subscribe_success_reboot'] = _('You have successfully subscribed to the service.  STB will be rebooted.');
$words['service_unsubscribe_success_reboot'] = _('You have successfully unsubscribed from the service. STB will be rebooted.');

$words['service_subscribe_fail'] = _('An error in the management of subscriptions.');
$words['service_subscribe_server_error'] = _('Server error. Try again later.');
$words['package_price_measurement'] = _('package_price_measurement');
$words['rent_movie_text'] = _('Do you really want to rent this movie?');
$words['rent_movie_price_text'] = _('The movie costs {0}');
$words['rent_duration_text'] = _('Rent duration: {0}h');

$words['Account number'] = _('Account number');
$words['Password'] = _('Password');

$words['End date'] = _('End date');


$words['3D mode'] = _('3D mode');

$words['mode {0}'] = _('mode {0}');

$words['no epg'] = _('no epg');
$words['wrong epg'] = _('wrong epg');

$words['iso_title'] = _('Part');

$words['error_channel_nothing_to_play'] = _('Channel not available');
$words['error_channel_limit'] = _('Channel temporary unavailable');
$words['error_channel_not_available_for_zone'] = _('Channel not available for this region');
$words['error_channel_link_fault'] = _('Channel not available. Server error.');
$words['error_channel_access_denied'] = _('Access denied');

$words['blocking_account_info'] = _('Account info');
$words['blocking_account_payment'] = _('Payment');
$words['blocking_account_reboot'] = _('Reload portal');

$words['archive_continue_playing_text'] = _('Continue playing?');
$words['archive_yes'] = _('YES');
$words['archive_no'] = _('NO');

$words['time_shift_exit_confirm_text'] = _('Do you want to quit the Time Shift mode?');

$words['mbrowser_sort_by_name'] = _('by name');
$words['mbrowser_sort_by_date'] = _('by date');

$words['Connection problem'] = _('Connection problem');
$words['Authentication problem'] = _('Authentication problem');

$words['Account balance'] = _('Account balance');


$words['remote_pvr_confirm_text'] = _('Start recording on the server?');
$words['remote_deferred_pvr_confirm_text'] = _('Do you really want to schedule a recording on the server?');
$words['pvr_target_select_text'] = _('Select where to save the record');
$words['usb_target_btn'] = _('USB Storage');
$words['server_target_btn'] = _('Server');
$words['save_path'] = _('Path');
$words['file_name'] = _('Filename');
$words['usb_device'] = _('USB Device');

$words['rec_stop_msg'] = _('rec_stop_msg');

$words['rec_file_missing'] = _('The recorded file is missing');
$words['rec_not_ended'] = _('Recording is not finished yet');
$words['rec_channel_has_scheduled_recording'] = _('The channel already has a scheduled recording');

$words['pvr_error_wrong_param'] = _('PVR Error: Wrong parameter');
$words['pvr_error_memory'] = _('PVR Error: Not enough memory to complete the operation');
$words['pvr_error_duration'] = _('PVR Error: Incorrect recording range');
$words['pvr_error_not_found'] = _('PVR Error: Task not found');
$words['pvr_error_wrong_filename'] = _('PVR Error: Wrong filename');
$words['pvr_error_record_exist'] = _('PVR Error: Record file already exists');
$words['pvr_error_url_open_error'] = _('PVR Error: Error opening channel URL');
$words['pvr_error_file_open_error'] = _('PVR Error: Error opening file');
$words['pvr_error_rec_limit'] = _('PVR Error: Exceeded the maximum number simultaneous recordings');
$words['pvr_error_end_of_stream'] = _('PVR Error: End of stream');
$words['pvr_error_file_write_error'] = _('PVR Error: Error writing to file');
$words['pvr_start_time'] = _('Start time');
$words['pvr_end_time'] = _('End time');
$words['pvr_duration'] = _('Duration');

$words['rec_options_form_title'] = _('Recording');
$words['local_pvr_interrupted'] = _('Recording on USB device interrupted');

$words['parent_password_error'] = _('Wrong');
$words['parent_password_title'] = _('Parent control');
$words['settings_password_title'] = _('Access control');
$words['password_label'] = _('Password');

$words['encoding_label'] = _('Encoding');

$words['network_folder'] = _('Network folder');
$words['server_ip'] = _('IP address');
$words['server_path'] = _('Path');
$words['local_folder'] = _('Local folder');
$words['server_type'] = _('Type');
$words['server_login'] = _('Login');
$words['server_password'] = _('Password');
$words['add_folder'] = _('ADD');
$words['server_ip_placeholder'] = _('Server address');
$words['server_path_placeholder'] = _('Path to the folder');
$words['local_folder_placeholder'] = _('Folder name in favorites');
$words['local_folder_placeholder'] = _('Folder name in favorites');
$words['error'] = _('error');

$words['mount_failed'] = _('Mount failed');

$words['ad_skip'] = _('SKIP');
$words['commercial'] = _('COMMERCIAL');

//Clock On Video by Agnitumus
$words['videoClockTitle'] =      _('Clock');
$words['videoClock_off'] =       _('Hidden');
$words['videoClock_upRight'] =   _('Top Right');
$words['videoClock_upLeft'] =    _('Top Left');
$words['videoClock_downRight'] = _('Bottom Right');
$words['videoClock_downLeft'] =  _('Bottom Left');
//End Clock On Video

$words['settings_unavailable'] = _('Settings section is currently unavailable');

$words['no_dvb_channels_title'] = _('No channels available');
$words['go_to_dvb_settings'] = _('You can configure DVB channels in the settings menu');

$words['apps_title'] = _('Applications');

$words['coming_soon_video'] = _('Video will be available soon');

$words['app_install_confirm'] = _('Install application?');

$words['audioclub_title'] = _('AUDIO CLUB');
$words['track_search'] = _('TRACK SEARCH');
$words['album_search'] = _('ALBUM SEARCH');
$words['add_to_playlist'] = _('ADD TO PLAYLIST');
$words['remove_from_playlist'] = _('DEL FROM PLAYLIST');
$words['playlist'] = _('PLAYLIST');
$words['audioclub_year'] = _('Year');
$words['audioclub_country'] = _('Country');
$words['audioclub_languages'] = _('Language');
$words['audioclub_language'] = _('Language');
$words['audioclub_performer'] = _('Artist');
$words['audioclub_album'] = _('Album');
$words['audioclub_albums'] = _('Albums');
$words['audioclub_tracks'] = _('Compositions');

$words['audioclub_select_playlist'] = _('Playlist select');
$words['audioclub_playlist'] = _('Playlist');
$words['new_btn'] = _('NEW');
$words['playlist_name'] = _('Name');
$words['audioclub_new_playlist'] = _('New Playlist');
$words['audioclub_saving_error'] = _('Error while saving');
$words['audioclub_create_new'] = _('CREATE NEW');
$words['remove_from_playlist_confirm'] = _('Do you really want to delete this track from playlist?');
$words['delete_playlist_confirm'] = _('Do you really want to delete this playlist?');
$words['audioclub_remove_playlist'] = _('DELETE');

$words['vk_music_title'] = _('VK MUSIC');
$words['all_title'] = _('All');

$words['outdated_firmware'] = _('Firmware of your STB is outdated.<br>Please update it.');

$words['LOGOUT'] = _('LOGOUT');
$words['confirm_logout_title'] = _('Confirm');
$words['confirm_logout'] = _('Do you really want to log out?');
