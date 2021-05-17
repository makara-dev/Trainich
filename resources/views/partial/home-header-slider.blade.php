<!-- ==================
    Home header slider
======================== -->

<!-- custom stylesheet -->
@section('stylesheet')
<!-- slick slider css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<!-- slick slider javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

@endsection

<!-- BEGIN:: Slider Show -->
<input type="hidden" class="totalSlider" value="{{count($panoramas)}}">
<div class="slideshow slider-wrapper">
    <!-- number of total slider -->
    @foreach($panoramas as $key => $panorama)
    <div class="slider-img-wrapper">
        <img class="mobile-panorama{{$key}}" src="{{asset($panorama->mobile_img_path)}}" alt="panorama image">
        <input type="hidden" class="desktop-panorama{{$key}}" value="{{asset($panorama->desktop_img_path)}}">
    </div>
    @endforeach

</div>
<!-- BEGIN:: Slider Show -->

<!-- custom script -->
@section('script')
<script>
    doneChanged = false;

    $(window).resize(function() {
        // get every resize width
        windowWidth = $(window).width();

        // replace slider image only one time in every resize
        if (windowWidth > 768 && !doneChanged) {
            replaceGroupSliderImage('.mobile-panorama', '.desktop-panorama', '.totalSlider');
            doneChanged = true;
        }
        if (windowWidth < 768 && doneChanged) {
            replaceGroupSliderImage('.mobile-panorama', '.desktop-panorama', '.totalSlider');
            doneChanged = false;
        }

    });

    $(document).ready(function() {
        activateSlickSlider('.slideshow');

        // replace slider image on refresh
        windowWidth = $(window).width();
        windowWidth >= 768 ? replaceGroupSliderImage('.mobile-panorama', '.desktop-panorama', '.totalSlider') : null;

    });

    /**
     * Activate slick slider base on given class name.
     * @param [Html_Element_ClassName] elementClassName
     *
     * @return void
     */
    function activateSlickSlider(elementClassName) {
        // slick slider library
        $(elementClassName).slick({
            dots: true,
            infinite: true,
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }

    /**
     * Replacing group of image path base on given changes image path.
     * @param [Html_Element_ClassName] currentImgClassName
     * @param [Html_Element_ClassName] changesImgClassName
     * @param [Html_Element_ClassName] totalSlider
     *
     * @return void
     */
    function replaceGroupSliderImage(currentImgClassName, changesImgClassName, totalSlider) {
        totalSlider = $(totalSlider).val();

        // replace all img path
        for (i = 0; i < totalSlider; i++) {
            changesImgPath = $(changesImgClassName + i).val();
            currentImgPath = $(currentImgClassName + i).attr('src');

            tempCurrenImgPath = currentImgPath;

            $(currentImgClassName + i).attr('src', changesImgPath);
            $(changesImgClassName + i).val(tempCurrenImgPath);

        }

    }
</script>

@endsection