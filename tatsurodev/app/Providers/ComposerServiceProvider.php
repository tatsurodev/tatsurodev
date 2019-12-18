<?php

namespace App\Providers;

use App\Http\ViewComposers\MenuViewComposer;
use App\Http\ViewComposers\SkillViewComposer;
use App\Http\ViewComposers\FormOldHelperViewComposer;
use App\Http\ViewComposers\LocaleViewComposer;
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
            SkillViewComposer::class => [
                'homes._portfolio-skill-body',
            ],
            // FormOldHelperViewComposer::class => [
            //     'skills._create',
            // ],
            LocaleViewComposer::class => [
                'skills._create',
                'qandas._create',
                'layouts.app',
            ],

        ]);
    }
}
