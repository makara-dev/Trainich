<?php

namespace Database\Seeders;
use App\Models\Panorama;
use Illuminate\Database\Seeder;

class PanoramaTableSeeder extends Seeder
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
            // 1st panorama
            [               
                'desktop_img_path'=>'images/frontend/sliders/home/slider1_desktop.png',
                'mobile_img_path'=>'images/frontend/sliders/home/slider1_mobile.png',
            ],

            // 2nd panorama
            [
                'desktop_img_path'=>'images/frontend/sliders/home/slider2_desktop.png',
                'mobile_img_path'=>'images/frontend/sliders/home/slider2_mobile.png',
            ]

        ];

        // seed into database
        foreach($data as $dataRow){
            // use create to get additional timestamp
            Panorama::create($dataRow) ; 
        }
    }
}
