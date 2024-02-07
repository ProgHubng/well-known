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

    <div class=" text-white px-2 py-2" style="border-bottom-left-radius: 50px;  background-color:#4bb5be;">
        <nav class="px-4 flex justify-between items-center  h-full w-full">
            <p></p>
            <p class="text-xl font-semibold">Profile</p>
            <img src="{{ asset('static/ref_blue.png') }}" alt="" width="30">
        </nav>
        <div class="flex justify-between px-4 mt-6">
            <div>
                <p>Hello:</p>
                <p class="text-lg font-semibold">ID: {{ $user->phone_number }}</p>
            </div>
            <div>
                <p>Balance</p>
                <p class="text-lg font-semibold">₦{{ number_format($user->balance) }}</p>
            </div>
        </div>
    </div>

    <main class="pb-20 min-h-full">

        <section class="px-5 py-6 text-sm text-gray-800 font-medium">
            <a class="flex items-center" href="/invite">
                <img src="{{ asset('static/ref_blue.png') }}" alt="" width="20">
                <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                    <span>Referral Link</span>
                    <i class="material-icons ml-auto" style="font-size: 1rem;">chevron_right</i>
                </div>
            </a>
            <a class="flex items-center" href="/wallet">
                <img src="{{ asset('static/order.png') }}" alt="" width="20">
                <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                    <span>My Wallet</span>
                    <i class="material-icons ml-auto" style="font-size: 1rem;">chevron_right</i>
                </div>
            </a>
            <a class="flex items-center" href="/deposits">
                <img src="{{ asset('static/order.png') }}" alt="" width="20">
                <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                    <span>Recharge Records</span>
                    <i class="material-icons ml-auto" style="font-size: 1rem;">chevron_right</i>
                </div>
            </a>

            <a class="flex items-center" href="/orders">
                <img src="{{ asset('static/order.png') }}" alt="" width="20">
                <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                    <span>My Orders</span>
                    <i class="material-icons ml-auto" style="font-size: 1rem;">chevron_right</i>
                </div>
            </a>
            <a class="flex items-center" href="/team">
                <img src="{{ asset('static/team.png') }}" alt="" width="20">
                <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                    <span>My Team</span>
                    <i class="material-icons ml-auto" style="font-size: 1rem;">chevron_right</i>
                </div>
            </a>
            <a class="flex items-center" href="/banking">
                <img src="{{ asset('static/card.png') }}" alt="" width="20">
                <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                    <span>My Bank Account</span>
                    <i class="material-icons ml-auto" style="font-size: 1rem;">chevron_right</i>
                </div>
            </a>
            <a class="flex items-center" href="https://t.me/agcotechnology">
                <img src="{{ asset('static/support.png') }}" alt="" width="20">
                <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                    <span>Customer Support</span>
                    <i class="material-icons ml-auto" style="font-size: 1rem;">chevron_right</i>
                </div>
            </a>

            <livewire:logout />

        </section>


    </main>
    <footer class="bg-white h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl" style="border-top-left-radius: 30px; border-top-right-radius: 30px; background-color:#5EE3EE;">
        <nav class="text-gray-700 h-full w-full flex justify-between items-center font-medium">

            <a href="/dashboard" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal " style="border-top-left-radius: 30px;">

                <img src="{{ asset('static/home.png') }}" alt="" width="30">

                <span class="text-xxs">Home</span>
            </a>

            <a href="/product" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal ">

                <img src="{{ asset('static/product.png') }}" alt="" width="30">

                <span class="text-xxs">Product</span>
            </a>

            <a href="/withdraw" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal ">

                <img src="{{ asset('static/money.png') }}" alt="" width="30">

                <span class="text-xxs">Withdraw</span>
            </a>

            <a href="/profile" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal text-gradient-100 font-semibold" style="border-top-right-radius: 30px;">

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
