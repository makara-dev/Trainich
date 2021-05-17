<?php

namespace Database\Seeders;
use App\Models\Homeinfo;
use Illuminate\Database\Seeder;

class HomeinfoTableSeeder extends Seeder
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
            // 1 panorama
            [            
            'images'=>'images/frontend/services/camera.png',
            'title'=>'home-lan.cctv-title',
            'paragraph'=>'home-lan.cctv-paragraph',
            'p-detail' => 'home-lan.cctv-detail',
            ],
            [
                'images'=>'images/frontend/services/phone.png',
                'title'=>'home-lan.intrusion-title',
                'paragraph'=>'home-lan.intrusion-paragraph',
                'p-detail' => 'home-lan.intrusion-detail',
            ],
            [
                'images'=>'images/frontend/services/cable.png',
                'title'=>'home-lan.network-title',
                'paragraph'=>'home-lan.network-paragraph',
                'p-detail' => 'home-lan.network-detail',
            ],
            [
                'images'=>'images/frontend/services/phones.png',
                'title'=>'home-lan.telephone-title',
                'paragraph'=>'home-lan.telephone-paragraph',
                'p-detail' => 'home-lan.telephone-detail',
            ],
            
        ];

        // seed into database
        foreach($data as $dataRow){
            Homeinfo::create($dataRow) ; // use create to get additional timestamp
        }
    }
}
