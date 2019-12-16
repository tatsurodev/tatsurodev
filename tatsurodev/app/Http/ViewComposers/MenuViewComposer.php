<?php

namespace App\Http\ViewComposers;

use App\Locale;
use App\Menu;

class MenuViewComposer
{
    public function compose($view)
    {
        // localized traitsでなくlocale instanceとのrelationからmenusを取得、scopeを使ってもどっちでもよい
        $locale = session()->get('locale') ?? Locale::where('is_default', true)->first()->name;
        $view->with('menus', Locale::where('name', $locale)->first()->menus);
        // $view->with('menus', Menu::localizedData()->get());
    }
}
