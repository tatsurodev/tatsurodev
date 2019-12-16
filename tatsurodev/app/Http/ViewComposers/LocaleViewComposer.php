<?php

namespace App\Http\ViewComposers;

use App\Locale;

class LocaleViewComposer
{
    public function compose($view)
    {
        $view->with('locales', Locale::all());
    }
}
