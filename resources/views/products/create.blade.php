@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add Products</div>
        
                        <div class="card-body">
    {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
        @csrf
        <div class="form-group">
            <label for="name">Product Name:</label> <span style="color:red">*</span>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group">
                <label for="type">Product Type:</label> <span style="color:red">*</span>
                       <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="1"  name="type">Feature Phones
                            </label>
                        </div>
                            <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="2" name="type">Mobile Phones
                            </label>
                        </div>
                        <div class="form-check-inline disabled">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value="3" name="type">Tablets
                        </label>
                        </div>
                   
        <div class="form-group">
            <label for="company">Company:</label> <span style="color:red">*</span>
            <input type="text" name="company" class="form-control" id="company" required>
        </div>
        <div class="form-group">
            <label for="model">Model:</label> <span style="color:red">*</span>
            <input type="text" name="model" class="form-control" id="model" required>
        </div>
        <div class="form-group">
            <label for="Lauch_date">Lauch_date:</label> <span style="color:red">*</span>
            <input type="date" name="Lauch_date" class="form-control" id="Lauch_date" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label> <span style="color:red">*</span>
            <input type="number" name="price" class="form-control" id="price" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label> <span style="color:red">*</span>
            <textarea name="description" class="form-control" id="contactno" required></textarea>
        </div>
        {{-- <div class="form-group">
            <label for="profile_pic">Profile pic:</label> 
            <input type="file" name="profile_pic" class="form-control-file" id="profile_pic">
        </div> --}}
    
    
        <div class="form-group">
            <label for="image">Image_url:</label> 
            <input type="text" name="image" class="form-control" id="image">
        </div>
    
        <div class="form-group">
                <label for="video">Video_url:</label> 
                <input type="text" name="video" class="form-control" id="video">
            </div>
        
    
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Add') }}
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
