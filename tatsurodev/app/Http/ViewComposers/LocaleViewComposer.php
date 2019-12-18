<?php

namespace App\Http\ViewComposers;

use App\Locale;

class LocaleViewComposer
{
    public function compose($view)
    {
        $currentLocale = Locale::where('name', session()->get('locale'))->first();
        $view->with('locales', Locale::all())->with('currentLocale', $currentLocale);
    }
}
