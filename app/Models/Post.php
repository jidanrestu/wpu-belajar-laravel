<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    // use HasFactory;

    private static $blog_posts = [
        [
            'judul' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Author Pertama',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quos reiciendis modi ipsa totam, nisi animi. Provident iure beatae voluptatum dolor quidem unde, quia eaque culpa aut delectus impedit itaque id ipsa nesciunt excepturi, consectetur architecto voluptatibus consequuntur adipisci! Sunt magni excepturi expedita similique vel illo libero, dolores delectus! Modi ducimus aliquid ipsum voluptate? Architecto ratione facilis aspernatur quam harum aut totam! Aperiam aliquam porro consectetur numquam iusto, soluta saepe delectus nisi eum eaque unde dolore dolorem quisquam quasi dignissimos assumenda. Quasi, molestias aperiam sequi labore voluptatem porro velit aut. Laudantium impedit culpa iste mollitia in, tenetur vero dicta veritatis?',
        ],
        [
            'judul' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Author Kedua',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis veritatis harum repellat labore omnis accusamus? In consequatur doloribus eveniet inventore voluptatum odit quaerat exercitationem. Veritatis, nam est commodi ea esse quae, molestiae distinctio sint inventore consequatur sequi aut perspiciatis magni tenetur maiores rerum laborum modi atque nobis quibusdam facere sapiente harum? Quisquam laborum neque ab officiis consectetur ipsum? Commodi eligendi fuga nihil totam earum doloribus neque, laudantium omnis sequi? Quaerat molestias placeat fugit deleniti, soluta, expedita alias perferendis facere, amet id commodi minus nihil optio. Incidunt et magni, nesciunt ullam quos perferendis odit sed, doloribus possimus suscipit libero sequi. Doloremque.',
        ],
        [
            'judul' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Author Ketiga',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae et, optio doloribus hic facere, rem animi, earum vero exercitationem veniam laborum sint quasi quibusdam delectus expedita velit illo similique inventore. Ab doloremque, in fugit ratione repellat nesciunt alias aut beatae temporibus eaque! Vel molestiae aspernatur nobis tempore asperiores, voluptates dicta alias mollitia assumenda saepe, quam non natus numquam vero sed blanditiis itaque perspiciatis sapiente? Eaque doloremque sequi ipsa iusto delectus laborum architecto debitis quod nam eveniet assumenda dolore amet, quo dolorum eius quia sapiente quas laboriosam cumque maxime? Error eaque rerum iure officia voluptate accusamus natus officiis unde. Voluptas, reiciendis!',
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);

        // $post = array_filter(self::$blog_posts, function ($post) use ($slug) {
        //     return $post['slug'] === $slug;
        // });
        // return array_shift($post);
    }
}
