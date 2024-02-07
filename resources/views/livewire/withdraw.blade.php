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

        <div class=" text-white px-2 py-2" style="border-bottom-left-radius: 50px;  background-color:#4bb5be;">
            <nav class="px-4 flex justify-between items-center  h-full w-full">
                <p></p>
                <p class="text-xl font-semibold">Withdraw</p>
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

            <section class="px-5">
                <div class="py-6">
                    <div class="text-blue-700 text-sm font-semibold flex space-x-2 items-center">
                        <p class="text-white bg-gradient-100 rounded-full w-6 h-6 flex justify-center items-center text-xs">
                            1</p>
                        <p class="font-extrabold text-sm tracking-tight">Bind Bank Account</p>
                    </div>
                    <div class="px-2 mt-4">
                        <div
                            class="bg-white shadow-xl rounded-xl px-4 py-3 flex justify-center items-center flex-col space-y-1">
                            @if ($user->account_number == null)
                                <h1 class="text-xl font-semibold">No Card!</h1>
                                <p class="text-xs">Please bind your bank account first</p>
                                <a href="/banking"><img src="{{ asset('static/card.png') }}" alt=""
                                        width="50"></a>
                            @else
                                <h1 class="text-xl font-semibold">{{ $user->account_name }}</h1>
                                <p class="text-xs">{{ $user->account_number }}</p>
                                <p>{{ $user->bank_name }}</p>
                            @endif


                        </div>
                    </div>
                </div>
                <div class="py-6">
                    <div class="text-blue-700 text-sm flex space-x-2 items-center">
                        <p class="text-white bg-gradient-100 rounded-full w-6 h-6 flex justify-center items-center text-xs">
                            2</p>
                        <div class="w-full">
                            <p class="font-extrabold text-sm tracking-tight">Withdraw</p>
                            <div class="flex justify-between text-xs text-blue-700 w-full">
                                <p>Min Withdrawal: &#8358;1000</p>
                                <p>Fees: 5%</p>
                            </div>
                        </div>
                    </div>
                    <div class="px-2 mt-4">
                        <div
                            class="bg-white shadow-xl rounded-xl px-4 py-3 flex justify-center items-center flex-col space-y-1">


                            <livewire:withdrawstore />

                        </div>
                    </div>
                </div>
                <div class="py-6">
                    <div class="text-blue-700 text-sm font-semibold flex space-x-2 items-center">
                        <p class="text-white bg-gradient-100 rounded-full w-6 h-6 flex justify-center items-center text-xs">
                            3</p>
                        <p class="font-extrabold text-sm tracking-tight">Withdrawal Records</p>
                    </div>
                    <div class="px-2 mt-4">
                        <div
                            class="bg-white shadow-xl rounded-xl px-4 py-3 flex justify-center items-center flex-col space-y-1">
                            <div
                                class="divide-x divide-gray-700 flex py-3 text-center font-bold text-sm text-blue-700 w-full">
                                <div class="w-1/3">Time</div>
                                <div class="w-1/3">Amount</div>
                                <div class="w-1/3">Status</div>
                            </div>

                            @foreach ($withdrawal as $item)
                                <div
                                    class="divide-x divide-gray-700 flex py-3 text-center font-bold text-sm text-blue-700 w-full">
                                    <div class="w-1/3">{{ $item->created_at->format('Y/M/d h:ia') }}</div>
                                    <div class="w-1/3">₦{{ number_format($item->amount) }}</div>
                                    <div class="w-1/3">
                                        @if ($item->status == 'success')
                                            Paid Out
                                        @elseif($item->status == 'pending')
                                            Pending
                                        @elseif($item->status == 'failed')
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
        <footer class="bg-white h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl"
            style="border-top-left-radius: 30px; border-top-right-radius: 30px; background-color:#5EE3EE;">
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
                    class="flex space-y-1 w-full flex-col items-center  px-4 h-full justify-center tracking-normal text-gradient-100 font-semibold">

                    <img src="{{ asset('static/money_blue.png') }}" alt="" width="30">

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
