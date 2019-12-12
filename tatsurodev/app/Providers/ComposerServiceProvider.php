<?php

namespace App\Providers;

use App\Http\ViewComposers\MenuViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view composerを複数登録
        View::composers([
            MenuViewComposer::class => [
                'layouts.app',
                'homes.index',
            ],
        ]);
    }
}
