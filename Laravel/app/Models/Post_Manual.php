<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Cara Menjadi Superhero",
            "slug" => "cara-menjadi-superhero",
            "author" => "Ucup bin Slamet",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga neque libero corporis repellendus quasi. Nisi saepe ipsa, alias rem quo totam neque ex iste nobis quasi eos similique veniam, earum laborum enim vitae molestiae in mollitia quaerat officia numquam voluptates perspiciatis deserunt! Impedit exercitationem, possimus nesciunt optio hic magni! Maiores corrupti ab voluptate repellat quas omnis nam, tempora deserunt id adipisci nemo temporibus sunt aliquid quod vero quia aliquam minima beatae officia facere voluptates. Dolor mollitia necessitatibus fugiat consequuntur quisquam porro iusto eaque consectetur accusamus aut itaque, aliquid distinctio perferendis similique tempore deleniti esse soluta nulla! Quod delectus numquam consequuntur."
        ],
        [
            "title" => "Cara Menjadi Keren",
            "slug" => "cara-menjadi-keren",
            "author" => "Otong Surotong",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident iste modi nisi necessitatibus at, ipsam molestiae. In doloribus consequuntur culpa ducimus hic placeat labore dolorem saepe corrupti illo, rerum repellendus nisi dolorum rem obcaecati quam doloremque laboriosam ipsum modi consequatur. Exercitationem fugiat architecto modi unde tempora assumenda reiciendis at, nesciunt et autem magni molestiae eum animi fugit quibusdam quo blanditiis dicta dolore, ut eaque quidem? Exercitationem qui ab possimus non nisi vero eligendi ad. Consectetur architecto quos reprehenderit placeat ipsam, iusto aut, dolore maxime perspiciatis deserunt magni aliquam rerum neque magnam? Ab provident obcaecati quaerat animi excepturi, hic ratione id non nisi explicabo voluptates nam perspiciatis, nemo deserunt accusantium exercitationem unde totam earum magni doloribus fugiat, odio illum. Officia, consequatur!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // $posts = self::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $new_post = $p;
        //     }
        // }

        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
