<?php

include "./common.php";

if (empty($_GET['uid'])){

    exit;
}

$file = file_get_contents('../../new/launcher/profile.json');

$profile = json_decode($file, true);

$apps = new AppsManager();
$external_apps = $apps->getList(true);

$installed_apps = array_values(array_filter($external_apps, function($app){
    return $app['installed'] == 1 && $app['status'] == 1 && !empty($app['alias']);
}));

$installed_apps_names = array_map(function($app){
    return 'external_'.$app['alias'];
}, $installed_apps);

$all_modules = array_merge(Config::get('all_modules'), $installed_apps_names);
$disabled_modules = Stb::getDisabledModulesByUid((int) $_GET['uid']);

$user = Stb::getById((int) $_GET['uid']);

// if user is off - return empty menu
if ($user['status'] == 1){

    $profile['menu'] = array();

    echo json_encode($profile);
    exit;
}

$profile['apiDomain'] = $profile['stalkerAuthDomain'] = 'http'.(((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? 's' : '')
    .'://'.$_SERVER['HTTP_HOST']
    .Config::getSafe('portal_url', '/stalker_portal/')
    .'api/api_v2.php?_resource=';

$profile['authDomain'] = 'http'.(((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) ? 's' : '')
    .'://'.$_SERVER['HTTP_HOST']
    .Config::getSafe('portal_url', '/stalker_portal/')
    .'auth/token.php';

$profile['pingTimeout'] = Config::getSafe('watchdog_timeout', 120) * 1000;

$available_modules = array_diff($all_modules, $disabled_modules);
$available_modules[] = 'portal settings';

$module_to_app_map = array(
    'vclub'         => 'video club',
    'audioclub'     => 'audio club',
    'media_browser' => 'explorer',
    'weather.day'   => 'weather',
    'ex'            => 'ex.ua',
    'game.lines'    => 'lines',
    'game.memory'   => 'memory',
    'game.sudoku'   => 'sudoku',
    'internet'      => 'browser',
    'game.2048'     => '2048'
);

$available_modules = array_map(function($module) use ($module_to_app_map){
    return isset($module_to_app_map[$module]) ? $module_to_app_map[$module] : $module;
}, $available_modules);

$menu = $profile['menu'];

$user_menu = array();

foreach ($menu as $section){

    $section['items'] = array_values(array_filter($section['items'], function($item) use ($available_modules){
        return in_array($item['name'], $available_modules);
    }));

    // add external apps
    if ($section['name'] == 'Apps') {

        foreach ($installed_apps as $app) {
            $section['items'][] = array(
                'name'  => $app['alias'],
                'info'  => $app['description'],
                'icon'  => $app['app_url'].'/img/{0}/'.$app['icons'].'/2015.png',
                'color' => $app['icon_color'],
                'url'   => $app['app_url'],
                'type'  => 'iframe'
            );
        }
    }

    $user_menu[] = $section;
}

$user_menu = array_values(array_filter($user_menu, function($section){
    return !empty($section['items']);
}));

$profile['menu'] = $user_menu;

echo json_encode($profile);