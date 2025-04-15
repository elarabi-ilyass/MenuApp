<?php

namespace App\Providers;

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(){
        // Méthode personnalisée pour les images
        Blade::directive('voyager_image', function ($expression) {
            return "<?php echo asset('storage/' . str_replace('\\\\', '/', ltrim({$expression}, '/'))); ?>";
        });
    }
}
