<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=['immigration','education', 'heath', 'transport', 'sport'];
        
        foreach($categories as $category){
            Category::create([
                'cate_name'=>$category,
            ]);           
            
        }
    }
}
