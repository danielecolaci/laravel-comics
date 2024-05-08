<footer>
    <div class="container">
        <div class="row py-5">

            @php
                $footerLinks = include resource_path('php/footer.php');
            @endphp

            <div class="col-md-4">
                <ul>
                    <li>
                        <h5>DC COMICS</h5>
                    </li>

                    @foreach ($footerLinks['dcComics'] as $link)
                        <li><a href="#">{{ $link }}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>
                        <h5>DC</h5>
                    </li>

                    @foreach ($footerLinks['dc'] as $link)
                        <li><a href="#">{{ $link }}</a></li>
                    @endforeach

                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>
                        <h5>SITES</h5>
                    </li>

                    @foreach ($footerLinks['sites'] as $link)
                        <li><a href="#">{{ $link }}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</footer>
