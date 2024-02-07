@extends('layouts.app')

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



        <main class="pb-20 min-h-full">

            <section class="px-5 text-sm text-gray-800 font-medium pb-4">
                <h1 class="w-full py-4 text-gradient-100 text-lg font-semibold text-center">Invite Friends</h1>
                <p class="max-w-md mx-auto text-center px-4">Tell your friends about the benefits of the Agcotechnology
                    platform. Copy
                    your
                    referral link below and send to them for
                    registration</p>
                <img src="{{ asset('static/partners.png') }}" alt="" class="mx-auto px-6 mt-4">
                <div class="mt-4 w-full max-w-sm mx-auto border-2 border-red-700 rounded-lg text-gradient-100 p-4 clip flex items-center"
                    data-clipboard-text="{{ url('signup') . '/?id=' . $user->my_refer_code }}">
                    <span>{{ url('signup') . '/?id=' . $user->my_refer_code }}</span>
                </div>
                <button
                    class="h-12 rounded-full text-white block w-full tracking-normal bg-gradient-100 items-center justify-center box-content py-1
focus:ring-4 focus:outline-none outline-none focus:ring-opacity-50 mx-auto font-semibold mt-3 clip"
                    data-clipboard-text="{{ url('signup') . '/?id=' . $user->my_refer_code }}">Copy Referral Link</button>
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
