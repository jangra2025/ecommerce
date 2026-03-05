@extends('master')

@section('content')
<div class="container-fluid p-0 mt-3">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="container mt-3">
                <h2>Order List</h2>

                @if(isset($data) && count($data) > 0)
                    <div class="searching-wrapper">
                        @foreach ($data as $item)
                            <div class="row mb-3 p-2 border rounded">
                                <div class="col-sm-4">
                                    <a href="{{ url('details/'.$item->id) }}" class="searching-item text-decoration-none text-dark">
                                        <img src="{{ $item->gallery }}" class="trending-img img-fluid">
                                    </a>
                                </div>
                                <div class="col-sm-8">
                                    <a href="{{ url('details/'.$item->id) }}" class="trending-item text-decoration-none text-dark">
                                        <div class="searching-title">
                                            <h4>Name : {{ $item->name }}</h4>
                                            <p><strong>Delivery status:</strong> {{ $item->status }}</p>
                                            <p><strong>Payment status:</strong> {{ $item->payment_status }}</p>
                                            <p><strong>Payment method:</strong> {{ $item->payment_method }}</p>
                                            <p><strong>Delivery address:</strong> {{ $item->address }}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h5 class="text-center mt-3">You have no orders yet.</h5>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection