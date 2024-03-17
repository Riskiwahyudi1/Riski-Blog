<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory(4)->create();

        // User::create([
        //     'name' => 'Riski Wahyudi',
        //     'email' => 'riskiwahyudi@gmail.com',
        //     'password' => 'qwer',
        // ]);
        Category::create([
            'name' => 'Programing',
            'slug' => 'programing',
        ]);
        Category::create([
            'name' => 'CNC Programing',
            'slug' => 'cnc-programing',
        ]);

       Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Ke satu',
        //     'category_id' => 1,
        //     'user_id' => 4,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae cupiditate vero commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae cupiditate vero commodi facilis blanditiis assumenda rem similique dolorem molestias numquam quo voluptates quam, atque voluptatum, suscipit delectus reprehenderit. Quidem veniam illum consequuntur deserunt, recusandae voluptatibus. Quas incidunt repellendus fugit perspiciatis aperiam tempore impedit nihil placeat dolor? Autem, sed quibusdam, sit natus quia doloremque reprehenderit omnis ducimus, quod repellat labore minima ad? Distinctio dignissimos voluptatum porro ex tempora placeat, obcaecati numquam, ipsum suscipit assumenda iure! Adipisci, nemo quidem? Numquam quo, delectus nisi, pariatur, quasi similique provident sunt iste atque ad excepturi. Alias enim velit sit praesentium dolores. Libero aperiam hic, laborum id expedita quo consequuntur mollitia, quae optio in earum illo quisquam voluptatum aliquam pariatur provident reiciendis ab praesentium. Modi commodi ut cupiditate animi reiciendis, a sapiente officia neque eligendi pariatur at id ratione ducimus laudantium praesentium dolorem voluptates sequi accusamus mollitia recusandae sed qui quis soluta quisquam! Iure dolores consequuntur, delectus ex perspiciatis officiis quam ullam voluptate vel enim.</p><p>Ipsa tenetur sapiente repudiandae deleniti accusamus vero ad eligendi, iusto eveniet dignissimos molestias quos fugiat recusandae reprehenderit modi dolor sit exercitationem, nihil esse facere ipsam maiores. Nemo at ut ea minus quaerat rerum, a aliquid, vitae iste amet magnam nobis!</p>',

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'category_id' => 2,
        //     'user_id' => 3,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae cupiditate vero commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae cupiditate vero commodi facilis blanditiis assumenda rem similique dolorem molestias numquam quo voluptates quam, atque voluptatum, suscipit delectus reprehenderit. Quidem veniam illum consequuntur deserunt, recusandae voluptatibus. Quas incidunt repellendus fugit perspiciatis aperiam tempore impedit nihil placeat dolor? Autem, sed quibusdam, sit natus quia doloremque reprehenderit omnis ducimus, quod repellat labore minima ad? Distinctio dignissimos voluptatum porro ex tempora placeat, obcaecati numquam, ipsum suscipit assumenda iure! Adipisci, nemo quidem? Numquam quo, delectus nisi, pariatur, quasi similique provident sunt iste atque ad excepturi. Alias enim velit sit praesentium dolores. Libero aperiam hic, laborum id expedita quo consequuntur mollitia, quae optio in earum illo quisquam voluptatum aliquam pariatur provident reiciendis ab praesentium. Modi commodi ut cupiditate animi reiciendis, a sapiente officia neque eligendi pariatur at id ratione ducimus laudantium praesentium dolorem voluptates sequi accusamus mollitia recusandae sed qui quis soluta quisquam! Iure dolores consequuntur, delectus ex perspiciatis officiis quam ullam voluptate vel enim.</p><p>Ipsa tenetur sapiente repudiandae deleniti accusamus vero ad eligendi, iusto eveniet dignissimos molestias quos fugiat recusandae reprehenderit modi dolor sit exercitationem, nihil esse facere ipsam maiores. Nemo at ut ea minus quaerat rerum, a aliquid, vitae iste amet magnam nobis!</p>',

        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae cupiditate vero commodi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe beatae cupiditate vero commodi facilis blanditiis assumenda rem similique dolorem molestias numquam quo voluptates quam, atque voluptatum, suscipit delectus reprehenderit. Quidem veniam illum consequuntur deserunt, recusandae voluptatibus. Quas incidunt repellendus fugit perspiciatis aperiam tempore impedit nihil placeat dolor? Autem, sed quibusdam, sit natus quia doloremque reprehenderit omnis ducimus, quod repellat labore minima ad? Distinctio dignissimos voluptatum porro ex tempora placeat, obcaecati numquam, ipsum suscipit assumenda iure! Adipisci, nemo quidem? Numquam quo, delectus nisi, pariatur, quasi similique provident sunt iste atque ad excepturi. Alias enim velit sit praesentium dolores. Libero aperiam hic, laborum id expedita quo consequuntur mollitia, quae optio in earum illo quisquam voluptatum aliquam pariatur provident reiciendis ab praesentium. Modi commodi ut cupiditate animi reiciendis, a sapiente officia neque eligendi pariatur at id ratione ducimus laudantium praesentium dolorem voluptates sequi accusamus mollitia recusandae sed qui quis soluta quisquam! Iure dolores consequuntur, delectus ex perspiciatis officiis quam ullam voluptate vel enim.</p><p>Ipsa tenetur sapiente repudiandae deleniti accusamus vero ad eligendi, iusto eveniet dignissimos molestias quos fugiat recusandae reprehenderit modi dolor sit exercitationem, nihil esse facere ipsam maiores. Nemo at ut ea minus quaerat rerum, a aliquid, vitae iste amet magnam nobis!</p>',

        // ]);
    }
}