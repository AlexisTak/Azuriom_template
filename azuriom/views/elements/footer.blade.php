<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>{{ trans('theme::prism.footer.about') }}</h4>

            <p>{!! theme_config('footer_description') !!}</p>
        </div>
        <div class="col-md-3 links">
            <h4>{{ trans('theme::prism.footer.links') }}</h4>

            <ul class="list-unstyled">
                @foreach(theme_config('footer_links') ?? [] as $link)
                    <li>
                        <a href="{{ $link['value'] }}"><i class="fas fa-chevron-right"></i> {{ $link['name'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-3 social">
            <h4>{{ trans('theme::prism.footer.social') }}</h4>

            <ul class="list-inline">
                @foreach(['twitter', 'youtube', 'discord', 'steam', 'teamspeak', 'instagram', 'facebook', 'twitch'] as $social)
                    @if($socialLink = theme_config("footer_social_{$social}"))
                        <li class="list-inline-item">
                            <a href="{{ $socialLink }}" target="_blank" rel="noopener noreferrer" title="{{ trans('theme::prism.links.'.$social) }}"><i class="fab fa-{{ $social }} fa-2x"></i></a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <hr>

    <div class="row footer-bottom">
        <div class="col-md-6">
            {{ setting('copyright') }}
        </div>
        <div class="col-md-6 text-right">
            @lang('messages.copyright')
        </div>
    </div>
</div>

<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- imagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Jquery Countdown + Moment -->
<script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- SoundManager2 -->
<script src="assets/vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js"></script>

<!-- Seiyria Bootstrap Slider -->
<script src="assets/vendor/bootstrap-slider/dist/bootstrap-slider.min.js"></script>

<!-- Summernote -->
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>

<!-- nK Share -->
<script src="assets/plugins/nk-share/nk-share.js"></script>

<!-- GoodGames -->
<script src="assets/js/goodgames.min.js"></script>
<script src="assets/js/goodgames-init.js"></script>
<!-- END: Scripts -->



</body>
</html>
