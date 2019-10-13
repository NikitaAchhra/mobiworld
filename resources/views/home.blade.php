@extends('layouts.app')

@section('content')
    @include('inc.navbar')
    @include('inc.carousel')
<style>
    
.card > img {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.card:hover img {
  opacity: 0.3;
}
.text {
 border:black solid 5px;
 color:  black;
 font-size: 25px;
 padding: 16px 32px;

}
.middle {
  transition: .5s ease;
  opacity: 1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}


</style>
<div class="container">
        <div style="text-align:center" >
            <hr><h1>CATEGORIES</h1><hr>
        </div>
</div>
<!-- mobiles-->

<div class="container">
    <div class="card-deck">
        
        <div class="card" >
          <a href="/feature" class="stretched-link"></a>         
          <img src="Images\featurephone1.jpg"  class="rounded" alt="featurePhones" width="350px" height="200px" >
            <div class="middle">
           <div class="text"><strong> Feature Phones </strong></div>
        
          </div></div>

        
        <div class="card">
            <a href="/feature" class="stretched-link"></a>
            <img src="Images\iphone.jpg" class="rounded" alt="iphone" width="350px" height="200px">
            <div class="middle">
                    <div class="text"><strong>Smart Phone
                         </strong></div>
            </div></div>
             
              
            <div class="card">
                <a href="/feature" class="stretched-link"></a>
                  <img src="Images\tablet.jpg" class="rounded" alt="" width="350px" height="200px"> 
              
                  <div class="middle">
              <div class="text"><strong> Tablet Phones </strong></div>
  </div>
        </div> 
    </div>   
</div><br><br>
<div class="jumbotron">
        <h1 class="display-4">Welcome to MobiWorld!</h1>
        <p class="lead">We offered feature phones,smart phones and tablets of various companies like Samsung,Apple,Huawei,Nokia,Sony,HTC,Motorola,Lenovo.</p>
        <hr class="my-4">
        <p>So stay tuned with us for exclusive prodcuts.The MobiWorld-One stop destination for all types of mobiles.</p>
         <button class="btn btn-dark">About Us</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary">Contact Us</button>

      </div>     
@endsection
