<?php

namespace App\Providers;

use OpenAdmin\Admin\Config\Config;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $table = config('admin.extensions.config.table', 'admin_config');
        if (Schema::hasTable($table)) {
            Config::load();
        }
    }
}
