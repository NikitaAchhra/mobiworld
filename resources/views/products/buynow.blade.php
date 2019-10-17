@extends('layouts.app')
@section('content')
@include('inc.navbar')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-md-4">
                <img  src="<?php echo $product->image?>" style="height:450px;">
        </div>
        <div class="col-md-auto">
            <h1>{{$product->product_name}}</h1>
            <h3>Price  ₹ {{$product->price}}/-</h3>
            <h5>Features</h5>
            <p>{{$product->description}}</p>
            <iframe width="560" height="315" src="{{$product->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

</div>
@endsection
