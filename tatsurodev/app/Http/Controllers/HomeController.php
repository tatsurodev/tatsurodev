<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('homes.index');
    }

    public function locale($locale)
    {
        $language = $locale === 'ja' ? __('Japanese') : __('English');
        session()->put('locale', $locale);
        return redirect()->back()->withStatus(__('messages.change_locale', ['language' => $language]));
    }
}
