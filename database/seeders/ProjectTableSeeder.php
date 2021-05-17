<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
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
            // service 
            [
                'image' => 'images/frontend/projects/jti.png',
                'project_name' => 'project-lan.project-name1',
                'location' => 'project-lan.address1',
            ],
            [
                'image' => 'images/frontend/projects/gdce.png',
                'project_name' => 'project-lan.project-name2',
                'location' => 'project-lan.address2',
            ],
            [
                'image' => 'images/frontend/projects/secc.png',
                'project_name' => 'project-lan.project-name3',
                'location' => 'project-lan.address3',
            ],
            [
                'image' => 'images/frontend/projects/marchatic.png',
                'project_name' => 'project-lan.project-name4',
                'location' => 'project-lan.address4',
            ],
        ];

        foreach($data as $dataRow){
            Project::create($dataRow);
        }
    }
}
