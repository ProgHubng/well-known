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

<header class="h-20 fixed top-0 left-0 right-0  z-30 py-4 bg-gray-100" style="border-bottom-left-radius: 50px;  background-color:#4bb5be;">
<nav class="px-4 flex justify-between items-center  h-full w-full">
    <p></p>
    <img src="{{ asset('static/banner.png') }}" alt="" width="150" class="">
    <a href="/invite"><img src="{{ asset('static/ref_blue.png') }}" alt="" width="30"></a>
</nav>
</header>

<main class="pb-20 min-h-full">

<section class="px-5 text-sm text-gray-800 font-medium pb-4 mt-20">
<h1 class="w-full py-4 text-gradient-100 text-lg font-semibold text-center">Bank Transfer</h1>
<p class="max-w-md mx-auto text-center px-4 font-semibold">Send <span class="text-red-700">&#8358;{{ number_format($plan->price) }}</span> to the bank account  below to buy <span class="text-red-700">{{ $plan->name }} </span>
    package</p>

<div class="mt-4 py-6 shadow-md text-red-900 bg-white w-full p-4 space-y-2 rounded-lg">
    <div class="flex justify-between text-xs font-bold">
        <p>Bank</p>
        <p>VFD MFB</p>
    </div>
    <div class="flex justify-between text-xs font-bold">
        <p>Account No</p>
        <p>4600416253</p>
    </div>
    <div class="flex justify-between text-xs font-bold">
        <p>Account Name</p>
        <p>Heavens Gate Agric Ventures </p>
    </div>
</div>

<p class="max-w-md mx-auto text-center px-4 font-semibold mt-4">Submit payment details below</p>
<div class="py-3">


    <div class="px-2 mt-4">
        <div class="bg-white shadow-xl rounded-xl px-4 py-3 flex justify-center items-center flex-col space-y-1">

            @include('livewire.storepayment')

        </div>
    </div>
</div>
</section>



</main>
<footer class=" h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl" style="border-top-left-radius: 30px; border-top-right-radius: 30px; background-color:#5EE3EE;">
    <nav class="text-gray-700 h-full w-full flex justify-between items-center font-medium">

        <a href="/dashboard"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
            style="border-top-left-radius: 30px;" >

            <img src="{{ asset("static/home.png") }}" alt="" width="30">

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

