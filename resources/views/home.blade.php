@extends('layout.template')
@section('content')

<style type="text/css">
  .purple{
    background-color: #538ae2;
  }
  .center{
    padding-left: 250px;
  }
  input {
    background-color: transparent;
  border: none;
  border-bottom: 1px dashed #9e9e9e;
  border-radius: 0;
  outline: none;
  height: 3rem;
  width: 100%;
  font-size: 16px;
  margin: 0 0 8px 0;
  padding: 0;
  -webkit-box-shadow: none;
          box-shadow: none;
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
  -webkit-transition: border .3s, -webkit-box-shadow .3s;
  transition: border .3s, -webkit-box-shadow .3s;
  transition: box-shadow .3s, border .3s;
  transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
  }
    .progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 25%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: green;
  }
  .progressbar li.active:before {
      border-color: #55b776;
  }
  .progressbar li.active + li:after {
      background-color: #55b776;
  }
  
</style>
  <div class="content-wrapper" >
    <div class="section">
      <!--  <div class="row">
          <div class="col-sm-6 center">
        <div class="ui ordered steps">
          <div class="completed step">
            <div class="content">
              <div class="title">Shipping</div>
              <div class="description">Choose your shipping options</div>
            </div>
          </div>
          <div class="completed step">
            <div class="content">
              <div class="title">Billing</div>
              <div class="description">Enter billing information</div>
            </div>
          </div>
          <div class="active step">
            <div class="content">
              <div class="title">Confirm Order</div>
              <div class="description">Verify order details</div>
            </div>
          </div>
          <div class=" step">
            <div class="content">
              <div class="title">JNT Express</div>
              <div class="description">Send Order</div>
            </div>
          </div>
        </div>
          </div> -->
  
      <ul class="progressbar">
          <li class="active">login</li>
          <li>choose interest</li>
          <li>add friends</li>
          <li>View map</li>
      </ul>
        <!-- </div> -->
  
   <hr>
  <div class="row" style="padding-left: 15px; padding-top: 15px">
    <div class="col-sm-4">
      <h2>Rincian Project (Update)</h2>
      <div></div>
      <input type="" name="" value="{{ $tampilkan->nama }}">
      <input type="" name="" value="{{ $tampilkan->email }}">
      <input type="" name="" value="{{ $tampilkan->deal}}">
      <button class="btn btn-md btn-success">SELESAI</button>  
      <button class="btn btn-md btn-default"><span class="glyphicon glyphicon-circle-arrow-left"></span><a href="{{url('dashboard')}}"> Back To Dashboard</a></button>       
    </div>
  </div>
</div>
  </div>

@endsection
<script>
    (function($){
      $(window).on("load",function(){
        $(".mcs-horizontal-example").mCustomScrollbar({
          axis:"x",
          theme:"dark-3"
        });
      });
    })(jQuery);
  </script>