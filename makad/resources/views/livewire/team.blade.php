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

    <header class="h-20 fixed top-0 left-0 right-0  z-30 py-4 bg-gray-100">
    <nav class="px-4 flex justify-between items-center  h-full w-full">
        <p></p>
        <img src="static/banner.png" alt="" width="150" class="">
        <a href="/invite"><img src="static/ref_blue.png" alt="" width="30"></a>
    </nav>
</header>

    <main class="pb-20 min-h-full">

<section class="py-5 px-6">
    <h1 class="text-xl font-medium text-blue-700">My Team</h1>

</section>

@php
    $level1 = App\Models\User::where('level1_referral_id', auth()->user()->id)->count();
    $level2 = App\Models\User::where('level2_referral_id', auth()->user()->id)->count();
    $level3 = App\Models\User::where('level3_referral_id', auth()->user()->id)->count();
@endphp

<section class="px-4 py-5">
    <div class="w-full mb-6 overflow-hidden">
        <div class="w-full overflow-x-auto bg-cyan-100 rounded-xl">
            <table class="w-full table-auto bg-cyan-100 rounded-xl">
                <thead>
                    <tr class="text-sm text-left text-blue-700">
                        <th class="px-4 py-3"></th>
                        <th class="px-4 py-3">Members</th>

                        <th class="px-4 py-3">Rebate</th>
                    </tr>
                </thead>
                <tbody class="text-blue-700 text-sm">
                    <tr class="">
                        <td class="px-4 py-3"><p>Level 1</p> </td>
                        <td class="px-4 py-3">{{ $level1 }}</td>

                        <td class="px-4 py-3">10%</td>
                        </tr>
                    <tr class="">
                        <td class="px-4 py-3"><p>Level 2</p> </td>
                        <td class="px-4 py-3">{{ $level2 }}</td>

                        <td class="px-4 py-3">1%</td>

                    </tr>
                    <tr class="">
                        <td class="px-4 py-3"><p>Level 3</p> </td>
                        <td class="px-4 py-3">{{ $level3 }}</td>

                        <td class="px-4 py-3">1%</td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>


    </main>
    <footer class="bg-white h-20 w-full fixed bottom-0 left-0 right-0 shadow-xl"
        style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
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

