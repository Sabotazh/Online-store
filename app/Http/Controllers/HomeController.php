<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";

        return view('home.index')->with("viewData", $viewData);
    }

    public function about(): View
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "This is an about page ...";
        $viewData["author"] = "Developed by: Your Name";

        return view('home.about')->with("viewData", $viewData);
    }
}
