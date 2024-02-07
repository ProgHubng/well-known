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
            <p class="text-xl font-semibold">Deposit</p>
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

<main class="pb-20 min-h-full">

<section>
<div class="py-6">
    <div class="text-blue-700 text-sm font-semibold flex space-x-2 items-center">
        <p class="font-extrabold text-sm tracking-tight">Deposit Records</p>
    </div>
    <div class="px-2 mt-4">
        <div class="bg-white shadow-xl rounded-xl px-4 py-3 flex justify-center items-center flex-col space-y-1">
            <div class="divide-x divide-gray-700 flex py-3 text-center font-bold text-sm text-blue-700 w-full">
                <div class="w-1/3">Time</div>
                <div class="w-1/3">Amount</div>
                <div class="w-1/3">Status</div>
            </div>

            @foreach($deposit as $item)

            <div class="divide-x divide-gray-700 flex py-3 text-center font-bold text-sm text-blue-700 w-full">
                <div class="w-1/3">{{ $item->created_at->format('Y/M/d h:ia') }}</div>
                <div class="w-1/3">₦{{ number_format($item->price) }}</div>
                <div class="w-1/3">
                    @if($item->status == 'success')
                        Successful

                    @elseif($item->status == 'pending')
                        Pending

                    @elseif($item->status == 'fail')
                        Failed

                    @endif
                </div>
            </div>

            @endforeach

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

            <img src="{{ asset('static/home.png') }}" alt="" width="30">

            <span class="text-xxs">Home</span>
        </a>

        <a href="/product"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
            >

            <img src="{{ asset('static/product.png') }}" alt="" width="30">

            <span class="text-xxs">Product</span>
        </a>

        <a href="/withdraw"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal text-blue-500 font-semibold"
            >

            <img src="{{ asset('static/money.png') }}" alt="" width="30">

            <span class="text-xxs">Withdraw</span>
        </a>

        <a href="/profile"
            class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal "
            style="border-top-right-radius: 30px;" >

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
