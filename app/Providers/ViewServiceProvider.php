<?php

namespace App\Providers;

use App\Models\LayoutInfo;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('app.Layout', function ($view) {
            $layoutInfo = LayoutInfo::first(); // par exemple
            $view->with('layoutInfo', $layoutInfo);
        });
    }
}
