<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([            
            'title' => 'Apple',
            'content' => 'pagecontents/immigrations/immigrate1.html',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 1,
            'province_id'=>1,
            'author'=>'Giang Test 1'
        ]);

        Page::create([            
            'title' => 'Apple 12',
            'content' => 'pagecontents/immigrations/immigrate1.html',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 1,
            'province_id'=>1,
            'author'=>'Giang Test 1'
        ]);

        Page::create([            
            'title' => 'Apple 13',
            'content' => 'pagecontents/immigrations/immigrate1.html',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 1,
            'province_id'=>1,
            'author'=>'Giang Test 1'
        ]);

        Page::create([           
            'title' => 'Apple 1',
            'content' => '2 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 2,
            'province_id'=>2,
            'author'=>'Giang Test 2'
        ]);

        Page::create([           
            'title' => 'Apple 2',
            'content' => '2 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 2,
            'province_id'=>2,
            'author'=>'Giang Test 2'
        ]);

        Page::create([           
            'title' => 'Apple 2',
            'content' => '2 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 2,
            'province_id'=>2,
            'author'=>'Giang Test 2'
        ]);
        Page::create([           
            'title' => 'Apple 2',
            'content' => '2 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 2,
            'province_id'=>2,
            'author'=>'Giang Test 2'
        ]);

        Page::create([           
            'title' => 'Apple 2',
            'content' => '3 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 3,
            'province_id'=>3,
            'author'=>'Giang Test 3'

        ]);

        Page::create([           
            'title' => 'Apple4',
            'content' => '4 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 4,
            'province_id'=>4,
            'author'=>'Giang Test 4'

        ]);

        Page::create([           
            'title' => 'Apple5',
            'content' => '5 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 5,
            'province_id'=>5,
            'author'=>'Giang Test 5'
        ]);

        Page::create([           
            'title' => 'Apple6',
            'content' => '6 content',
            'img_link' => 'assets/images/logo.jpg',
            'category_id'=> 1,
            'province_id'=>3,
            'author'=>'Giang Test 6'
        ]);
    }
}
