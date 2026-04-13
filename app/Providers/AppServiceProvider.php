<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CatVinculoPrincipal;
use App\Models\Navbar;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        view()->composer('*', function ($view) {


            $menu = CatVinculoPrincipal::where('estatus', 1)
                        ->orderBy('orden')
                        ->get();

            $navbar = Navbar::whereNotNull('idpadre') // SOLO PADRES
                        ->whereNull('idhijo')
                        ->where('estatus', 1)
                        ->orderBy('orden')
                        ->with(['hijos' => function ($query) {
                            $query->whereNotNull('idhijo')
                                  ->where('estatus', 1)
                                  ->orderBy('orden');
                        }])
                        ->get();

            $view->with([
                'menu' => $menu,
                'navbar' => $navbar
            ]);

        });
    }
}