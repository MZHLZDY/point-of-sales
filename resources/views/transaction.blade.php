@extends('layout')
@section('title', 'Transaction')
@section('content-title', 'Transaction')
@section('content')
<div class="col-md-10">
    
<table class="table table-striped">
    <thead>
        <tr>
            <th class="th">No.</th>
            <th class="th">User ID</th>
            <th class="th">Date</th>
            <th class="th">Paytotal</th>
        </tr>
    </thead>
    @forelse($transactions as $transaction)
    <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $transaction->user->id }}</td> <!--Menampilkan Foreign key User-ID-->
            <td>{{ $transaction->date}}</td>
            <td>Rp. {{ $transaction->pay_total }}</td>
        </tr>
    </tbody>
    @empty
    @endforelse
    
</table>
</div>
</div class="col-md-4">

@endsection