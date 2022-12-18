<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;

class ClientController extends Controller
{
    public function home(): Factory|View|Application
    {
        $settings = Settings::find(1);
        return view('client.home', compact('settings'));
    }

    public function aboutUs()
    {
        $settings = Settings::find(1);
        return view('client.about_us', compact('settings'));
    }
    public function contactUs()
    {
        $settings = Settings::find(1);
        return view('client.contact_us', compact('settings'));
    }
}
