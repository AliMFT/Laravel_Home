<?php

use App\Models\POST;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;




Route::get('/', function () {
    return view("home",[
        'posts'=> POST::all()
    ]);
});


Route::get('posts/{post}', function ($slug) {
    return view('post', [
        'post' => POST::find($slug)
    ]);
})->where('post', '[a-z_\-]+');





