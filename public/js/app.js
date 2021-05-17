/**
 * Replace content description based on link clicked.
 * @param [Html_Class_Name] linkClassName
 * @param [Html_Class_Name] descriptionClassName
 * @param Array contentLinksArr
 * @return void
*/
function onLinkClickReplaceContent(linkClassName, descriptionClassName, contentLinksArr){
    linkClassName.on('click', function(e){
        // prevent link from reloading page
        e.preventDefault();
        // get current id and associate description
        linkId = $(this).attr('id');    
        contentDescription = contentLinksArr[linkId];
        // replace description
        // descriptionClassName.text('@lang(' + contentDescription + ')');
        descriptionClassName.text(contentDescription);
    });
}
/**
 * Disable mobile slider slider on specific breakpoint
 * @param [Html_Class_Name] sliderClassName
 * @param String breakPoint
 * @return void
*/
function deactiveMobileSlider(sliderClassName, breakPoint) {
    // get current client width
    clientWidth = $(window).width();
    if(clientWidth < breakPoint){
        slickActive(sliderClassName);
    }
}
/**
 * Active slider slider.
 * @param [Html_Class_Name] sliderClassName
 * @return void
*/
function slickActive(sliderClassName){
    $(sliderClassName).slick({
        dots: true,      
        arrows: false,                
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
}