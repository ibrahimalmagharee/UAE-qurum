<?php

namespace Database\Seeders;

use App\Models\SystemSettings;
use Illuminate\Database\Seeder;

class SettingsDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                '_key' => 'app_name_ar',
                '_value' => 'القرم الإماراتي',
            ],
            [
                '_key' => 'app_name_en',
                '_value' => 'UAE Qurum',
            ],
            [
                '_key' => 'footer_logo',
                '_value' => 'footer-logo.png',
            ],
        ];

        foreach ($settings as $setting) {
            SystemSettings::create($setting);
        }

    }
}
