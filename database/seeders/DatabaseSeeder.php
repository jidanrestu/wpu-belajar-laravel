<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Jidan Restu Kurniawan', 'username' => 'jidan', 'email' => 'jidan@gmail.com', 'password' => bcrypt('jrk@pass')]);
        User::factory(5)->create();

        // User::create(['name' => 'Achmad Rezky Gunawan', 'email' => 'rezky@email.dev', 'password' => bcrypt('arg@pass'),]);

        Category::create(['name' => 'Web Development', 'slug' => 'web-development']);
        Category::create(['name' => 'Mobile Development', 'slug' => 'mobile-development']);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Donec suscipit volutpat felis sed consequat. Aliquam mattis scelerisque blandit. Suspendisse tristique, nibh vitae dignissim dapibus, est sapien facilisis dui, id accumsan nisl purus sit amet odio. Cras id purus nec lectus tincidunt rhoncus eget vel diam. Etiam tortor tortor, sollicitudin non commodo a, laoreet sit amet nisi. Aliquam convallis ex ut commodo faucibus. Nam sit amet ornare tellus.',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'body' => '<p>Donec suscipit volutpat felis sed consequat. Aliquam mattis scelerisque blandit. Suspendisse tristique, nibh vitae dignissim dapibus, est sapien facilisis dui, id accumsan nisl purus sit amet odio. Cras id purus nec lectus tincidunt rhoncus eget vel diam. Etiam tortor tortor, sollicitudin non commodo a, laoreet sit amet nisi. Aliquam convallis ex ut commodo faucibus. Nam sit amet ornare tellus.</p><p>Fusce quis mi mattis, molestie risus at, lobortis nisi. Nulla facilisi. Quisque aliquam interdum facilisis. Proin nec neque suscipit, feugiat turpis at, facilisis nisl. Cras laoreet ornare lorem, lacinia mollis urna pharetra ut. Aenean pretium neque in massa tempus iaculis. Morbi dignissim tempor enim, nec ornare libero pharetra in. Phasellus id blandit leo. Etiam et fermentum arcu. Aenean dictum quam eget ligula bibendum placerat. Proin auctor fermentum leo nec pellentesque. In auctor cursus metus, in finibus magna scelerisque quis. Integer auctor nisl nec faucibus consequat.</p><p>Fusce lacus dui, facilisis id sagittis quis, pharetra id erat. Integer lacus purus, efficitur a dolor quis, scelerisque gravida nisl. Morbi sapien purus, ullamcorper sed tortor ut, pharetra dictum eros. Donec justo quam, pellentesque blandit placerat et, rutrum vel eros. In ut magna ac nibh fermentum vestibulum. Vestibulum sed augue libero. Integer sit amet ultrices purus.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'In sed scelerisque sapien. Donec molestie arcu hendrerit accumsan elementum. Vivamus sit amet placerat ex, in eleifend felis. Morbi dignissim lacinia nisi, nec posuere ante porta vel. Fusce luctus fringilla nibh id sagittis. Aenean non sem malesuada, auctor nibh id, tempus enim. Donec laoreet tincidunt metus et aliquam. Proin nec tempus nisi, et tristique risus. Sed quis dapibus ex. Morbi tempor eros a ipsum consequat blandit. Pellentesque id mattis dolor.',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'body' => '<p>In sed scelerisque sapien. Donec molestie arcu hendrerit accumsan elementum. Vivamus sit amet placerat ex, in eleifend felis. Morbi dignissim lacinia nisi, nec posuere ante porta vel. Fusce luctus fringilla nibh id sagittis. Aenean non sem malesuada, auctor nibh id, tempus enim. Donec laoreet tincidunt metus et aliquam. Proin nec tempus nisi, et tristique risus. Sed quis dapibus ex. Morbi tempor eros a ipsum consequat blandit. Pellentesque id mattis dolor.</p><p>Vestibulum lacinia molestie nisl eu elementum. Etiam interdum sapien ac magna pellentesque pellentesque. Duis eu mauris sed leo tempus dictum. Aenean efficitur at urna at facilisis. Vivamus et tempor velit. Nunc hendrerit tempus enim, non rhoncus quam semper non. Ut tincidunt pellentesque justo, quis vehicula lectus tempus eget. Nullam urna metus, facilisis nec sem sed, ullamcorper mattis est. Nunc convallis nisl in luctus pharetra. Donec mattis mauris diam, vitae consectetur est ultricies posuere. Donec blandit ante nec ipsum cursus ornare. Maecenas consequat magna vel justo mattis mollis. Cras vel porttitor lectus, vel vestibulum mi. Praesent ut vestibulum elit.</p><p>Integer sed tristique risus. Cras eros diam, gravida in magna id, sodales suscipit orci. Aenean consequat, nulla at sollicitudin commodo, massa eros lacinia turpis, vel eleifend mi urna vel leo. Sed quis.</p>'
        // ]);
    }
}
