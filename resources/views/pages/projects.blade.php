<!-- Include masterpage -->
@extends('masterpage')
@section('stylesheet')
<link href="{{ asset('css/project.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- Project content -->
<div class="container">
    <h5 class="heading" style="text-decoration:underline;">@lang('project-lan.project-title')</h5>
    <div class="row">
        @foreach($projects as $project)
        <div class="col-sm-12 col-md-6 col-lg-3 mt-5 center">
            <a class="wrapp-content" href="{{url('/project-detail', $project->id)}}">
                <div class="image-wrap">
                    <img src="{{$project->image}}" alt="">
                </div>
                <div class="project-description">
                    <div class="project-name">
                        <h1 class="project-title">@lang($project->project_name)</h1>
                    </div>
                    <div class="address">
                        <p>@lang($project->location)</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection