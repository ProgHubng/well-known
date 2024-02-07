@extends('layouts.app')

@section('title', 'TwF Ford DASHBOARD')

@section('content')


<!-- Add these lines to your HTML template (e.g., layout.blade.php) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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
        transition: background-color 600s 0s, color 600s 0s;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .blink {
        animation: blink 1s infinite;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="w-full h-full min-h-full overflow-x-hidden bg-gray-100">

<div class=" text-white px-2 py-2" style="border-bottom-left-radius: 50px;  background-color:#4bb5be;">
    <nav class="px-4 flex justify-between items-center  h-full w-full">
        <p></p>
        <p class="text-xl font-semibold">Product</p>
        <img src="{{ asset('static/ref_blue.png') }}" alt="" width="30">
    </nav>
    <div class="flex justify-between px-4 mt-6">
        <div>
            <p class="text-lg font-semibold">Hello:

            <p class="text-lg font-semibold">ID: {{ $user->phone_number }} </p>
        </div>
        <div>
            <a class="flex items-center" href="/wallet">
                <!-- <img src="{{ asset('static/wallet.png') }}" alt="" width="20">
                    <div class="border-b border-gray-300 px-1 ml-2 py-3 flex w-full">
                        <span></span>

                    </div> -->
                <p>My Wallet</p>
                <p class="text-lg font-semibold"><i class="material-icons ml-auto" style="font-size: 2rem;">wallet</i>₦{{ number_format($user->balance) }}</p>

            </a>

        </div>
    </div>
</div>

<center class="mt-3">
    <a href="https://whatsapp.com/channel/0029VaHgsFGFi8xgMr7yU82M" style="display: inline-block; padding: 10px; background-color: #4CAF50; color: #fff; font-weight: bold; text-decoration: none;">
        <i class="fab fa-whatsapp"></i> Join Our Channel
    </a>
</center>


<div class="content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-pills p-2 list-unstyled d-flex justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" id="pump-tab" data-toggle="pill" href="#pump">
                        <span class=" "></span>Pump
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kitchen-tab" data-toggle="pill" href="#kitchen">
                        <span class=""></span>Kitchen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="bathroom-tab" data-toggle="pill" href="#bathroom" data-tab="31">
                        <span class=""></span>Bathroom
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane fade show" id="pump">
        @foreach ($product29 as $item)
        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <img src="{{ asset('uploads/plan/' . $item->image) }}" alt="" class="img-fluid rounded-full">
                                </div>

                                <div class="col-md-9 col-sm-12 mt-3 mt-md-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="px-4 py-3 text-blue-700 text-sm font-bold">{{ $item->name }}</p>
                                            <p class="text-red-700">Valid Period: <span class="blink">{{ $item->valid }} days</span></p>
                                            <p class="text-blue-700">Price: ₦{{ number_format($item->price) }}</p>
                                            <p class="text-blue-700 mt-2">Daily Income: ₦{{ number_format($item->daily_income) }}</p>
                                            <p class="text-blue-700 mt-2">Total Return: ₦{{ number_format($item->daily_income * $item->valid) }}</p>
                                        </div>
                                        <div class="col-12 col-md-3  mt-1 mb-5">
                                            <!-- <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                    Buy
                                                </a> -->
                                            @if ($item->price >= 100000 && $item->price <= 199000 && $referralCount==3) <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                Buy
                                                </a>
                                                @elseif ($item->price >= 200000 && $item->price <= 399000 && $referralCount>= 5)
                                                    <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                        Buy
                                                    </a>
                                                    @elseif ($item->price >= 400000 && $referralCount >= 10)
                                                    <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                        Buy
                                                    </a>
                                                    @elseif ($item->price <= 99000 && $referralCount>= 0)
                                                        <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                            Buy
                                                        </a>
                                                        @else
                                                        <a id="buyButton1" class="btn btn-warning btn-lg rounded-full errorBtn">
                                                            Buy
                                                        </a>
                                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>


    <div class="tab-pane fade" id="kitchen">
        @foreach ($product30 as $item)
        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <img src="{{ asset('uploads/plan/' . $item->image) }}" alt="" class="img-fluid rounded-full">
                                </div>

                                <div class="col-md-9 col-sm-12 mt-3 mt-md-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="px-4 py-3 text-blue-700 text-sm font-bold">{{ $item->name }}</p>
                                            <p class="text-red-700">Valid Period: <span class="blink">{{ $item->valid }} days</span></p>
                                            <p class="text-blue-700">Price: ₦{{ number_format($item->price) }}</p>
                                            <p class="text-blue-700 mt-2">Daily Income: ₦{{ number_format($item->daily_income) }}</p>
                                            <p class="text-blue-700 mt-2">Total Return: ₦{{ number_format($item->daily_income * $item->valid) }}</p>
                                        </div>
                                        <div class="col-12 col-md-3 mt-1 mb-5">
                                            <!-- <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                    Buy
                                                </a> -->
                                            @if ($item->price >= 100000 && $item->price <= 199000 && $referralCount==3) <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                Buy
                                                </a>
                                                @elseif ($item->price >= 200000 && $item->price <= 399000 && $referralCount==5) <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                    Buy
                                                    </a>
                                                    @elseif ($item->price >= 400000 && $referralCount == 10)
                                                    <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                        Buy
                                                    </a>
                                                    @elseif ($item->price <= 99000 && $referralCount>= 0)
                                                        <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                            Buy
                                                        </a>
                                                        @else
                                                        <a id="buyButton1" class="btn btn-warning btn-lg rounded-full errorBtn">
                                                            Buy
                                                        </a>
                                                        <!-- <p>Error: The conditions for purchasing this product are not met.</p> -->
                                                        @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="tab-pane fade" id="bathroom">
        @foreach ($product31 as $item)
        <div class="container-fluid mb-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-3">
                                    <img src="{{ asset('uploads/plan/' . $item->image) }}" alt="" class="img-fluid rounded-full">
                                </div>

                                <div class="col-md-9 col-sm-12 mt-3 mt-md-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="px-4 py-3 text-blue-700 text-md font-bold">{{ $item->name }}</p>
                                            <p class="text-red-700">Valid Period: <span class="blink">{{ $item->valid }} days</span></p>
                                            <p class="text-blue-700">Price: ₦{{ number_format($item->price) }}</p>
                                            <p class="text-blue-700 mt-2">Daily Income: ₦{{ number_format($item->daily_income) }}</p>
                                            <p class="text-blue-700 mt-2">Total Return: ₦{{ number_format($item->daily_income * $item->valid) }}</p>
                                        </div>
                                        <div class="col-12 col-md-3 mt-1 mb-5">
                                            <!-- <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                    Buy
                                                </a> -->
                                            @if ($item->price >= 100000 && $item->price <= 199000 && $referralCount==3) <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                Buy
                                                </a>
                                                @elseif ($item->price >= 200000 && $item->price <= 399000 && $referralCount==5) <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                    Buy
                                                    </a>
                                                    @elseif ($item->price >= 400000 && $referralCount == 10)
                                                    <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                        Buy
                                                    </a>
                                                    @elseif ($item->price <= 99000 && $referralCount>= 0)
                                                        <a id="buyButton" href="{{ url('buy/' . $item->id) }}" class="btn btn-warning btn-lg rounded-full">
                                                            Buy
                                                        </a>
                                                        @else
                                                        <a id="buyButton1" class="btn btn-warning btn-lg rounded-full errorBtn">
                                                            Buy
                                                        </a>
                                                        <!-- <p>Error: The conditions for purchasing this product are not met.</p> -->
                                                        @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>





<footer class=" h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl mt-5" style="border-top-left-radius: 30px; border-top-right-radius: 30px; background-color:#5EE3EE;">
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
<!-- Add these script tags to your HTML file if not already included -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<script>
    const clipboard = new ClipboardJS('.clip')
    clipboard.on('success', () => {
        alert('Your referral link has been copied to the clipboard')
    })


    function filterItems(tabIndex) {
        const tabs = document.querySelectorAll('.nav-link');
        tabs.forEach((tab, index) => {
            const tabId = tab.getAttribute('data-tab');
            const tabPane = document.getElementById(tabId);

            if (index == tabIndex) {
                tab.classList.add('active');
                tabPane.classList.add('show', 'active');
            } else {
                tab.classList.remove('active');
                tabPane.classList.remove('show', 'active');
            }
        });
    }


    // Get all elements with the "buyButton" class
    var buyButtons = document.querySelectorAll('.errorBtn');

    // Loop through each button and attach the click event listener
    buyButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            // Prevent the default form submission behavior
            event.preventDefault();

            // Add your purchase logic here
            alert('Error: The conditions for purchasing this product are not met.');
        });
    });
</script>

@php
$csrf_token = csrf_token();
@endphp
<script>
    document.querySelectorAll('.buyButton').forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            // Get the plan ID from the data attribute
            var planId = event.target.getAttribute('data-plan-id');

            // Make an asynchronous request to check level3_referral_id and product price
            fetch("{{ route('checkProductValidity') }}?plan_id=" + planId, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ $csrf_token }}',
                    },
                })
                .then(response => response.json())
                .then(data => {
                    if (data.isProductValid) {
                        // If both conditions are met, allow the user to proceed to the purchase
                        window.location.href = event.target.href;
                    } else {
                        // If the conditions are not met, show a message and prevent the purchase
                        alert('The product is not valid for purchase, Please You must have at least 10 Referral.');
                    }
                })
                .catch(error => {
                    console.error('Error checking product validity:', error);
                });
        });
    });
</script>

</div>

<script>
    feather.replace()
</script>

<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

@endsection
