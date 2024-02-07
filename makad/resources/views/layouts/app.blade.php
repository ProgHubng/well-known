<!DOCTYPE html>
<html class="" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description" content="Agcotechnology">
    <meta property="og:title" content="Agcotechnology">
    <meta property="og:url" content="https://Agcotechnology.com.ng/" />
    <meta property="og:image" content="https://Agcotechnology.com.ng/static/logo.png" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Agcotechnology">
    <link rel="shortcut icon" href="{{ asset('static/logo.png') }}" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="{{ asset('static/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;600;700&display=swap" rel="stylesheet">



    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <script src="{{ asset('static/alpine.js') }}" defer></script>
    <script src="{{ asset('static/main.js') }}"></script>
    <script src="{{ asset('static/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <script src="https://checkout.vella.finance/widget/sdk.js" type="module"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"
        integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ=="
        crossorigin="anonymous"></script>
    <script>
        moment.locale("en");

        function flask_moment_render(elem) {
            timestamp = moment($(elem).data('timestamp'));
            func = $(elem).data('function');
            format = $(elem).data('format');
            timestamp2 = $(elem).data('timestamp2');
            no_suffix = $(elem).data('nosuffix');
            args = [];
            if (format)
                args.push(format);
            if (timestamp2)
                args.push(moment(timestamp2));
            if (no_suffix)
                args.push(no_suffix);
            $(elem).text(timestamp[func].apply(timestamp, args));
            $(elem).removeClass('flask-moment').show();
        }

        function flask_moment_render_all() {
            $('.flask-moment').each(function() {
                flask_moment_render(this);
                if ($(this).data('refresh')) {
                    (function(elem, interval) {
                        setInterval(function() {
                            flask_moment_render(elem)
                        }, interval);
                    })(this, $(this).data('refresh'));
                }
            })
        }
        $(document).ready(function() {
            flask_moment_render_all();
        });
    </script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <livewire:styles />
    <livewire:scripts />

</head>

<body class="bg-white">

    @yield('content')

</body>

<script>
    window.addEventListener('alert', event => {
        toastr[event.detail.type](event.detail.message,
            event.detail.title ?? ''), toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    });
</script>


</html>
