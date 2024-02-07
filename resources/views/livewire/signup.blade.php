@extends('layouts.app')

@section('title', 'Agcotechnology | CREATE ACCOUNT')

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

    <div class="flex flex-col pb-8 items-center min-h-screen h-screen ">



        <div class="px-3 w-full pb-8">
            <div class="w-full mx-auto max-w-sm  pt-10 pb-6 flex flex-col justify-center items-center">
                <div class="rounded-full bg-white w-auto">
                    <img src="{{ asset('static/banner.png') }}" alt="logo" class="mx-auto rounded-full" width="200">
                </div>
                <h1 class="text-left text-gradient-100 relative text-3xl font-extrabold w-full my-6 px-2">Create Account</h1>


                <livewire:storeuser />

                <div class="text-center justify-center flex w-full text-sm text-gray-400">



                    <p>Already have an account? <a href="{{ url('/') }}" class="text-gradient-100 font-semibold">Log
                            In</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <style>
        .btn {
            color: #fff;
            display: block;
            text-align: center;
            margin: auto;
            margin-top: 40px;
            margin-bottom: 40px;
            box-shadow: 1px 6px 10px 2px #9cb9e0;
        }
    </style>

    <script>
        feather.replace()
    </script>




@endsection
