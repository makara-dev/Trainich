@extends('masterpage')
@section('stylesheet')
<link href="{{ asset('css/service-detail.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <a class="service-back" href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i> <span>@lang($service['title'])</span></a>
    <div class="row mt-5">
        <div class="col-sm-12 col-md-4 col-lg-4 mb">
            <div class="service-img-wrapper">
                <img src="{{asset($service['images'])}}" alt="No Resource">
            </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="service-description-wrapper">
                <p>@lang($service['p-detail'])</p>
            </div>
        </div>
    </div>
</div>
<h1></h1>
@endsection