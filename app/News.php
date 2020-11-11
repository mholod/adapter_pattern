<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    public static function getNews(Mark $mark)
    {
        return "All the NEWS near the {$mark->town}";
    }
}
