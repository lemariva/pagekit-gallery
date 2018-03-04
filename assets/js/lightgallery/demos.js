$(document).ready(function() {

    window.prettyPrint && prettyPrint()

    // Animated thumbnails
    var $animThumb = $('#aniimated-thumbnials');
    if ($animThumb.length) {
        $animThumb.justifiedGallery({
            border: 6
        }).on('jg.complete', function() {
            var el = document.querySelector('#aniimated-thumbnials');
            lightGallery(el, {
                thumbnail: true
            });
        });
    };

});
