@extends('layouts.app')

@section('content')
@include('inc.navbarp')
<style>

</style>

<div class="container-fluid">
    <div class="card-deck">
               @foreach($products as $product)
          
        <div class="col-sm-3 my-4 mx-3">
                <div class="card-columns-fluid">
                    <div class="card  bg-light" style = "width: 22rem; " >
                            <div class="card-body">
                                  
                                    <img class="card-img-top" src="<?php echo $product->image?>" style="height:450px;">
                                    <h5 class="card-title"><b><?php echo $product->product_name ?></b></h5>
                                    <p class="card-text"><?php echo $product->description ?></p>
                                    <h5 class="card-text"><?php echo "₹".$product->price."/-"
                                     ?></h5>
                                 
                                    
                                    <a href="/products/buynow/{{$product->id    }}" class="btn btn-primary stretched-link">Buy Now</a>
                               
                                   
                
                            </div>
                    </div>
                </div>
        </div>
            
           
        @endforeach
    </div>
    
   
</div>
@endsection
