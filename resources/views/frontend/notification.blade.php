@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Notification</h1>
		<p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/notification') }}">Notification</a></p>
        {{-- <form action="{{ url('/notification') }}" method="get"class="d-flex flex-wrap align-items-center justify-content-end" >
          <div class="search2">
          <input type="text" class="searchTerm2" name="notification-search" placeholder="Search Notification................"value="{{ request()->Query('notification-search') }}">
          <object data="img/icons/magnifying-glass.svg"class="object-search mt-1"> </object> 
          <input type="submit" class="searchButton2" value="Search">
                  </div>
          </form> --}}
      </div>
    </div>

   <section class="main-content">
    <div id="notification-bg">
		<div class="container">
			<div class="row">
        @forelse ($notification as $row )
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="card-noti card bg-white p-3 mb-4 shadow" id="card-bor">
						<div class="d-flex justify-content-between mb-4">
							<div class="user-info">
								<div class="user-info__img">
                  <a href="{{ URL::to('notification_detail/' . $row->id) }}">
									<img src="img/icons/Rectangle 128.svg" alt="User Img">
                </a>
								</div>
								<div class="user-info__basic">
									<h5 class="mb-0">{{ $row->title }}</h5>
									<p class="text-muted mb-0"></p>
								</div>
							</div>
							<div class="dropdown open">
								<a href="#!" class="px-1" id="triggerId1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<object data="img/icons/Group 338.svg" type=""></object>
								</a>
							</div>
						</div>
						<h6 class="mb-0">{{ $row->description }}</h6>
						{{-- <a href="#!"><small>Contact</small></a> --}}
						<div class="d-flex justify-content-between mt-2">
							<div>
								<h5 class="mb-0">
									<small class="ml-1">{{ $row->date}}</small>
								</h5>
							</div>
							{{-- <span class="text-success font-weight-bold">Consult</span> --}}
						</div>
					</div>
				</div>
        @empty  
        <p class="text-center">
           No request found for search <strong>{{ request()->query('notification-search') }}</strong>  
       </p> 
        @endforelse
        {{ $notification->appends(['notification-search' => request()->query('notification-search')])->links() }} 
			</div>
			</div>
			</div>
	</section>
</div>
@endsection