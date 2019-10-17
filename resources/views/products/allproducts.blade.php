@extends('layouts.app')

@section('content')
<div class="container">  
        <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Products Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead> 
        @foreach($products as $product)        
    
      <tbody>
        <tr>
          <td><?php echo $product->product_name ?></td>
         <td><a href="/products/{{$product->id}}/edit"><button class="btn btn-primary">Update</button></a></td>
          <td><a href="/products/{{$product->id}}"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
          </tbody>
          @endforeach
    </table>
   
  </div>
  