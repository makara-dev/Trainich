<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tranich</title>
    <!-- Script bootstrap CDN (bootstrap and jquery) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Fontawsome -->
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <!-- Stylesheet -->
    <link href="{{ asset('css/masterpage.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages.css') }}" rel="stylesheet">
    @yield('stylesheet')
</head>

<body>
    <!-- BEGING:: masterpage -->
    <!-- BEGING:: header -->
    @include('partial.header')
    <!-- END:: header -->

    <!-- BIGING: body content -->
    @include('partial.flash-message')
    @yield('content')
    <!-- END:: body content  -->

    <!-- BIGING:: footer -->
    @include('partial.footer')
    <!-- END:: footer -->
    <!-- END:: masterpage -->

    <!-- BIGING: Messenger -->
    <div id="fb-root"></div>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="102227725247749" theme_color="#0084FF"></div>
    <!-- END: Messenger -->

</body>
<!-- Script -->
<script>
    // Messenger chat
    $(document).ready(function() {
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v7.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Change language block
        curLanText = @json(__('navbar-lan.language'));
        localStorage.setItem('currentLanguage', curLanText);

        english = {
            langUrl: "{{ Url('/locale','English') }}",
            langText: "ENGLISH",
        };

        khmer = {
            langUrl: "{{ Url('/locale','Khmer') }}",
            langText: "ភាសារខ្មែរ",
        };

        if (curLanText == "Khmer") {
            // change to English
            $("#lan-url").attr("href", english["langUrl"]);
            $("#lan-text").text(english["langText"]);
        }
        if (curLanText == "ENGLISH") {
            // change to Khmer
            $("#lan-url").attr("href", khmer["langUrl"]);
            $("#lan-text").text(khmer["langText"]);
        }

    });
</script>

@yield('script')

</html>