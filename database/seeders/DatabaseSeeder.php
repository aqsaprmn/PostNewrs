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
        User::factory(3)->create();

        Post::factory(20)->create();

        // User::create([
        //     'name' => "Aqsha Permana",
        //     'email' => "aqshapermana@gmail.com",
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => "Freyza Kusuma",
        //     'email' => "freyzafk08@gmail.com",
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => "Programming",
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => "Personal",
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => "Web Design",
            'slug' => 'web-design'
        ]);

        // Category::create([
        //     'name' => "Web Design",
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => "Judul Pertama",
        //     'slug' => "judul-pertama",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eos.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis facilis laboriosam asperiores doloribus iste incidunt distinctio libero pariatur vero, atque, quidem molestias minima unde rem earum ipsam recusandae reprehenderit dignissimos cum quisquam. Esse necessitatibus officiis qui quo tempore fugit dolorem dolor exercitationem omnis et! Laborum quasi, perspiciatis quae quidem voluptatum accusantium voluptate assumenda mollitia temporibus non ipsa hic tenetur sint quibusdam aspernatur eum exercitationem ea ad iste dolores distinctio similique itaque sequi.</p><p>Alias consectetur, eos illo sed ipsam officia quidem a asperiores ab laboriosam perspiciatis iusto eveniet magnam! Quas hic dolor possimus similique odit! Laboriosam consectetur voluptas autem distinctio iusto quos optio earum aperiam tempore, deserunt magni cum ducimus, est hic. Eius saepe veniam, ratione quam iste necessitatibus ipsam impedit cumque reprehenderit temporibus nemo in totam officiis delectus quod praesentium aperiam expedita a natus, alias placeat, labore deleniti quaerat! Eligendi amet animi dolore. Unde quas voluptate id accusamus possimus officiis tempora, dicta non pariatur, magnam nihil eligendi a, asperiores soluta numquam atque natus dolorum iste quod facere explicabo repudiandae aut iure.</p><p>Illo inventore similique autem ad eius ipsum maxime obcaecati a asperiores. Nisi incidunt omnis, dolores ex quam numquam commodi magni. Explicabo doloribus eos suscipit sint ea quaerat quo dolorem?</p>",
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Kedua",
        //     'slug' => "judul-kedua",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eos.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis facilis laboriosam asperiores doloribus iste incidunt distinctio libero pariatur vero, atque, quidem molestias minima unde rem earum ipsam recusandae reprehenderit dignissimos cum quisquam. Esse necessitatibus officiis qui quo tempore fugit dolorem dolor exercitationem omnis et! Laborum quasi, perspiciatis quae quidem voluptatum accusantium voluptate assumenda mollitia temporibus non ipsa hic tenetur sint quibusdam aspernatur eum exercitationem ea ad iste dolores distinctio similique itaque sequi.</p><p>Alias consectetur, eos illo sed ipsam officia quidem a asperiores ab laboriosam perspiciatis iusto eveniet magnam! Quas hic dolor possimus similique odit! Laboriosam consectetur voluptas autem distinctio iusto quos optio earum aperiam tempore, deserunt magni cum ducimus, est hic. Eius saepe veniam, ratione quam iste necessitatibus ipsam impedit cumque reprehenderit temporibus nemo in totam officiis delectus quod praesentium aperiam expedita a natus, alias placeat, labore deleniti quaerat! Eligendi amet animi dolore. Unde quas voluptate id accusamus possimus officiis tempora, dicta non pariatur, magnam nihil eligendi a, asperiores soluta numquam atque natus dolorum iste quod facere explicabo repudiandae aut iure.</p><p>Illo inventore similique autem ad eius ipsum maxime obcaecati a asperiores. Nisi incidunt omnis, dolores ex quam numquam commodi magni. Explicabo doloribus eos suscipit sint ea quaerat quo dolorem?</p>",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Ketiga",
        //     'slug' => "judul-ketiga",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eos.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis facilis laboriosam asperiores doloribus iste incidunt distinctio libero pariatur vero, atque, quidem molestias minima unde rem earum ipsam recusandae reprehenderit dignissimos cum quisquam. Esse necessitatibus officiis qui quo tempore fugit dolorem dolor exercitationem omnis et! Laborum quasi, perspiciatis quae quidem voluptatum accusantium voluptate assumenda mollitia temporibus non ipsa hic tenetur sint quibusdam aspernatur eum exercitationem ea ad iste dolores distinctio similique itaque sequi.</p><p>Alias consectetur, eos illo sed ipsam officia quidem a asperiores ab laboriosam perspiciatis iusto eveniet magnam! Quas hic dolor possimus similique odit! Laboriosam consectetur voluptas autem distinctio iusto quos optio earum aperiam tempore, deserunt magni cum ducimus, est hic. Eius saepe veniam, ratione quam iste necessitatibus ipsam impedit cumque reprehenderit temporibus nemo in totam officiis delectus quod praesentium aperiam expedita a natus, alias placeat, labore deleniti quaerat! Eligendi amet animi dolore. Unde quas voluptate id accusamus possimus officiis tempora, dicta non pariatur, magnam nihil eligendi a, asperiores soluta numquam atque natus dolorum iste quod facere explicabo repudiandae aut iure.</p><p>Illo inventore similique autem ad eius ipsum maxime obcaecati a asperiores. Nisi incidunt omnis, dolores ex quam numquam commodi magni. Explicabo doloribus eos suscipit sint ea quaerat quo dolorem?</p>",
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => "Judul Keempat",
        //     'slug' => "judul-keempat",
        //     'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eos.",
        //     'body' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis facilis laboriosam asperiores doloribus iste incidunt distinctio libero pariatur vero, atque, quidem molestias minima unde rem earum ipsam recusandae reprehenderit dignissimos cum quisquam. Esse necessitatibus officiis qui quo tempore fugit dolorem dolor exercitationem omnis et! Laborum quasi, perspiciatis quae quidem voluptatum accusantium voluptate assumenda mollitia temporibus non ipsa hic tenetur sint quibusdam aspernatur eum exercitationem ea ad iste dolores distinctio similique itaque sequi.</p><p>Alias consectetur, eos illo sed ipsam officia quidem a asperiores ab laboriosam perspiciatis iusto eveniet magnam! Quas hic dolor possimus similique odit! Laboriosam consectetur voluptas autem distinctio iusto quos optio earum aperiam tempore, deserunt magni cum ducimus, est hic. Eius saepe veniam, ratione quam iste necessitatibus ipsam impedit cumque reprehenderit temporibus nemo in totam officiis delectus quod praesentium aperiam expedita a natus, alias placeat, labore deleniti quaerat! Eligendi amet animi dolore. Unde quas voluptate id accusamus possimus officiis tempora, dicta non pariatur, magnam nihil eligendi a, asperiores soluta numquam atque natus dolorum iste quod facere explicabo repudiandae aut iure.</p><p>Illo inventore similique autem ad eius ipsum maxime obcaecati a asperiores. Nisi incidunt omnis, dolores ex quam numquam commodi magni. Explicabo doloribus eos suscipit sint ea quaerat quo dolorem?</p>",
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
