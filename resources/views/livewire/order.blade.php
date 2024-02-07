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

<div class="bg-gradient-100 text-white px-4 py-5" style="border-bottom-left-radius: 50px;">
<nav class="px-4 flex justify-between items-center  h-full w-full">
    <p></p>
    <p class="text-xl font-semibold">Orders</p>
    <img src="static/ref.png" alt="" width="30">
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

<section class="py-5 px-6">
<h1 class="text-xl font-medium text-gradient-100">My Plans</h1>
<div class="mt-4 flex flex-wrap justify-center">

    @foreach($order as $item)

    <div class="bg-white shadow-lg rounded-lg mt-5 pb-4">
        <div class="flex justify-between">
            <p class="px-4 py-3 text-blue-700 text-sm font-bold">{{ $item->plan->name }}</p>
            <p class="bg-red-400 text-white text-xs p-2 rounded-tr-lg rounded-bl-lg font-semibold">{{ $item->plan->valid }}days</p>
        </div>
        <div class="flex mt-2 px-3">
            <img src="{{ asset('uploads/plan/' . $item->plan->image) }}" alt="" class="w-1/2">
            <div class="font-semibold text-sm px-3 text-gray-700">
                <p class="text-blue-700">Price</p>
                <p>₦{{ number_format($item->plan->price) }}</p>
                <p class="text-blue-700 mt-2">Daily Income</p>
                <p>₦{{ number_format($item->daily_income) }}</p>
                <p class="text-blue-700 mt-2">Total Return</p>
                <p>₦{{ number_format($item->daily_income * $item->plan->valid) }}</p>
            </div>
        </div>

    </div>

    @endforeach


</div>
</section>


</main>
<footer class="bg-white h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl"
    style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
    <nav class="text-gray-700 h-full w-full flex justify-between items-center font-medium">

        <a href="/dashboard"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal text-blue-500 font-semibold"
            style="border-top-left-radius: 30px;" >

            <img src="{{ asset('static/home_blue.png') }}" alt="" width="30">

            <span class="text-xxs">Home</span>
        </a>

        <a href="/product"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
            >

            <img src="{{ asset('static/product.png') }}" alt="" width="30">

            <span class="text-xxs">Product</span>
        </a>

        <a href="/withdraw"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
            >

            <img src="{{ asset('static/money.png') }}" alt="" width="30">

            <span class="text-xxs">Withdraw</span>
        </a>

        <a href="/profile"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
            style="border-top-right-radius: 30px;" >

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
