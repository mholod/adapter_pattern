<?php

namespace App\Http\Controllers;

use App\Locator;
use App\News;
use Illuminate\Http\Request;

class LocalNewsController extends Controller
{
    public function index(Request $request, Locator $locator)
    {
        $mark = $locator->fromIp($request->ip());
        
        $news = News::getNews($mark);
        
        return $news;
    }
}
