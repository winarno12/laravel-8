<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Self_;

class Post
{
    private static $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Attarine Cicio Ramadhan",
            "body"      => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo nostrum eligendi odit velit sunt tempore deserunt, quidem eaque dolore beatae rerum doloremque, sapiente itaque vel placeat provident voluptatibus vero dolorem suscipit fuga obcaecati quos! Iure ipsam temporibus accusamus hic libero, illum quidem maiores pariatur saepe nulla. Praesentium, eius totam perferendis ipsa distinctio maxime voluptas quas iure harum perspiciatis veniam dolorum, ut voluptatibus nemo. Blanditiis illo facilis sed, voluptatibus vero est architecto distinctio, mollitia dolor autem optio aperiam? Architecto, ipsam suscipit."
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Bernard",
            "body"      => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet libero magnam unde reprehenderit et? Sit illo nihil consectetur quaerat, atque ducimus praesentium recusandae error rerum exercitationem eum voluptates porro enim, aspernatur, delectus tenetur! Aspernatur, laborum culpa nam ad odit repellat amet doloribus natus, nemo, numquam beatae voluptate aliquid? Autem commodi temporibus dolores recusandae in error facilis veniam iste dolorum, nostrum, perferendis delectus exercitationem maiores atque voluptatem nam a nisi itaque labore mollitia? Earum quibusdam repellat minima eos vero, iste omnis laboriosam labore veritatis nam tempora sapiente hic fugiat dolorum magnam! Debitis voluptatibus facere cumque dicta, temporibus incidunt saepe minus corporis."
        ],
    ];

    public function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
