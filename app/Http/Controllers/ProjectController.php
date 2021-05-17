<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $projects = [
            // jti
            '1' => [
                'name' => 'project-detail-lan.jti-name',
                'showcaseImg' => '/images/frontend/projects/jti.png',
                'description' => 'project-detail-lan.jti-description',
                'location' => '/images/frontend/projects/jti-map.png',
                'url' => 'https://goo.gl/maps/NPZjtaEnspKB9eez5',
                'previewImg' => [
                    "/images/frontend/projects/jti1.jpg",
                    "/images/frontend/projects/jti2.jpg",
                    "/images/frontend/projects/jti3.jpg",
                    "/images/frontend/projects/jti4.jpg",
                    "/images/frontend/projects/jti5.jpg",
                ],
            ],
            // gdeec
            '2' => [
                'name' => 'project-detail-lan.gdcec-name',
                'showcaseImg' => '/images/frontend/projects/gdce.png',
                'description' => 'project-detail-lan.gdcec-description',
                'location' => '/images/frontend/projects/gdce-map.png',
                'url' => 'https://goo.gl/maps/erf4bt9eFj7hYfh57',
                'previewImg' => [
                    "/images/frontend/projects/gdce1.jpg",
                    "/images/frontend/projects/gdce2.jpg",
                    "/images/frontend/projects/gdce3.jpg",
                    "/images/frontend/projects/gdce4.jpg",
                    "/images/frontend/projects/gdce5.jpg",
                ],
            ],
            // secc
            '3' => [
                'name' => 'project-detail-lan.secc-name',
                'showcaseImg' => '/images/frontend/projects/secc.png',
                'description' => 'project-detail-lan.secc-description',
                'location' => '/images/frontend/projects/secc-map.png',
                'url' => 'https://goo.gl/maps/wDG7MzWfszRYhUYaA',
                'previewImg' => [
                    "/images/frontend/projects/secc.png",
                    "/images/frontend/projects/secc.png",
                    "/images/frontend/projects/secc.png",
                    "/images/frontend/projects/secc.png",
                    "/images/frontend/projects/secc.png",
                ],
            ],
            // m-architect
            '4' => [
                'name' => 'project-detail-lan.m-architect-name',
                'showcaseImg' => '/images/frontend/projects/marchatic.png',
                'description' => 'project-detail-lan.m-architect-description',
                'location' => '/images/frontend/projects/marchatic-map.png',
                'url' => 'https://m-architect.asia/',
                'previewImg' => [
                    "/images/frontend/projects/marchatic.png",
                    "/images/frontend/projects/marchatic.png",
                    "/images/frontend/projects/marchatic.png",
                    "/images/frontend/projects/marchatic.png",
                    "/images/frontend/projects/marchatic.png",
                ],
            ],

        ];

        try{
            $project = $projects[$id];
        }catch(Exception $e){
            abort(404);
        }
        $project = $projects[$id];
        return view('partial.project-detail', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
