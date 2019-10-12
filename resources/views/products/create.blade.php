@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data',]) !!}
        @csrf
        <div class="form-group">
            <label for="name">Product Name:</label> <span style="color:red">*</span>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label> <span style="color:red">*</span>
            <input type="text" name="address" class="form-control" id="address" required>
        </div>
        <div class="form-group">
            <label for="city">City:</label> <span style="color:red">*</span>
            <input type="text" name="city" class="form-control" id="city" required>
        </div>
        <div class="form-group">
            <label for="state">State:</label> <span style="color:red">*</span>
            <input type="text" name="state" class="form-control" id="state" required>
        </div>
        <div class="form-group">
            <label for="pincode">Pincode:</label> <span style="color:red">*</span>
            <input type="text" name="pincode" class="form-control" id="pincode" required>
        </div>
        <div class="form-group">
            <label for="contactno">Contact number:</label> <span style="color:red">*</span>
            <input type="number" name="contactno" class="form-control" id="contactno" required>
        </div>
        {{-- <div class="form-group">
            <label for="profile_pic">Profile pic:</label> 
            <input type="file" name="profile_pic" class="form-control-file" id="profile_pic">
        </div> --}}
    
        <div class="form-group">
            <label class="form-check-label">Gender:</label><span style="color:red">*</span>&nbsp;&nbsp;
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="Female"  name="gender">Female
                </label>
            </div>
                <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" value="Male" name="gender">Male
                </label>
            </div>
            <div class="form-check-inline disabled">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" value="Other" name="gender">Other
            </label>
            </div>
        </div>
    
        <div class="form-group">
            <label for="dateofbirth">date of Birth:</label> 
            <input type="date" name="dateofbirth" class="form-control" id="dateofbirth">
        </div>
    
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
    
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
    
        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
    
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
     
        </div>
    
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    
    {!! Form::close() !!}
</div>
@endsection
