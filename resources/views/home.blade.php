<!-- include masterpage -->
@extends('masterpage')
<!-- homepage content -->
@section('content')
<!-- include header slideer -->
@include('partial.home-header-slider')
<div class="container home-items-center">
    <h5 class="heading" style="text-decoration:underline; text-decoration-color:#2F65AD; margin:40px 0;">@lang('home-lan.heading1')</h5>
    <div class="row mb-5">
        @foreach($services as $service)
        <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="service-wrapper">
                <div class="service-img-wrapper">
                    <a href="{{url('/home-detail',$service->id)}}">
                        <img class="img" src="{{asset($service->images)}}" alt="camera">
                    </a>
                </div>
                <div class="description-wrapper">
                    <h5 class="subheading">@lang($service->title)</h5>
                    <p>@lang($service->paragraph)</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- btn show to expend -->
    <a class="btn-show" href="{{ url('/service') }}">@lang('home-lan.btn-show-hide')</a>
</div>

<!-- life circle of tranich service -->
<div class="life-cirle-side">
    <div class="container">
        <div class="description-wrapper">
            <h5 class="heading" style="text-decoration:underline;">@lang('home-lan.heading2')</h5>
            <p>@lang('home-lan.description')</p>
        </div>
        <div class="row home-items-center mt-5">
            @foreach($cycles as $cycle)
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="service-wrapper">
                    <div class="service-img-wrapper">
                        <img src="{{asset($cycle->img)}}" alt="solution">
                    </div>
                    <div class="description-wrapper">
                        <h5 class="heading" style="margin-top:20px;">@lang($cycle->heading)</h5>
                        <p>@lang($cycle->paragraph)</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- include orm -->
@include('partial.form')
@endsection