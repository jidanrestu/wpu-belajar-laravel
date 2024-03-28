<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Jidan Restu Kurniawan',
        'email' => 'jidan@me.com',
        'image' => 'gambar.png'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_posts,
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $selected_post = [];
    foreach ($blog_posts as $post) {
        if ($slug == $post['slug']) {
            $selected_post = $post;
        }
    }
    return view('post', [
        'title' => $selected_post['judul'],
        'post' => $selected_post,
    ]);
});
