@extends('master')

@section('content')

<div class="container">
<div class="row">

<!-- Left Filter -->
<div class="col-md-3">
<h4>Filter</h4>
</div>

<!-- Product Results -->
<div class="col-md-9">

<h4 class="mb-4">Result For Products</h4>

@if(!empty($products) && count($products) > 0)

@foreach ($products as $item)

<div class="card mb-3 p-3">
<div class="row align-items-center">

<div class="col-md-4 text-center">
<img src="{{ asset($item->gallery) }}"
class="img-fluid"
style="height:200px; object-fit:contain;">
</div>

<div class="col-md-8">

<a href="{{ url('detail/'.$item->id) }}">
<h5>{{ $item->name }}</h5>
</a>

<p>{{ $item->description }}</p>

</div>

</div>
</div>

@endforeach

@else

<h5>No Products Found</h5>

@endif

</div>

</div>
</div>

@endsection