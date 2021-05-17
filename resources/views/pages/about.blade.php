<!-- Extends masterpage -->
@extends('masterpage')
@section('stylesheet')
<!-- slick slider css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<!-- slick slider javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
@endsection
@section('content')
<!-- about content -->
<div class="container">
    <h5 class="about-heading heading" style="margin-top:80px; text-decoration:underline;">@lang('about-lan.title')</h5>
    <div class="row mt-5 about-center">
        <div class="col-sm-12 col-lg-4">
            <div class="ph-shape">
                <p>Photo</p>
            </div>
        </div>
        <div class="col-sm-12 col-lg-8">
            <div class="d-shape">
                <p>Describe</p>
            </div>
        </div>
    </div>
</div>
<div class="background">
    <div class="container trant">
        <!-- infor wrapper -->
        <div class="info-wrapper">
            <div class="info-content-link-wrapper">
                <h5> @lang('about-lan.key')</h5>
                <!-- link wrapper -->
                <div class="link-wrapper slider mobile-slider">
                    <!-- link block -->
                    <div class="info-card-wrapper">
                        <a id="link-1" class="content-link" href="">@lang('about-lan.key-success1')</a>
                        <div class="horizontal-line"></div>
                        <p class="mobile-content-description content-description">@lang('about-lan.key-paragraph1')</p>
                    </div>
                    <!-- link block -->
                    <div class="info-card-wrapper">
                        <a id="link-2" class="content-link " href="">@lang('about-lan.key-success2')</a>
                        <div class="horizontal-line"></div>
                        <p class="mobile-content-description content-description">@lang('about-lan.key-paragraph2')</p>
                    </div>
                    <!-- link block -->
                    <div class="info-card-wrapper">
                        <a id="link-3" class="content-link" href="">@lang('about-lan.key-success3')</a>
                        <div class="horizontal-line"></div>
                        <p class="mobile-content-description content-description">@lang('about-lan.key-paragraph3')</p>
                    </div>
                </div>
                <!-- vertical line -->
                <div class="vertical-line"></div>
                <!-- description wrapper -->
                <div class="content-wrapper desktop-content-description">
                    <p class="content-description">@lang('about-lan.key-paragraph1')</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- || -->

<div class="container d-flex flex-column align-items-center">
    <h5 class="heading" style="margin-top:50px; text-decoration:underline;">@lang('about-lan.user-target')</h5>
    <p style="padding:30px;width:70%; background-color:#808080;">
        Describe
    </p>
    <img style="width:80%; height:80%;" src="{{asset('images/Screen.png')}}" alt="">
</div>
@endsection

@section('script')
<!-- Script -->
<script src="{{asset('js/app.js')}}"></script>
<script>
    contentLinksArr = {
        "link-1": @json(__("about-lan.key-paragraph1")),
        "link-2": @json(__("about-lan.key-paragraph2")),
        "link-3": @json(__("about-lan.key-paragraph3")),
    }

    linkClassName = $('.content-link');
    descriptionClassName = $('.content-description');
    deactiveMobileSlider(".mobile-slider", '768');
    onLinkClickReplaceContent(linkClassName, descriptionClassName, contentLinksArr);
</script>
@endsection