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

        User::create([
            'name' => 'Fiter 123',
            'username' => 'fiter123',
            'email' => '12345@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Yogie 456',
        //     'email' => 'yogie@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus dolores qui delectus animi excepturi non, illo cupiditate perspiciatis eius repellendus consequuntur fugit. Aspernatur nisi libero eos ex esse unde eaque omnis, mollitia architecto, sed iure error maxime iste quidem aperiam nobis tenetur officia voluptatem ratione similique deserunt iusto et natus ipsam? Sed porro ullam quae amet cupiditate mollitia magnam est. Dolorum dignissimos iste quia soluta est quisquam animi excepturi nam, quos ullam hic dolores accusamus nemo, nisi sunt autem ea eligendi eius perspiciatis adipisci officia! Inventore commodi repellendus cumque at dolor. Accusantium, esse voluptates!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus dolores qui delectus animi excepturi non, illo cupiditate perspiciatis eius repellendus consequuntur fugit. Aspernatur nisi libero eos ex esse unde eaque omnis, mollitia architecto, sed iure error maxime iste quidem aperiam nobis tenetur officia voluptatem ratione similique deserunt iusto et natus ipsam? Sed porro ullam quae amet cupiditate mollitia magnam est. Dolorum dignissimos iste quia soluta est quisquam animi excepturi nam, quos ullam hic dolores accusamus nemo, nisi sunt autem ea eligendi eius perspiciatis adipisci officia! Inventore commodi repellendus cumque at dolor. Accusantium, esse voluptates!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Ketiga',
        //     'slug' => 'judul-ke-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus dolores qui delectus animi excepturi non, illo cupiditate perspiciatis eius repellendus consequuntur fugit. Aspernatur nisi libero eos ex esse unde eaque omnis, mollitia architecto, sed iure error maxime iste quidem aperiam nobis tenetur officia voluptatem ratione similique deserunt iusto et natus ipsam? Sed porro ullam quae amet cupiditate mollitia magnam est. Dolorum dignissimos iste quia soluta est quisquam animi excepturi nam, quos ullam hic dolores accusamus nemo, nisi sunt autem ea eligendi eius perspiciatis adipisci officia! Inventore commodi repellendus cumque at dolor. Accusantium, esse voluptates!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Keempat',
        //     'slug' => 'judul-ke-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt dolorem ipsam dicta incidunt aperiam voluptatibus dolores qui delectus animi excepturi non, illo cupiditate perspiciatis eius repellendus consequuntur fugit. Aspernatur nisi libero eos ex esse unde eaque omnis, mollitia architecto, sed iure error maxime iste quidem aperiam nobis tenetur officia voluptatem ratione similique deserunt iusto et natus ipsam? Sed porro ullam quae amet cupiditate mollitia magnam est. Dolorum dignissimos iste quia soluta est quisquam animi excepturi nam, quos ullam hic dolores accusamus nemo, nisi sunt autem ea eligendi eius perspiciatis adipisci officia! Inventore commodi repellendus cumque at dolor. Accusantium, esse voluptates!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }

}
