<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Anton Gunawan',
            'username' => 'antongunawan',
            'email' => 'antongnwn0@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Han',
        //     'username' => 'han',
        //     'email' => 'han@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excrept' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat vero? Voluptas ea vero vitae in deserunt, ipsa culpa! Laborum illo quas voluptatem quae natus blanditiis, repellat sequi, molestias fugiat libero praesentium exercitationem quaerat deleniti eligendi necessitatibus aspernatur dolorem asperiores quos. Culpa, doloribus a. Enim rerum qui amet perferendis. Ipsum quaerat corrupti sapiente deserunt, vero, nostrum quibusdam, adipisci dolor voluptate voluptatum harum quidem!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excrept' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat vero? Voluptas ea vero vitae in deserunt, ipsa culpa! Laborum illo quas voluptatem quae natus blanditiis, repellat sequi, molestias fugiat libero praesentium exercitationem quaerat deleniti eligendi necessitatibus aspernatur dolorem asperiores quos. Culpa, doloribus a. Enim rerum qui amet perferendis. Ipsum quaerat corrupti sapiente deserunt, vero, nostrum quibusdam, adipisci dolor voluptate voluptatum harum quidem!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excrept' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat vero? Voluptas ea vero vitae in deserunt, ipsa culpa! Laborum illo quas voluptatem quae natus blanditiis, repellat sequi, molestias fugiat libero praesentium exercitationem quaerat deleniti eligendi necessitatibus aspernatur dolorem asperiores quos. Culpa, doloribus a. Enim rerum qui amet perferendis. Ipsum quaerat corrupti sapiente deserunt, vero, nostrum quibusdam, adipisci dolor voluptate voluptatum harum quidem!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excrept' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, sapiente minus eum tempore nulla voluptates accusamus quaerat vero? Voluptas ea vero vitae in deserunt, ipsa culpa! Laborum illo quas voluptatem quae natus blanditiis, repellat sequi, molestias fugiat libero praesentium exercitationem quaerat deleniti eligendi necessitatibus aspernatur dolorem asperiores quos. Culpa, doloribus a. Enim rerum qui amet perferendis. Ipsum quaerat corrupti sapiente deserunt, vero, nostrum quibusdam, adipisci dolor voluptate voluptatum harum quidem!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
