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
        $categories=['Định cư','Giáo dục', 'Y tế', 'Đi lại', 'Thể thao'];
        
        foreach($categories as $category){
            Category::create([
                'cate_name'=>$category,
            ]);           
            
        }
    }
}
