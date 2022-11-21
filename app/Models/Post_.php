<?php

namespace App\Models;


class Post
{
    // Array Assosiative
    private static $blos_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Anton Gunawan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque sit ullam optio hic dolore nostrum, 
            illo doloribus temporibus eum aperiam rerum sed soluta! Veniam quis obcaecati, eveniet beatae cumque praesentium repellat exercitationem! Magnam consequuntur voluptatibus, 
            omnis repellat quibusdam suscipit rem consectetur, qui nam, accusamus recusandae! Dolores ut officia vitae quae."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Hans",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque sit ullam optio hic dolore nostrum, 
            illo doloribus temporibus eum aperiam rerum sed soluta! Veniam quis obcaecati, eveniet beatae cumque praesentium repellat exercitationem! Magnam consequuntur voluptatibus, 
            omnis repellat quibusdam suscipit rem consectetur, qui nam, accusamus recusandae! Dolores ut officia vitae quae."
        ]
    ];

    public static function all()
    {
        // Ambil Array menggunakan Collect
        return collect(self::$blos_posts);
    }

    public static function find($slug)
    {
        // Cara Dasar
        // $posts = static::all();
        // return $posts->firstWhere('slug', $slug);

        // Cara Simple
        return static::all()->firstWhere('slug', $slug);
    }
}
