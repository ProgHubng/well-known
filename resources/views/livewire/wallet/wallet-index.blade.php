@extends('layouts.app')


@section('title', 'TwF Ford DASHBOARD')

@livewire('wallet-index')
@section('content')
<div class="card mt-4">
    <div class="card-header rounded-full">

    </div>
    <div class="card-body">
        <h5 class="card-title">Recent Transactions</h5>

        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if($transactions->isNotEmpty())
                {{-- Display transactions --}}
                @foreach($transactions as $transaction)
                {{-- Your transaction display logic --}}
                @endforeach
                @else
                {{-- Display a message when there are no transactions --}}
                <p>No transactions available.</p>
                @endif

            </tbody>
        </table>
    </div>
</div>


@endsection
