
//
function generateSlider() {
    $('.project-preview').slick({
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
        infinite: true,
        arrow: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2500,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
        ]
    });
}

//Image pop up
function initImagePopUp() {
    //
    $(".project-img").on("click", setImgSrc);
    $(".preview-img").on("click", setImgSrc);

    //
    $(".close").on('click', function(){
        $("#popUpModal").css("display", "none");
        console.log('close');
        
    });

    function setImgSrc() {
        
        imgSrc = $(this).attr('src');
        imgtext = $(this).attr('alt');

        $("#popUpModal").css('display', 'flex');
        $("#imgModal").attr('src', imgSrc);
        $('#captionModal').html(imgtext);
    }
}