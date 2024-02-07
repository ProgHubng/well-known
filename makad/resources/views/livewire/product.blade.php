@extends('layouts.app')

@section('title', 'TwF Ford DASHBOARD')

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

    <div class="bg-gradient-100 text-white px-4 py-5" style="border-bottom-left-radius: 50px;">
        <nav class="px-4 flex justify-between items-center  h-full w-full">
            <p></p>
            <p class="text-xl font-semibold">Product</p>
            <img src="{{ asset('static/ref_blue.png') }}" alt="" width="30">
        </nav>
        <div class="flex justify-between px-4 mt-6">
            <div>
                <p>Hello:</p>
                <p class="text-lg font-semibold">ID: {{ $user->phone_number }} </p>
            </div>
            <div>
                <p>Balance</p>
                <p class="text-lg font-semibold">₦{{ number_format($user->balance) }}</p>
            </div>
        </div>
    </div>
    <center> <a href="https://whatsapp.com/channel/0029VaHgsFGFi8xgMr7yU82M" style="display: inline-block; padding: 10px; background-color: #4CAF50; color: #fff; font-weight: bold; text-decoration: none;"> Join Our Channel</a> </center>
    <main class="pb-20 min-h-full">

        <section class="px-4">

            <div class="flex justify-between mb-4">
                <button id="buttonA" class="bg-red-500 text-white px-4 py-2 rounded focus:outline-none focus:ring focus:border-red-300" onclick="filterItems(29)">Pump</button>
                <button id="buttonB" class="bg-red-500 text-white px-4 py-2 rounded focus:outline-none focus:ring focus:border-red-300" onclick="filterItems(30)">Kitchen </button>
                <button id="buttonC" class="bg-red-500 text-white px-4 py-2 rounded focus:outline-none focus:ring focus:border-red-300" onclick="filterItems(31)">Bathroom</button>
            </div>

            @foreach ($product as $item)
            <div class="product-item bg-white shadow-lg rounded-lg mt-5 pb-4" data-valid="{{ $item->valid }}">
                <div class="flex justify-between">
                    <p class="px-4 py-3 text-blue-700 text-sm font-bold">{{ $item->name }}</p>
                    <p class="bg-gradient-100 text-white text-xs p-2 rounded-tr-lg rounded-bl-lg font-semibold">
                        {{ $item->valid }} days
                    </p>
                </div>
                <div class="flex mt-2 px-3">
                    <img src="{{ asset('uploads/plan/' . $item->image) }}" alt="" class="w-1/2">
                    <div class="font-semibold text-sm px-3 text-gray-700">
                        <p class="text-blue-700">Price</p>
                        <p>₦{{ number_format($item->price) }}</p>
                        <p class="text-blue-700 mt-2">Daily Income</p>
                        <p>₦{{ number_format($item->daily_income) }}</p>
                        <p class="text-blue-700 mt-2">Total Return</p>
                        <p>₦{{ number_format($item->daily_income * $item->valid) }}</p>
                    </div>
                </div>
                <div class="mt-3 px-5">
                    <a href="{{ url('buy/' . $item->id) }}" class="h-10 rounded-full text-white flex w-full tracking-normal bg-gradient-100 items-center justify-center py-1
                    focus:ring-4 focus:outline-none outline-none focus:ring-opacity-50 mx-auto font-semibold text-sm">Buy</a>
                </div>
            </div>
            @endforeach

        </section>

        <script>
            function filterItems(valid) {
                const items = document.querySelectorAll('.product-item');
                items.forEach(item => {
                    const itemValid = parseInt(item.getAttribute('data-valid'));
                    item.style.display = itemValid === valid ? 'block' : 'none';
                });
            }
        </script>

    </main>


    <footer class="bg-white h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
        <nav class="text-gray-700 h-full w-full flex justify-between items-center font-medium">

            <a href="/dashboard" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal " style="border-top-left-radius: 30px;">

                <img src="{{ asset('static/home.png') }}" alt="" width="30">

                <span class="text-xxs">Home</span>
            </a>

            <a href="/product" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal text-gradient-100 font-semibold">

                <img src="{{ asset('static/product_blue.png') }}" alt="" width="30">

                <span class="text-xxs">Product</span>
            </a>

            <a href="/withdraw" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal ">

                <img src="{{ asset('static/money.png') }}" alt="" width="30">

                <span class="text-xxs">Withdraw</span>
            </a>

            <a href="/profile" class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal " style="border-top-right-radius: 30px;">

                <img src="{{ asset('static/user.png') }}" alt="" width="30">

                <span class="text-xxs">Profile</span>
            </a>

        </nav>
    </footer>
    <script>
        const clipboard = new ClipboardJS('.clip')
        clipboard.on('success', () => {
            alert('Your referral link has been copied to the clipboard')
        });
    </script>

</div>

<script>
    feather.replace()
</script>
@php
$csrf_token = csrf_token();
@endphp
php
<script>
    // document.getElementById('buyButton').addEventListener('click', function(event) {
    //     event.preventDefault();

    //     // Get the plan ID from your product data
    //     var planId = YOUR_PLAN_ID; // Replace this with the actual plan ID

    //     // Make an asynchronous request to check level3_referral_id and product price
    //     fetch('{{ route('
    //             checkProductValidity ') }}?plan_id=' + planId, {
    //                 method: 'GET',
    //                 headers: {
    //                     'Accept': 'application/json',
    //                     'X-CSRF-TOKEN': '{{ $csrf_token }}',
    //                 },
    //           php  })
    //         .then(response => response.json())
    //         .then(data => {
    //             if (data.isProductValid) {
    //                 // If both conditions are met, allow the user to proceed to the purchase
    //                 window.location.href = event.target.href;
    //             } else {
    //                 // If the conditions are not met, show a message and prevent the purchase
    //                 alert('The product is not valid for purchase.');
    //             }
    //         })
    //         .catch(error => {
    //             console.error('Error checking product validity:', error);
    //         });
    // });
</script>



@endsection
