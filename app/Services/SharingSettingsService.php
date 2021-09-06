<?php
/**
 * Created by PhpStorm.
 * User: Khaled Al-Haj Salem
 * Date: 6/10/2019
 * Time: 10:45 AM
 */

namespace App\Services;


class SharingSettingsService
{
    private $settings = [];

    public function share($name, $value)
    {
        $this->settings[$name] = $value;
    }

    public function get($name, $default = null)
    {
        if (isset($this->settings[$name])) {
            return $this->settings[$name];
        }

        return $default;
    }

    public function all()
    {
        return $this->settings;
    }
}
