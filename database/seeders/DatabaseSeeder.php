<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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

        // User::create([
        //     'name'  => 'Attarine Cicio Ramadhan',
        //     'email' => 'cicio@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        // User::create([
        //     'name'  =>  'Salma',
        //     'email' => 'salma@gmail.com',
        //     'password'  => bcrypt('12345')
        // ]);

        User::factory(5)->create();
        Category::create([
            'name'  => 'Personal',
            'slug'  => 'personal'
        ]);

        Category::create([
            'name'  => 'Web Programing',
            'slug'  => 'web-programing'
        ]);
        post::factory(10)->create();
        // Post::create([
        //     'title'     => 'Judul Pertama',
        //     'slug'      => 'judul-pertama',
        //     'excerpt'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a',
        //     'body'      => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a. Porro officia sint beatae quis delectus laudantium deleniti, neque reiciendis nihil dolor officiis earum nesciunt cumque nostrum vitae adipisci soluta explicabo quam labore? Ullam assumenda, expedita eius eveniet necessitatibus sapiente cum, facere autem delectus soluta earum deleniti tempora atque totam minus labore quibusdam quo perspiciatis! Unde temporibus cum eveniet ea labore totam quaerat, aperiam deleniti eos odit libero excepturi aspernatur nisi minus a explicabo maxime aliquam modi voluptatum aliquid sapiente! Deleniti odio facilis vitae, omnis quidem eos voluptatem! Aliquam accusantium incidunt, quod odit laudantium minima?',
        //     'category_id'   => 1,
        //     'user_id'       => 2
        // ]);

        // Post::create([
        //     'title'     => 'Judul Kedua',
        //     'slug'      => 'judul-kedua',
        //     'excerpt'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a',
        //     'body'      => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a. Porro officia sint beatae quis delectus laudantium deleniti, neque reiciendis nihil dolor officiis earum nesciunt cumque nostrum vitae adipisci soluta explicabo quam labore? Ullam assumenda, expedita eius eveniet necessitatibus sapiente cum, facere autem delectus soluta earum deleniti tempora atque totam minus labore quibusdam quo perspiciatis! Unde temporibus cum eveniet ea labore totam quaerat, aperiam deleniti eos odit libero excepturi aspernatur nisi minus a explicabo maxime aliquam modi voluptatum aliquid sapiente! Deleniti odio facilis vitae, omnis quidem eos voluptatem! Aliquam accusantium incidunt, quod odit laudantium minima?',
        //     'category_id'   => 1,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title'     => 'Judul Ketiga',
        //     'slug'      => 'judul-ketiga',
        //     'excerpt'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a',
        //     'body'      => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a. Porro officia sint beatae quis delectus laudantium deleniti, neque reiciendis nihil dolor officiis earum nesciunt cumque nostrum vitae adipisci soluta explicabo quam labore? Ullam assumenda, expedita eius eveniet necessitatibus sapiente cum, facere autem delectus soluta earum deleniti tempora atque totam minus labore quibusdam quo perspiciatis! Unde temporibus cum eveniet ea labore totam quaerat, aperiam deleniti eos odit libero excepturi aspernatur nisi minus a explicabo maxime aliquam modi voluptatum aliquid sapiente! Deleniti odio facilis vitae, omnis quidem eos voluptatem! Aliquam accusantium incidunt, quod odit laudantium minima?',
        //     'category_id'   => 2,
        //     'user_id'       => 1
        // ]);

        // Post::create([
        //     'title'     => 'Judul Keempat',
        //     'slug'      => 'judul-keempat',
        //     'excerpt'   => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a',
        //     'body'      => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus error ea natus soluta asperiores a. Porro officia sint beatae quis delectus laudantium deleniti, neque reiciendis nihil dolor officiis earum nesciunt cumque nostrum vitae adipisci soluta explicabo quam labore? Ullam assumenda, expedita eius eveniet necessitatibus sapiente cum, facere autem delectus soluta earum deleniti tempora atque totam minus labore quibusdam quo perspiciatis! Unde temporibus cum eveniet ea labore totam quaerat, aperiam deleniti eos odit libero excepturi aspernatur nisi minus a explicabo maxime aliquam modi voluptatum aliquid sapiente! Deleniti odio facilis vitae, omnis quidem eos voluptatem! Aliquam accusantium incidunt, quod odit laudantium minima?',
        //     'category_id'   => 2,
        //     'user_id'       => 2
        // ]);
    }
}
