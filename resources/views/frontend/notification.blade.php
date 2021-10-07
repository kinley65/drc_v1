@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Notification</h1>
        <form action="{{ url('/notification') }}" method="get"class="d-flex flex-wrap align-items-center justify-content-end" >
          <div class="search2">
          <input type="text" class="searchTerm2" name="notification-search" placeholder="Search DRC's Website">
            <button type="submit" class="searchButton2">
              <object data="img/icons/magnifying-glass.svg"class="object-search mt-1"> </object>
          </button>
                  </div>
          </form>
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