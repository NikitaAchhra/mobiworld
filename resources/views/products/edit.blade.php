@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">update Products</div>
        
                        <div class="card-body">
    {!! Form::open(['action' =>['ProductController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
        @csrf
        <div class="form-group">
            <label for="name">Product Name:</label> <span style="color:red">*</span>
        <input type="text" name="name" class="form-control" value="{{$product->product_name}}" id="name" required>
        </div>
        <div class="form-group">
                <label for="type">Product Type:</label> <span style="color:red">*</span>
                       <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1" <?php echo ($product->product_type == 1)? 'checked':'' ?>  name="type">Feature Phones
                            </label>
                        </div>
                            <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" <?php echo ($product->product_type == 2)? 'checked':'' ?> name="type">Smart Phones
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="3" <?php echo ($product->product_type == 3)? 'checked':'' ?> name="type">Tablets
                        </label>
                        </div>
                   
        <div class="form-group">
            <label for="company">Company:</label> <span style="color:red">*</span>
            <input type="text" name="company" class="form-control" value="{{$product->company}}" id="company" required>
        </div>
        <div class="form-group">
            <label for="model">Model:</label> <span style="color:red">*</span>
            <input type="text" name="model" class="form-control" value="{{$product->Model}}" id="model" required>
        </div>
        <div class="form-group">
            <label for="Lauch_date">Lauch_date:</label> <span style="color:red">*</span>
            <input type="date" name="Lauch_date" class="form-control" value="<?php echo date('m-d-y',strtotime($product->Launch_date)) ?>" id="Lauch_date" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label> <span style="color:red">*</span>
            <input type="number" name="price" class="form-control" value="{{$product->price}}" id="price" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label> <span style="color:red">*</span>
            <textarea name="description" class="form-control" id="contactno" required>{{$product->description}}</textarea>
        </div>
        {{-- <div class="form-group">
            <label for="profile_pic">Profile pic:</label> 
            <input type="file" name="profile_pic" class="form-control-file" id="profile_pic">
        </div> --}}
    
    
        <div class="form-group">
            <label for="image">Image_url:</label> 
            <input type="text" name="image" value="{{$product->image}}" class="form-control" id="image">
        </div>
    
        <div class="form-group">
                <label for="video">Video_url:</label> 
                <input type="text" name="video" value="{{$product->video_url}}" class="form-control" id="video">
            </div>
        
            {{Form::hidden('_method','PUT')}}
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                </button>
            </div>
        </div>
        </div>
                        </div>
                    </div>
                </div></div></div>
            
    {!! Form::close() !!}
</div>
</div>
@endsection
