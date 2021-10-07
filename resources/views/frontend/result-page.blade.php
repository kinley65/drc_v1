@extends('layouts.front')

@section('content')
<!---------------Navigation ends here --------------------->
<div class="bd-example"id="main-home-style">
 <div class="main-home">
   <div class="container"style="padding:200px;">
     <div class="row">
        @forelse ($products as $product)
        <h1>{{ $product->name}}</h1>
         @empty  
         <p class="text-center">
            No request found for search <strong>{{ request()->query('search') }}</strong>  
        </p> 
        @endforelse
        {{ $products->appends(['search' => request()->query('search')])->links() }}
     </div>
   </div>
 </div>
</div>

@endsection