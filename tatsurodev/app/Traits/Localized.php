<?php

namespace App\Traits;

use App\Locale;

trait Localized
{
    // locale scope作成
    public function scopeLocalizedData($query)
    {
        // localeをsessionから取得、なければdefaultのlocale使用
        $locale = session()->get('locale') ?? Locale::where('is_default', true)->first()->name;
        $locale_id = Locale::where('name', $locale)->first()->id;
        return $query->where('locale_id', $locale_id);
    }
}
