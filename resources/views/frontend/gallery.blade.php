@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Gallery</h1>
       <p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/gallery') }}">Gallery</a></p>
      </div>
    </div>
   </div>
   <div class="bg-download">
       <div>
<div class="col-lg-12 col-md-12 col-12 pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <div class="grid">
                <div class="grid-item entry">
                    <a href="assets/img/service/1.jpg" data-title="IMAGE TITLE 1" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item grid-item--width2 entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 2" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 3" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 4" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 5" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 6" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item grid-item--width2 entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 7" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 8" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 9" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
                <div class="grid-item entry">
                    <a href="{{ asset('img/blog/1.jpg') }}" data-title="IMAGE TITLE 10" class="venobox info vbox-item" data-gall="galma"><img class="img-fluid" src="{{ asset('img/blog/1.jpg') }}" alt=""></a>
                </div>
                <!-- end single item -->
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <a href="#" class="btn-style btn-filled btn-filled-2 d-block text-center">Load More...</a>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
       </div>
   </div>
@endsection