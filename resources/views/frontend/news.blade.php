@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
        <div class="container" class="text-center">
          <h1 class="main-home-he">News Detail</h1>
          <p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/news') }}">News detail</a></p>
          {{-- <form action="{{ url('/notification') }}" method="get"class="d-flex flex-wrap align-items-center justify-content-end" >
            <div class="search2">
            <input type="text" class="searchTerm2" name="notification-search" placeholder="Search Notification................"value="{{ request()->Query('notification-search') }}">
            <object data="{{ asset('img/icons/magnifying-glass.svg') }}"class="object-search mt-1"> </object> 
            <input type="submit" class="searchButton2" value="Search">
                    </div>
            </form> --}}
        </div>
      </div>
  
     <section class="main-content">
      <div id="notification-bg">
          <div class="container">
              <div class="row">
                 
              </div>
          </div>
      </div>
     </section>
</div>
@endsection