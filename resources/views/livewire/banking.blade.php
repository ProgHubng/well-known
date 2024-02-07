@extends('layouts.app')

@section('title', 'Agcotechnology DASHBOARD')

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
                <a href="/invite"><img src="{{ asset('static/ref_blue.png') }}" alt="" width="30"></a>
            </nav>
        </header>

        <main class="pb-20 min-h-full">

            <section class="w-full max-w-lg mx-auto mt-20">
                <div class="">
                    <div class="w-full px-6 py-6 bg-transparent 0 rounded-lg text-gradient-100">
                        <p class="font-semibold">My Banking Details</p>
                        <div class="mt-4 text-sm">


                            <livewire:storebank />

                        </div>
                    </div>
                </div>
            </section>



        </main>
        <footer class="bg-white h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl"
            style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
            <nav class="text-gray-700 h-full w-full flex justify-between items-center font-medium">

                <a href="/dashboard"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
                    style="border-top-left-radius: 30px;">

                    <img src="{{ asset('static/home.png') }}" alt="" width="30">

                    <span class="text-xxs">Home</span>
                </a>

                <a href="/product"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal ">

                    <img src="{{ asset('static/product.png') }}" alt="" width="30">

                    <span class="text-xxs">Product</span>
                </a>

                <a href="/withdraw"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal ">

                    <img src="{{ asset('static/money.png') }}" alt="" width="30">

                    <span class="text-xxs">Withdraw</span>
                </a>

                <a href="/profile"
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal text-blue-500 font-semibold"
                    style="border-top-right-radius: 30px;">

                    <img src="{{ asset('static/user_blue.png') }}" alt="" width="30">

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
