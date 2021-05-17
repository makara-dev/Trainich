<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
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
            [
                'images' => 'images/frontend/services/solutions/solution1.jpg',
                'title' => 'service-detail-lan.intrusion-title',
                'p-detail' => 'service-detail-lan.intrusion-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution2.jpg',
                'title' => 'service-detail-lan.network-title',
                'p-detail' => 'service-detail-lan.network-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution3.jpg',
                'title' => 'service-detail-lan.led-title',
                'p-detail' => 'service-detail-lan.led-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution4.jpg',
                'title' => 'service-detail-lan.telephone-title',
                'p-detail' => 'service-detail-lan.telephone-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution5.jpg',
                'title' => 'service-detail-lan.turnstile-title',
                'p-detail' => 'service-detail-lan.turnstile-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution6.jpg',
                'title' => 'service-detail-lan.vehicle-title',
                'p-detail' => 'service-detail-lan.vehicle-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution7.jpg',
                'title' => 'service-detail-lan.videointercom-title',
                'p-detail' => 'service-detail-lan.videointercom-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution8.jpg',
                'title' => 'service-detail-lan.videowall-title',
                'p-detail' => 'service-detail-lan.videowall-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution9.jpg',
                'title' => 'service-detail-lan.access-title',
                'p-detail' => 'service-detail-lan.access-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution10.jpg',
                'title' => 'service-detail-lan.av-title',
                'p-detail' => 'service-detail-lan.av-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution11.jpg',
                'title' => 'service-detail-lan.catv-title',
                'p-detail' => 'service-detail-lan.catv-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution12.jpg',
                'title' => 'service-detail-lan.cctv-title',
                'p-detail' => 'service-detail-lan.cctv-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution13.jpg',
                'title' => 'service-detail-lan.fire-title',
                'p-detail' => 'service-detail-lan.fire-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution14.jpg',
                'title' => 'service-detail-lan.public-title',
                'p-detail' => 'service-detail-lan.public-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution15.jpg',
                'title' => 'service-detail-lan.pro-title',
                'p-detail' => 'service-detail-lan.pro-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution16.jpg',
                'title' => 'service-detail-lan.hotel-title',
                'p-detail' => 'service-detail-lan.hotel-paragraph',
            ],
            [
                'images' => 'images/frontend/services/solutions/solution17.png',
                'title' => 'service-detail-lan.gms-title',
                'p-detail' => 'service-detail-lan.gms-paragraph',
            ],

        ];

        foreach($data as $dataRow){
            Service::create($dataRow);
        }
    }
}
