<!-- Include master page -->
@extends('masterpage')
@section('stylesheet')
<link href="{{ asset('css/service.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- service content -->
<div class="container">
    <div class="service-info-header">
        <h5 class="heading" class="service-heading" style="margin-top:80px; text-decoration:underline;">@lang('service-lan.service-title2')</h5>
    </div>

    <div class="row mt-5">
        @foreach($solutions as $solution)
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 center">
            <div class="service-wrapp-content">
                <a href="{{url('/solution-detail',$solution->id)}}">
                    <div class="service-shape">
                        <img src="{{$solution->images}}" alt="image solution">
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection