@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Search Result</h1>
       <p><a href="{{ url('/') }}">Showing search result for <strong>{{ request()->query('search') }}</strong></a></p>
      </div>
    </div>
   </div>
<div class="bd-example">
 <div class="main-home">
   <div class="container">
     <div class="row">
        @forelse ($products as $product)
        <div class="col-12 mt-3 mb-3" id="search-results-all">
        <h1 class="pt-2">{{ $product->name}}</h1>
        <p><span>{{ $product->created_at }}</span> <br>
        {{ $product->description }}</p>
        
      </div>
         @empty 
         <div class="text-center">
         <p>
            No request found for search <strong>{{ request()->query('search') }}</strong>  
        </p> 
      </div> 
        @endforelse
        {{ $products->appends(['search' => request()->query('search')])->links() }}
     </div>
   </div>
 </div>
</div>

@endsection