@extends('masterpage')
@section('stylesheet')
<link rel="stylesheet" href="{{asset('css/project-detail.css')}}">
<!-- slick slide cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
@endsection

@section('content')
<!-- BEGIN :: Project Image Detail -->
<div class="project-showcase bg-dark">
    <div class="showcase-wrapper">
        <img class="project-img" src="{{ asset($project['showcaseImg']) }}" alt="@lang($project['name'])">
        <div class="project-showcase-text">
            <h4 class="project-name">@lang($project['name'])</h4>
        </div>
    </div>
</div>
<!-- END :: Project Image Detail -->

<!-- BEGIN :: Project Description -->
<div class="project-info">
    <div class="project-info-name pb-2 pb-sm-5">
        <h4 id="project-info-heading">@lang($project['name'])</h4>
    </div>
    <div class="project-info-detail row">
        <div class="detail-info col-lg-7 col-md-6 col-12 pb-5 pb-sm-0">
            <p id="project-info-desc">@lang($project['description'])</p>
        </div>
        <a class="project-info-img col-lg-5 col-md-6 col-12" href="{{$project['url']}}" target="_blank">
            <img id="map_img" class="col-12 col-sm-auto shadow-sm p-0" src="{{ asset($project['location']) }}" alt="Location On The Map">
        </a>
    </div>
</div>
<!-- END :: Project Description -->

<!-- BEGIN :: Project Preview Slider -->
<div class="project-preview">
    @foreach ($project['previewImg'] as $img)
    <div class="preview-img-wrapper">
        <img class="preview-img" src="{{asset($img)}}" alt="@lang($project['name'])">
    </div>
    @endforeach
</div>
<!-- END :: Project Preview -->

<!-- BEGIN :: Popup -->
<div id="popUpModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="imgModal">
    <p id="captionModal" class="text-white font-20"></p>
</div>
@endsection

@section('script')
<script src="{{asset('js/project-detail.js')}}"></script>
<script>
    generateSlider();
    initImagePopUp();
</script>
@endsection