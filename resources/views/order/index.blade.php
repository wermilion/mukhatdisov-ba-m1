@extends('template')

@section('content')
    @foreach($orders as $order)
        <div>
            <p>Партнёр: {{ $order->partner->name }}</p>
        </div>
    @endforeach
@endsection
