<footer>
    <div class="buy-section w-100">
        <div class="container h-100 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <div class="buy-img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" class="h-100">
                </div>
                <h6>Digital Comics</h6>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="buy-img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" class="h-100">
                </div>
                <h6>DC Merchandise</h6>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="buy-img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" class="h-100">
                </div>
                <h6>Subscription</h6>
            </div>
            <div class="d-flex align-items-center gap-3">
                <div class="buy-img">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" class="h-100">
                </div>
                <h6>Comic Shop Locator</h6>
            </div>
        </div>
    </div>
    <div class="link-section">
        <div class="container">
            <div class="row py-5">

                @php
                    $footerLinks = include resource_path('php/footer.php');
                @endphp

                <div class="col-md-4">
                    <ul>
                        <li>
                            <h5 class="oswald">DC COMICS</h5>
                        </li>

                        @foreach ($footerLinks['dcComics'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <h5 class="oswald">DC</h5>
                        </li>

                        @foreach ($footerLinks['dc'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <h5 class="oswald">SITES</h5>
                        </li>

                        @foreach ($footerLinks['sites'] as $link)
                            <li><a href="#">{{ $link }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="footer-bg h-100"></div>
        </div>
    </div>
    <div class="bottom-section w-100 align-content-center">
        <div class="container d-flex justify-content-between">
            <button class="oswald">Sign-up Now</button>
            <div class="social d-flex gap-3 align-items-center">
                <h4 class="oswald">Follow Us</h4>
                <div class="social-img">
                    <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" class="h-100">
                </div>
                <div class="social-img">
                    <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" class="h-100">
                </div>
                <div class="social-img">
                    <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" class="h-100">
                </div>
                <div class="social-img">
                    <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" class="h-100">
                </div>
                <div class="social-img">
                    <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" class="h-100">
                </div>
            </div>
        </div>
    </div>
</footer>
