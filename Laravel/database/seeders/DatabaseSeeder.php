<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ---Seeder Manual---
        User::create([
            'name' => 'Ucup bin Slamet',
            'username' => 'UcupGanteng',
            'email' => 'UcupGanteng@gmail.com',
            'password' => bcrypt('UcupGanteng123')
        ]);

        // User::create([
        //     'name' => 'Otong Surotong',
        //     'email' => 'OtongSurotong@gmail.com',
        //     'password' => bcrypt('2468')
        // ]);

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci! Illo recusandae ad repellat dicta officiis magni nemo corrupti quia odit? Repellendus adipisci facilis repellat atque quisquam commodi nemo mollitia quo culpa ad harum ipsum eos consectetur eum non, provident debitis delectus!<p></p>Iure, numquam. Sit veritatis laborum architecto blanditiis officiis similique aut deserunt sunt natus reprehenderit sapiente ipsam unde consectetur doloremque aliquid, illo, itaque cum saepe ratione hic, labore libero rerum. Officia nesciunt ad necessitatibus voluptas quia nemo. Provident, voluptatibus deserunt modi dolores placeat adipisci recusandae beatae repudiandae culpa animi exercitationem magnam tenetur maxime iste quis sit eligendi quo amet odio nobis! Excepturi nobis explicabo blanditiis itaque aliquid! Ipsum quibusdam non aut quasi dicta illum corrupti iure hic ullam omnis, deleniti, itaque reprehenderit rem tempore officia, reiciendis doloremque ipsa animi qui sed. Animi fugiat asperiores non? Placeat dolor nostrum quaerat expedita aliquam veniam vero dolorem error, iste impedit esse illo suscipit nemo accusamus ipsa quia. Saepe quia labore, at porro veritatis quisquam? Voluptates, officiis! Rerum ipsum aut sunt facere, ab porro!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci! Illo recusandae ad repellat dicta officiis magni nemo corrupti quia odit? Repellendus adipisci facilis repellat atque quisquam commodi nemo mollitia quo culpa ad harum ipsum eos consectetur eum non, provident debitis delectus!<p></p>Iure, numquam. Sit veritatis laborum architecto blanditiis officiis similique aut deserunt sunt natus reprehenderit sapiente ipsam unde consectetur doloremque aliquid, illo, itaque cum saepe ratione hic, labore libero rerum. Officia nesciunt ad necessitatibus voluptas quia nemo. Provident, voluptatibus deserunt modi dolores placeat adipisci recusandae beatae repudiandae culpa animi exercitationem magnam tenetur maxime iste quis sit eligendi quo amet odio nobis! Excepturi nobis explicabo blanditiis itaque aliquid! Ipsum quibusdam non aut quasi dicta illum corrupti iure hic ullam omnis, deleniti, itaque reprehenderit rem tempore officia, reiciendis doloremque ipsa animi qui sed. Animi fugiat asperiores non? Placeat dolor nostrum quaerat expedita aliquam veniam vero dolorem error, iste impedit esse illo suscipit nemo accusamus ipsa quia. Saepe quia labore, at porro veritatis quisquam? Voluptates, officiis! Rerum ipsum aut sunt facere, ab porro!</p>'
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci! Illo recusandae ad repellat dicta officiis magni nemo corrupti quia odit? Repellendus adipisci facilis repellat atque quisquam commodi nemo mollitia quo culpa ad harum ipsum eos consectetur eum non, provident debitis delectus!<p></p>Iure, numquam. Sit veritatis laborum architecto blanditiis officiis similique aut deserunt sunt natus reprehenderit sapiente ipsam unde consectetur doloremque aliquid, illo, itaque cum saepe ratione hic, labore libero rerum. Officia nesciunt ad necessitatibus voluptas quia nemo. Provident, voluptatibus deserunt modi dolores placeat adipisci recusandae beatae repudiandae culpa animi exercitationem magnam tenetur maxime iste quis sit eligendi quo amet odio nobis! Excepturi nobis explicabo blanditiis itaque aliquid! Ipsum quibusdam non aut quasi dicta illum corrupti iure hic ullam omnis, deleniti, itaque reprehenderit rem tempore officia, reiciendis doloremque ipsa animi qui sed. Animi fugiat asperiores non? Placeat dolor nostrum quaerat expedita aliquam veniam vero dolorem error, iste impedit esse illo suscipit nemo accusamus ipsa quia. Saepe quia labore, at porro veritatis quisquam? Voluptates, officiis! Rerum ipsum aut sunt facere, ab porro!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci!',
        //     'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus, iste! Minus aspernatur voluptates illo quae tempore rerum deserunt sint explicabo itaque cumque. Placeat sit illum alias! In quod dolore nisi consectetur eos voluptatem repellendus vel laudantium quisquam dolor distinctio aliquam earum facere architecto natus officia provident obcaecati consequuntur, placeat fugit adipisci! Illo recusandae ad repellat dicta officiis magni nemo corrupti quia odit? Repellendus adipisci facilis repellat atque quisquam commodi nemo mollitia quo culpa ad harum ipsum eos consectetur eum non, provident debitis delectus!<p></p>Iure, numquam. Sit veritatis laborum architecto blanditiis officiis similique aut deserunt sunt natus reprehenderit sapiente ipsam unde consectetur doloremque aliquid, illo, itaque cum saepe ratione hic, labore libero rerum. Officia nesciunt ad necessitatibus voluptas quia nemo. Provident, voluptatibus deserunt modi dolores placeat adipisci recusandae beatae repudiandae culpa animi exercitationem magnam tenetur maxime iste quis sit eligendi quo amet odio nobis! Excepturi nobis explicabo blanditiis itaque aliquid! Ipsum quibusdam non aut quasi dicta illum corrupti iure hic ullam omnis, deleniti, itaque reprehenderit rem tempore officia, reiciendis doloremque ipsa animi qui sed. Animi fugiat asperiores non? Placeat dolor nostrum quaerat expedita aliquam veniam vero dolorem error, iste impedit esse illo suscipit nemo accusamus ipsa quia. Saepe quia labore, at porro veritatis quisquam? Voluptates, officiis! Rerum ipsum aut sunt facere, ab porro!</p>'
        // ]);


        // Seeder Factory Faker
        User::factory(10)->create();

        // Category::factory(10)->create();
        Category::create([
            'name' => 'Web Programmer',
            'slug' => 'web-programmer'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);

        Post::factory(20)->create();
    }
}
