<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Testimoni;
use App\Models\Faq;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    public function index()
    {
        
        $testimoni = Testimoni::whereNull('deleted_at')->orderBy('id')->get();
        return view('home',compact('testimoni'));
    }


    public function pricing()
    {
        $faq = Faq::whereNull('deleted_at')->orderBy('id')->get();
        return view('pricing',compact('faq'));
    }

    public function support()
    {
        return view('web.support');
    }

    public function support_webview()
    {
        return view('web.support_webview');
    }


    public function privacyPolicy()
    {
        return view('web.privacy-policy');
    }


    public function about()
    {
        return view('web.about');
    }

    public function contact()
    {
        return view('web.contact');
    }

 
}
