<?php

namespace App\Http\ViewComposers;

use App\Menu;

class MenuViewComposer
{
    public function compose($view)
    {
        $view->with('menus', Menu::all());
    }
}
