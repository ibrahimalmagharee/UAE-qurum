<?php

date_default_timezone_set('Asia/Dubai');


function get_lang()
{
    return session('locale') ?? 'ar';
}

function get_admin_locale()
{
    return session('admin_locale') ?? 'ar';
}

function get_direction()
{
    return get_admin_locale() === 'en' ? 'ltr'  : 'rtl';
}

function set_lang($lang)
{
    $session_data = !empty($lang) && in_array($lang,['ar','en']) ? ['lang' => $lang] : ['lang' => 'ar'];

    session($session_data);
}


function app_url($url)
{
    return request()->server('HTTP_X_FORWARDED_PROTO') == 'https' ? secure_url($url) : url($url);
}


function mapSystemSettings($settings_coll)
{
    $settings = [];

    foreach($settings_coll as $row)
    {
        $settings[$row->_key] = $row->_value;
    }

    return $settings;
}


function mapContent($content)
{
    $result = [];

    foreach ($content as $c) {
        $result[$c->section][$c->content_key] = $c->content_value;
    }

    return $result;
}


function upload_file($file, $path)
{
    $upload_path = public_path($path);

    if (!is_dir($upload_path)) {
        mkdir($upload_path, 0755);
    }

    $file_name = rand(999,99999).'_'.time() . '.' . $file->getClientOriginalExtension();

    $file->move($upload_path, $file_name);

    return $file_name;
}



function mapChart2Data($data)
{
    $data = json_decode($data,true);
    $result = [];

    if (is_array($data)) {
        foreach ($data as $k => $v) {
            $result[] = [
                'category' => $k,
                'column-1' => $v,
            ];
        }
    }

    return $result;
}


function getAppName()
{
    return app('settings')->get('app_name_ar');
}


function app_asset($path)
{
    return app()->environment('production') ? secure_url($path) : url($path);
}

function video_url($video)
{
    $url = route('video.url',$video, false);
    return app()->environment('production') ? secure_url($url) : url($url);
}


function route_url($route,$params=null)
{
    $route = route($route,$params,false);
    return app()->environment('production') ? secure_url($route) : url($route);
}
