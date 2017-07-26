(function ($) {

    $("img").each(function () {
        console.log("Image Size is " + $(this).width() + "x" + $(this).height() + " Width/Height");

        var image = $("img");
        var caption = $('#caption');
        var image_source = $(this).attr('src');
        var alt_text = $(this).attr('alt');
        var w = $(this).width();
        var h = $(this).height();

        $(this).css({'width': $(this).width(), 'height': $(this).height()});
        $(this).parent().height(jQuery(this).height());
        // $(this).parent().width(jQuery(this).width()).css('overflow', 'hidden');
        $(this).parent().width(jQuery(this).width());

        var imageinfo = '<div id="caption">Name: ' + alt_text + '<br>' +
            'Size:: Width:  ' + w + ' px | ' + 'Height: ' + h + ' px<br>' +
            'Source: ' + image_source + '</div>';

        $(this).parent(".piccap").append(imageinfo);

        console.log("=======================================================");
        console.log("%c IMAGE NAME:  ", 'border: solid 2px red; color: #black;text-transform: uppercase;font-weight: bold;', alt_text);
        console.log("%c Width:  ", 'background: #FFF; color: blue;text-transform: uppercase;font-weight: bold;', $(this).width());
        console.log("%c Height:  ", 'background: #FFF; color: blue;text-transform: uppercase;font-weight: bold;', $(this).height());
        console.log("%c Source:  ", 'background: #FFF; color: red;text-transform: uppercase;font-weight: bold;', image_source);
        console.log("=======================================================");

    });


    $("img").on('click', function (e) {
        e.preventDefault();
        $('#caption').slideToggle();
    });


    var maxHeight = 225;
    $("div.box").each(function () {
        if ($(this).height() > maxHeight) {
            maxHeight = $(this).height();
        }
    });
    $("div.box").height(maxHeight);

}(jQuery));
