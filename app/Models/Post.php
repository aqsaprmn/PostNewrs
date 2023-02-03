<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    // private static $news_posts = [
    //     [
    //         'title' => "Judul Pertama",
    //         'slug' => "judul_pertama",
    //         'author' => "Aqsha Permana",
    //         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae perspiciatis dignissimos maiores enim neque laboriosam ratione sit, dolores vitae delectus. Itaque earum recusandae architecto nulla, nesciunt ex veniam assumenda molestias sunt natus ea quia laborum saepe error rem quisquam quod similique dignissimos consequatur numquam voluptas inventore modi. Incidunt quis ea neque earum, eius repellat, aliquid adipisci beatae, saepe nulla et. Soluta eaque ab quia consequatur provident, suscipit veritatis, sunt error fugiat ratione nostrum quaerat non, expedita autem omnis numquam! Deleniti, sint! Iste nemo quam repudiandae necessitatibus dolore perspiciatis modi rem ipsum. Odio blanditiis quas ex perspiciatis minima doloribus obcaecati? Esse."
    //     ],
    //     [
    //         'title' => "Judul Kedua",
    //         'slug' => "judul_kedua",
    //         'author' => "Freyza Kusuma",
    //         "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae perspiciatis dignissimos maiores enim neque laboriosam ratione sit, dolores vitae delectus. Itaque earum recusandae architecto nulla, nesciunt ex veniam assumenda molestias sunt natus ea quia laborum saepe error rem quisquam quod similique dignissimos consequatur numquam voluptas inventore modi. Incidunt quis ea neque earum, eius repellat, aliquid adipisci beatae, saepe nulla et. Soluta eaque ab quia consequatur provident, suscipit veritatis, sunt error fugiat ratione nostrum quaerat non, expedita autem omnis numquam! Deleniti, sint! Iste nemo quam repudiandae necessitatibus dolore perspiciatis modi rem ipsum. Odio blanditiis quas ex perspiciatis minima doloribus obcaecati? Esse."
    //     ]
    // ];

    // public static function all()
    // {
    //     return collect(self::$news_posts);
    // }

    // public static function find($slug)
    // {
    //     $news_posts = static::all();
    //     // $post = [];
    //     // foreach ($news_posts as $p) {
    //     //     if ($p['slug'] == $slug) {
    //     //         $post = $p;
    //     //     }
    //     // }

    //     return $news_posts->firstWhere('slug', $slug);
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
