<?php

namespace Database\Seeders;
use App\Models\Homecyle;
use Illuminate\Database\Seeder;

class HomecyleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        // homecyle 
            [
                'img' =>'images/frontend/cyclestep/solution.png',
                'heading' =>'home-lan.subheading5',
                'paragraph' =>'home-lan.paragraph5',
            ],
            [
                'img' =>'images/frontend/cyclestep/innovation.png',
                'heading' =>'home-lan.subheading6',
                'paragraph' =>'home-lan.paragraph6',
            ],
            [
                'img' =>'images/frontend/cyclestep/maintenance.png',
                'heading' =>'home-lan.subheading7',
                'paragraph' =>'home-lan.paragraph7',
            ],
            [
                'img' =>'images/frontend/cyclestep/install.png',
                'heading' =>'home-lan.subheading8',
                'paragraph' =>'home-lan.paragraph8',
            ],
        ];

        // seed into database 

        foreach($data as $dataRow){
            Homecyle::create($dataRow);
        }
    }
}
