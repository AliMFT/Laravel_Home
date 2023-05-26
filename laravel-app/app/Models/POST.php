<?php
namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Yaml;
use function Symfony\Component\String\s;

class POST
{
    public string $title;
    public string $body;
    public string $date;
    public  string $slug;
    public function __construct($title,$body,$date,$slug){
        $this->title=$title;
        $this->body=$body;
        $this->date=$date;
        $this->slug=$slug;
    }
    public static function find($slug){
        return static::all()->firstWhere('slug',$slug);
    }

    public static function all()
    {
        return cache ()->remember("posts.all", 5, function (){
            $files = File::files(resource_path('posts'));
            return collect($files)->map(function ($file){
                $object = YamlFrontMatter::parseFile($file);
                return new POST(
                    $object->matter('title'),
                    $object->body(),
                    $object->matter("date"),
                    $object->matter("slug")

                );
            })->sortBy('date');
        });

    }


}
