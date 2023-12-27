<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Reza Alfara",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti reprehenderit distinctio, natus fuga tempora cum a earum quibusdam odit perspiciatis vitae unde aut, sequi voluptatem harum repudiandae inventore ratione vel. Ad eos, quidem corrupti, nemo nobis ipsum magni, delectus veritatis praesentium repudiandae tempora veniam. Vero, beatae harum sunt, provident dolore doloremque illum rem eos natus modi veritatis, deserunt quibusdam quia et. Temporibus aperiam animi molestiae earum molestias libero quidem rerum laudantium distinctio cupiditate magni, tempore, debitis tenetur aliquam maxime consequuntur?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alfara Reza",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quia iusto mollitia laudantium deserunt inventore, sed maxime neque autem! Hic, odit quis dolore animi, incidunt impedit deleniti cum labore alias eos obcaecati in similique quod accusamus, libero praesentium debitis itaque explicabo dolores. Sapiente nesciunt ex laborum, unde perferendis ipsum. Quidem aspernatur eveniet sapiente ipsa minima dolorem, facere aliquid consequuntur architecto quibusdam nam praesentium obcaecati magnam deserunt dolor esse? Accusantium enim iure aliquid voluptas adipisci cupiditate maxime soluta quis natus excepturi voluptatum, eaque commodi! Pariatur suscipit labore hic dignissimos excepturi a, illo sequi expedita veniam itaque unde eaque rem repudiandae ratione?"
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
    }
}
