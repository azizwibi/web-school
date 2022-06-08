<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
use App\Models\post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    // user::create([
    //     'name'=>'azizwibi',
    //     'email'=>'wibisono@gmail.com',
    //     'password'=>bcrypt('12345')
    // ]);

    // user::create([
    //     'name'=>'mohamad',
    //     'email'=>'mohamad@gmail.com',
    //     'password'=>bcrypt('12345')
    // ]);

    User::factory(3)->create();

    category::create([
        'name'=>'programing',
        'slug'=>'programing'
    ]);
    category::create([
        'name'=>'personal',
        'slug'=>'personal'
    ]);



    post::factory(20)->create();
//    post::create([
//         'title'=>'judul pertama',
//         'slug'=>'judul-pertama',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse in velit minima facere ipsam rem quae dolorem id voluptatem? Nihil iste ea, qui maxime, quia aperiam debitis nam maiores blanditiis ',
//         'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse in velit minima facere ipsam rem quae dolorem id voluptatem? Nihil  iste ea, qui maxime, quia aperiam debitis nam maiores blanditiis mollitia laborum id, iure fugiat veritatis sapiente tempore odio et ipsa incidunt quos asperiores deserunt quaerat. Quidem sed incidunt, debitis unde libero perferendis sequi minus veniam ea quasi quam ab suscipit molestiae dolore ipsam laborum animi repudiandae autem dolorum? Debitis, quae, asperiores voluptatibus fugiat laudantium dolores ducimus voluptatem iure quibusdam ut nesciunt impedit qui rerum tempore, at veritatis necessitatibus nihil in. Mollitia voluptates nostrum explicabo earum voluptatem praesentium quam quisquam expedita ullam facere, vero tempore odio esse ipsa. Iste quo doloribus officiis, mollitia neque velit, facere exercitationem quas rerum, excepturi vitae ullam! Eligendi et deleniti provident maxime obcaecati facilis accusamus asperiores harum quaerat laborum sit fugiat autem rem quasi repellendus unde laboriosam, corporis totam maiores sequi pariatur similique alias hic eveniet. Quibusdam doloremque tempore iure harum eius delectus? Doloribus adipisci delectus culpa autem minima nulla animi eaque iure, deleniti corrupti modi neque ullam, voluptate rerum cupiditate ad. Deleniti voluptatibus, beatae laboriosam praesentium repellendus sequi. Architecto inventore cupiditate, eum assumenda, excepturi, quidem aliquid sed perspiciatis consectetur eos est voluptate quis.',
//         'category_id'=>1,
//         'user_id'=>1
//     ]);

//     post::create([
//         'title'=>'judul kedua',
//         'slug'=>'judul-kedua',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse in velit minima facere ipsam rem quae dolorem id voluptatem? Nihil iste ea, qui maxime, quia aperiam debitis nam maiores blanditiis ',
//         'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse in velit minima facere ipsam rem quae dolorem id voluptatem? Nihil  iste ea, qui maxime, quia aperiam debitis nam maiores blanditiis mollitia laborum id, iure fugiat veritatis sapiente tempore odio et ipsa incidunt quos asperiores deserunt quaerat. Quidem sed incidunt, debitis unde libero perferendis sequi minus veniam ea quasi quam ab suscipit molestiae dolore ipsam laborum animi repudiandae autem dolorum? Debitis, quae, asperiores voluptatibus fugiat laudantium dolores ducimus voluptatem iure quibusdam ut nesciunt impedit qui rerum tempore, at veritatis necessitatibus nihil in. Mollitia voluptates nostrum explicabo earum voluptatem praesentium quam quisquam expedita ullam facere, vero tempore odio esse ipsa. Iste quo doloribus officiis, mollitia neque velit, facere exercitationem quas rerum, excepturi vitae ullam! Eligendi et deleniti provident maxime obcaecati facilis accusamus asperiores harum quaerat laborum sit fugiat autem rem quasi repellendus unde laboriosam, corporis totam maiores sequi pariatur similique alias hic eveniet. Quibusdam doloremque tempore iure harum eius delectus? Doloribus adipisci delectus culpa autem minima nulla animi eaque iure, deleniti corrupti modi neque ullam, voluptate rerum cupiditate ad. Deleniti voluptatibus, beatae laboriosam praesentium repellendus sequi. Architecto inventore cupiditate, eum assumenda, excepturi, quidem aliquid sed perspiciatis consectetur eos est voluptate quis.',
//         'category_id'=>2,
//         'user_id'=>2
//     ]);

//     post::create([
//         'title'=>'judul ketiga',
//         'slug'=>'judul-ketiga',
//         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse in velit minima facere ipsam rem quae dolorem id voluptatem? Nihil iste ea, qui maxime, quia aperiam debitis nam maiores blanditiis ',
//         'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt esse in velit minima facere ipsam rem quae dolorem id voluptatem? Nihil  iste ea, qui maxime, quia aperiam debitis nam maiores blanditiis mollitia laborum id, iure fugiat veritatis sapiente tempore odio et ipsa incidunt quos asperiores deserunt quaerat. Quidem sed incidunt, debitis unde libero perferendis sequi minus veniam ea quasi quam ab suscipit molestiae dolore ipsam laborum animi repudiandae autem dolorum? Debitis, quae, asperiores voluptatibus fugiat laudantium dolores ducimus voluptatem iure quibusdam ut nesciunt impedit qui rerum tempore, at veritatis necessitatibus nihil in. Mollitia voluptates nostrum explicabo earum voluptatem praesentium quam quisquam expedita ullam facere, vero tempore odio esse ipsa. Iste quo doloribus officiis, mollitia neque velit, facere exercitationem quas rerum, excepturi vitae ullam! Eligendi et deleniti provident maxime obcaecati facilis accusamus asperiores harum quaerat laborum sit fugiat autem rem quasi repellendus unde laboriosam, corporis totam maiores sequi pariatur similique alias hic eveniet. Quibusdam doloremque tempore iure harum eius delectus? Doloribus adipisci delectus culpa autem minima nulla animi eaque iure, deleniti corrupti modi neque ullam, voluptate rerum cupiditate ad. Deleniti voluptatibus, beatae laboriosam praesentium repellendus sequi. Architecto inventore cupiditate, eum assumenda, excepturi, quidem aliquid sed perspiciatis consectetur eos est voluptate quis.',
//         'category_id'=>2,
//         'user_id'=>1
//     ]);

    }
}
