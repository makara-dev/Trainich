<!-- Include master page -->
@extends('masterpage')
@section('stylesheet')
<link href="{{ asset('css/service.css') }}" rel="stylesheet">
@endsection
@section('content')
<!-- service content -->
<div class="container">
    <div class="service-info-header">
        <div class="service-heading">
            <h5 class="heading mb-4" style="text-decoration:underline;">@lang('service-lan.service-title1')</h5>
        </div>
        <div class="service-p">
            <p>@lang('service-lan.service-description')</p>
        </div>
    </div>
</div>
@endsection