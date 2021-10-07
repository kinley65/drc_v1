@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Notification</h1>
      </div>
    </div>
   </div>
   <div id="about-bg">
   <div class="container">
     <div class="row">
         @foreach ($notification as $row )
         <div class="col-lg-3">
            <h4>{{ $row->title }}</h4>
            <p>{{ $row->description }}</p>
        </div>  
         @endforeach
        
</div>
   </div>
   </div>
@endsection