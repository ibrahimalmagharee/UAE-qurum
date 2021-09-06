<?php

namespace App\Providers;



use App\Models\ContactUs;
use App\Models\SystemSettings;
use App\Services\SharingSettingsService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('settings', function() {

            $sharing_settings_service = new SharingSettingsService();
            $settings = mapSystemSettings(SystemSettings::all());

            foreach ($settings as $key => $value) {
                $sharing_settings_service->share($key, $value);
            }

            return $sharing_settings_service;
        });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);

    }
}
