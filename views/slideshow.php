<?php //$view->script('minigallery', 'gallery:app/bundle/slideshow.js', ['uikit', 'uikit-slideshow']) ?>

<!-- prettify plugins -->
<?php $view->script('prettify', 'gallery:assets/js/prettify.js', ['theme']) ?>

<!-- justified gallery plugins -->
<?php $view->style('jg-css', 'gallery:assets/css/justified-gallery/justifiedGallery.min.css') ?>
<?php $view->script('j-gallery', 'gallery:assets/js/justified-gallery/jquery.justifiedGallery.min.js', ['theme']) ?>

<!-- lightgallery plugins -->
<?php $view->style('lg-css', 'gallery:assets/css/lightgallery/lightgallery.css') ?>
<?php $view->script('lg-min', 'gallery:assets/js/lightgallery/lightgallery.min.js', ['theme']) ?>
<?php $view->script('lg-thumbnail', 'gallery:assets/js/lightgallery/lg-thumbnail.min.js', ['lg-min']) ?>
<?php $view->script('lg-fullscreen', 'gallery:assets/js/lightgallery/lg-fullscreen.min.js', ['lg-min']) ?>


<div class="uk-slidenav-position uk-width-large-3-4 uk-container-center"
     data-uk-slideshow="">
    <div id="<?php echo $gallery->slug ?>" class="list-unstyled justified-gallery">
        <?php foreach ($images as $image): ?>
        <a class="jg-entry" href="<?= $view->url()->getStatic($image->getImage()) ?>" data-sub-html="<?=$image->title?>">
          <img class="img-responsive" src="<?= $view->url()->getStatic($image->getImage()) ?>">
          <div class="demo-gallery-poster">
          <img src="http://sachinchoolur.github.io/lightGallery/static/img/zoom.png">
          </div>
        </a>
        <?php endforeach ?>
    </div>

    <script languaje="javascript">
    $(document).ready(function() {
        window.prettyPrint && prettyPrint()
        // Animated thumbnails
        var $animThumb = $('#<?=$gallery->slug ?>');
        if ($animThumb.length) {
            $animThumb.justifiedGallery({
                border: 6
            }).on('jg.complete', function() {
                var el = document.querySelector('#<?=$gallery->slug ?>');
                lightGallery(el, {
                    thumbnail: true
                });
            });
        };
    });
    </script>

    <?php if ($gallery->description): ?>
        <p class="uk-margin-remove"><?= $gallery->description ?></p>
    <?php endif ?>
</div>
