@extends('layouts.app')

@section('title', 'Twy Ford | DASHBOARD')

@section('content')


    <style>
        [x-cloak] {
            display: none !important;
        }

        html {
            min-height: 100%;
            height: 100%;
        }


        html,
        body {
            max-height: 100%;
            height: 100%;
            font-size: 16px;
        }

        * {
            font-family: 'Karla', sans-serif;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:focus {
            transition: background-color 600000s 0s, color 600000s 0s;
        }
    </style>





    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
    <div class="w-full h-full min-h-full overflow-x-hidden bg-gray-100">

        <header class="h-20 fixed top-0 left-0 right-0  z-30 py-4 bg-gray-100">
            <nav class="px-4 flex justify-between items-center  h-full w-full">
                <p></p>
                <img src="{{ asset('static/banner.png') }}" alt="" width="150" class="">
                <a href="{{ url('/invite') }}"><img src="{{ asset('static/ref_blue.png') }}" alt="" width="30"></a>
            </nav>
        </header>

        <main class="pb-20 min-h-full">

            <section>
                <img src="{{ asset('static/banner2.jpg') }}" alt="" class="max-w-full p-4 w-full rounded-xl">
            </section>
            <section class="px-4 py-3">
                <div class="mt-2 px-4 text-gray-700 text-sm font-semibold">
                   <center>     <a href="https://twyford.com.ng/TwyFord.apk" style="display: inline-block; padding: 10px; background-color: #4CAF50; color: #fff; font-weight: bold; text-decoration: none;"> Download Our App </a> </center>
              <center>     <a href="https://whatsapp.com/channel/0029VaHgsFGFi8xgMr7yU82M" style="display: inline-block; padding: 10px; background-color: #4CAF50; color: #fff; font-weight: bold; text-decoration: none;"> Join Our Channel</a>
                    <p><b>Brief Introduction</b></p></center> 
                    
                    <p>Twyford is one of the best-known tile brands and manufacturers in Africa and South America. It is universally recognized as a benchmark for quality tiles, a symbol of Made in Africa around the world. Twyford brand was founded by SUNDA International Group in 2000 and successively established 5 factories with KEDA INDUSTRIAL GROUP CO., LTD in Kenya, Ghana, Tanzania, Senegal, and Zambia since 2016. TodayTwyford and its tiles span more than 100 cities across over 20 countries worldwide, reaching over 1 billion people. Due to the great production capacity and sales network, Twyford is regarded as a global key player in the industry</p>
            </section>
            <section>
                <img src="{{ asset('static/banner.png') }}" alt="" class="max-w-full p-4 w-full rounded-xl">
            </section>
            <section class="px-4 py-3">
                <div class="mt-2 px-4 text-gray-700 text-sm font-semibold">
                    <p>
                        We grow together with Africa in opportunities and challenges. We combine the accessibility and affordability of our tiles with responsible business growth. The slogan "Better tiles, Better life" has always been regarded as Twyford's mission and creed.                         


                       

Since decades ago, Twyford has been striving to make better tiles for everyone, everywhere in an affordable way. We are committed to providing our customers with affordable and better tiles,creating better life and communities for people, as well as better world we live in.
                    </p>
            </section>


        </main>
        <footer class="bg-white h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl"
            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
            <nav class="text-gray-700 h-full w-full flex justify-between items-center font-medium">

                <a href="{{ url('/dashboard') }}"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal text-gradient-100 font-semibold"
                    style="border-top-left-radius: 30px;">

                    <img src="{{ asset('static/home_blue.png') }}" alt="" width="30">

                    <span class="text-xxs">Home</span>
                </a>

                <a href="{{ url('/product') }}"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal ">

                    <img src="{{ asset('static/product.png') }}" alt="" width="30">

                    <span class="text-xxs">Product</span>
                </a>

                <a href="{{ url('/withdraw') }}"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal ">

                    <img src="{{ asset('static/money.png') }}" alt="" width="30">

                    <span class="text-xxs">Withdraw</span>
                </a>

                <a href="{{ url('/profile') }}"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
                    style="border-top-right-radius: 30px;">

                    <img src="{{ asset('static/user.png') }}" alt="" width="30">

                    <span class="text-xxs">Profile</span>
                </a>

            </nav>
        </footer>
        <script>
            const clipboard = new ClipboardJS('.clip')
            clipboard.on('success', () => {
                alert('Your referral link has been copied to the clipboard')
            })
        </script>

    </div>

    <script>
        feather.replace()
    </script>


@endsection
