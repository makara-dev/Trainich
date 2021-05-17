<!-- Extends master page -->
@extends('masterpage')

@section('content')
<!-- contact content -->
<div class="container">
    <div class="contact-description ">
        <h5 class="heading" style="margin-top:80px; text-decoration:underline;">@lang('contact-lan.title')</h5>
        <!-- The map of tranich -->
        <div class="map">
            <p class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3994180.3103236738!2d102.73541645006651!3d12.141770919194867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310787bfd4dc3743%3A0xe4b7bfe089f41253!2sCambodia!5e0!3m2!1sen!2skh!4v1612093297132!5m2!1sen!2skh" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </p>
        </div>
    </div>
</div>
<!-- include form -->
@include('partial.form')
@endsection