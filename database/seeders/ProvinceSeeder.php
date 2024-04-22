<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces=['Québec','Ontario', 'British Columbia', 'Alberta', 'Nova Scotia', 'New Brunswick', 'Manitoba', 'Saskatchewan', 'Others'];
        
        foreach($provinces as $province){
            Province::create([
                'province_name'=>$province,
            ]);           
            
        }
    }
}
