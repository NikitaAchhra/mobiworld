@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Add Review</div>
        
                        <div class="card-body">
    {!! Form::open(['action' => 'ReviewController@create', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
        @csrf
        <div class="form-group">
            <label for="review">Review:</label> <span style="color:red">*</span>
            <textarea name="review" class="form-control" id="review" required></textarea>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Post') }}
                </button>
            </div>
        </div>
                        </div></div></div></div></div>
    {!! Form::close() !!}
</div>
</div>
@endsection
