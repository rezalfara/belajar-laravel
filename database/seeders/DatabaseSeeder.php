<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'dika',
            'email'=>'sandhikagalih@gmail.com',
            'password'=>bcrypt('12345')
        ]);

        User::create([
            'name'=>'Reza Alfara',
            'email'=>'reza.alfara07@gmail.com',
            'password'=>bcrypt('54321')
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        Post::create([
            'title'=>'Judul Pertama',
            'slug'=>'judul-pertama',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi, placeat consequatur, cum pariatur blanditiis magnam voluptas laudantium excepturi ipsum perspiciatis repudiandae incidunt harum fugiat, saepe porro ullam atque magni enim tenetur suscipit vero sint? Error qui dolore veniam et beatae dolorum, quasi enim possimus! Porro reprehenderit sed, itaque quaerat quam eius expedita neque recusandae dolore ut maiores ratione, ipsa esse fugiat modi! Mollitia consequuntur amet magni dolor. Necessitatibus consequuntur a, qui obcaecati illum, rem facilis eligendi nisi molestiae repellat tempore. Error quae temporibus voluptates tempora illo provident, recusandae saepe inventore, numquam alias veniam? Nam ut perspiciatis corporis aliquam!',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Kedua',
            'slug'=>'judul-kedua',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi, placeat consequatur, cum pariatur blanditiis magnam voluptas laudantium excepturi ipsum perspiciatis repudiandae incidunt harum fugiat, saepe porro ullam atque magni enim tenetur suscipit vero sint? Error qui dolore veniam et beatae dolorum, quasi enim possimus! Porro reprehenderit sed, itaque quaerat quam eius expedita neque recusandae dolore ut maiores ratione, ipsa esse fugiat modi! Mollitia consequuntur amet magni dolor. Necessitatibus consequuntur a, qui obcaecati illum, rem facilis eligendi nisi molestiae repellat tempore. Error quae temporibus voluptates tempora illo provident, recusandae saepe inventore, numquam alias veniam? Nam ut perspiciatis corporis aliquam!',
            'category_id'=>1,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Ketiga',
            'slug'=>'judul-ketiga',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi, placeat consequatur, cum pariatur blanditiis magnam voluptas laudantium excepturi ipsum perspiciatis repudiandae incidunt harum fugiat, saepe porro ullam atque magni enim tenetur suscipit vero sint? Error qui dolore veniam et beatae dolorum, quasi enim possimus! Porro reprehenderit sed, itaque quaerat quam eius expedita neque recusandae dolore ut maiores ratione, ipsa esse fugiat modi! Mollitia consequuntur amet magni dolor. Necessitatibus consequuntur a, qui obcaecati illum, rem facilis eligendi nisi molestiae repellat tempore. Error quae temporibus voluptates tempora illo provident, recusandae saepe inventore, numquam alias veniam? Nam ut perspiciatis corporis aliquam!',
            'category_id'=>2,
            'user_id'=>1
        ]);

        Post::create([
            'title'=>'Judul Keempat',
            'slug'=>'judul-keempat',
            'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi',
            'body'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae aperiam commodi, placeat consequatur, cum pariatur blanditiis magnam voluptas laudantium excepturi ipsum perspiciatis repudiandae incidunt harum fugiat, saepe porro ullam atque magni enim tenetur suscipit vero sint? Error qui dolore veniam et beatae dolorum, quasi enim possimus! Porro reprehenderit sed, itaque quaerat quam eius expedita neque recusandae dolore ut maiores ratione, ipsa esse fugiat modi! Mollitia consequuntur amet magni dolor. Necessitatibus consequuntur a, qui obcaecati illum, rem facilis eligendi nisi molestiae repellat tempore. Error quae temporibus voluptates tempora illo provident, recusandae saepe inventore, numquam alias veniam? Nam ut perspiciatis corporis aliquam!',
            'category_id'=>2,
            'user_id'=>2
        ]);
    }
}
