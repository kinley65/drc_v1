<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>DRC's</title>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="frontend_css/bootstrap.css">
<link rel="stylesheet" href="frontend_css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="frontend_css/jquery.bxslider.css">
<link rel="stylesheet" href="frontend_css/flaticon.css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css">
</head>
<body>
  <div id="bg-wrapper" style="background: url('img/css_image/Background.jpg');width:100%;max-width:100%;background-position: center;background-size: cover;background-attachment: fixed;">
  <div id="inside">
    <div id="feedback">
      <div id="feedback-form" style='display:none;' class="col-xs-9 col-md-9 panel panel-default">
       <div class="text-center">
         <h2 class="mb-4">FEEDBACK</h2>
       </div>
        <form method="POST" action="/feedback" class="form panel-body" role="form">
          <div class="form-group">
            <input class="form-control" name="name" autofocus placeholder="Your Name" type="text" />
          </div>
          <div class="form-group">
            <input class="form-control" name="email" autofocus placeholder="Your e-mail" type="email" />
          </div>
          <div class="form-group">
            <input class="form-control" name="subject" autofocus placeholder="Subject" type="text" />
          </div>
          <div class="form-group">
            <textarea class="form-control" name="body" required placeholder="Please write your feedback here..." rows="5"></textarea>
          </div>
          <button class="btn btn-primary pull-left" type="submit">Send</button>
        </form>
      </div>
      <div id="feedback-tab">Feedback</div>
    </div>
    <div class=""id="fixed-top">
<div class="top-bar">
  <div class="container">
    <div class="row py-3">
      <div class="col-lg-6 col-md-2 col-sm-2 col-2 top-links d-flex align-items-left justify-content-left rr"> <a href="#" class="d-flex align-items-center ml-3"><svg id="_003---Call" data-name="003---Call" class="mr-2" xmlns="http://www.w3.org/2000/svg" width="13.586" height="20.433" viewBox="0 0 18.586 20.433">
        <defs>
          <style>
            .cls-1 {
              fill: #fff;
            }
          </style>
        </defs>
        <path id="Shape" class="cls-1" d="M8.694,12.012A8.581,8.581,0,0,1,6.429,7.33a.744.744,0,0,1,.183-.586L8.048,5.166a.758.758,0,0,0,.09-.872L5.852.391a.61.61,0,0,0-.83-.257l-3.669,1.9a.717.717,0,0,0-.352.7,20.38,20.38,0,0,0,5.4,11.8c4.413,4.852,8.9,5.727,10.73,5.939a.628.628,0,0,0,.637-.388L19.5,16.049a.745.745,0,0,0-.232-.912l-3.549-2.513a.6.6,0,0,0-.793.1L13.486,14.3a.6.6,0,0,1-.533.2A7.27,7.27,0,0,1,8.694,12.012Z" transform="translate(-0.997 -0.042)"/>
        <path id="Shape-2" data-name="Shape" class="cls-1" d="M33.633,16.226a.593.593,0,0,1-.593-.593,4.452,4.452,0,0,0-4.447-4.447.593.593,0,1,1,0-1.186,5.639,5.639,0,0,1,5.633,5.633A.593.593,0,0,1,33.633,16.226Z" transform="translate(-18.98 -6.16)"/>
        <path id="Shape-3" data-name="Shape" class="cls-1" d="M36.6,9.191A.593.593,0,0,1,36,8.6a7.42,7.42,0,0,0-7.412-7.412.593.593,0,1,1,0-1.186,8.607,8.607,0,0,1,8.6,8.6.593.593,0,0,1-.593.593Z" transform="translate(-18.605)"/>
      </svg> {{ trans('panel.phone_number') }}</a> </div>
      <div class="col-lg-6 col-md-10 col-sm-10 col-12 top-links d-flex align-items-center justify-content-end"> <a href="{{ url('/notification') }}" class="mr-2">Notification</a> | <a href="{{ url('/whoiswho') }}" class="mr-2 ml-2">{{ trans('panel.who') }}</a> | <a href="{{ url('/contactus') }}" class="mr-2 ml-2">{{ trans('panel.contact') }}</a> | <a href="{{ url('/faqs') }}" class="mr-2 ml-2">{{ trans('panel.faq') }}</a> | <a href="#" class="ml-2"><img src="img/icons/language.svg" alt="language switch"style="margin-top:-5px;">
        <div id="dropdown-sec2" >
          <a onclick="myFunction2()" class="dropbtn2" x-data="{show: false}" @click.away="show = false">&nbsp;{{strtoupper(App::getLocale())}}<img src="img/icons/dropdown.svg" alt="language switch"style="margin-top:5px;"class="ml-1"></a>
          <div id="myDropdown2" class="dropdown-content2"x-show="show">
            <a href="#"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object> English</a>
            <a href="#"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object> Dzongkha</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <img src="img/Headlines1.svg" alt=""style="max-width:100%;">

<!---------------Top Bar section ends here --------------------->

<nav class="navbar navbar-expand-lg">
  <div class="container"> 
    <!-- <a class="navbar-brand logo" href="#"><img src="img/logo.png" alt="Hair Salon"></a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"> <i class="lni-menu"></i> </span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active"> <a class="nav-link" href="{{ url('/') }}"><img src="img/icons/home.svg" alt=""><span class="sr-only">(current)</span></a> </li>
        <li class="nav-item pt-3 pl-lg-4 pl-0"> <a class="nav-link" href="{{ url('/aboutus') }}"> ABOUT US </a> 
        </li>
        <li class="nav-item dropdown pt-3"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ANNOUNCEMENT <img src="img/icons/dropdown.svg" alt="language switch"class="ml-1"></a> 
          <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu dropdown-menu-center animate slideIn" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="{{ url('/vacancy') }}">Vacancy</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('/tender') }}">Tender</a>
        </li>
        <li class="nav-item dropdown pt-3"> <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> PUBLICATION <img src="img/icons/dropdown.svg" alt="language switch"style="margin-top:5px;"class="ml-1"></a> 
          <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu dropdown-menu-center animate slideIn" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">Appeals</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Bhutan Trade Statistics</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">National Revenue Reports</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Performance Indicators</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Guidelines</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Manuals</a> </div>
        </li>
        <li class="nav-item dropdown pt-3"> <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ACTS & RULES <img src="img/icons/dropdown.svg" alt="language switch"style="margin-top:5px;"class="ml-1"></a> 
          <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
          <div class="dropdown-menu dropdown-menu-center animate slideIn" aria-labelledby="navbarDropdown"> <a class="dropdown-item" href="#">Acts</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Rules</a> </div>
        </li>
        <li class="nav-item dropdown pt-3"> <a class="nav-link" href="#" > DOWNLOADS </a> 
        </li>
      </ul>
</div>
        
            <form action="{{ url('/results') }}" method="get"class="d-flex flex-wrap align-items-center justify-content-end" >
                <div class="search">
                <input type="text" class="searchTerm" name="search" placeholder="Search DRC's Website">
          <button type="submit" class="searchButton">
            <object data="img/icons/magnifying-glass.svg"class="object-search mt-1"> </object>
         </button>
                </div>
        </form>
 
  </div>
</nav>
</div>

@yield('content')


<footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row mb-5" id="border-bottom">
      <!-- <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <ul class="ftco-footer-social list-unstyled mt-5">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div> -->
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Address</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="mr-2"><object data="img/icons/location (1).svg" type=""></object></span><span class="text"></span> Lower Chubachu, Thimphu, Bhutan</a></li>
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/fax (1).svg" type=""></object></span>Fax: +975-02-323608</a></li>
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/old-typical-phone.svg" type=""></object></span>Pabx: +975-02-322319 / 333509</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Follow Us</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/Group 52.svg" type=""></object></span>drcbhutan</a></li>
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/Group 51.svg" type=""></object></span>#drcbhutan</a></li>
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/Group 53.svg" type=""></object></span>drcbhutan</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Subscribe</h2>
          <div class="subscribe">
          <form method="POST" action="/feedback" class="form panel-body" role="form">
            <div class="form-group">
              <input class="form-control" name="name" placeholder="Your Name" type="text" />
            </div>
            <div class="form-group">
              <input class="form-control" name="email" placeholder="Your e-mail" type="email" />
            </div>
            <div class="text-center">
            <button class="btn btn-subscribe text-center" type="submit">Subscribe</button>
          </div>
          </form>
        </div>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">External Links</h2>
          <ul class="list-unstyled">
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object></span>Ministry of Finance</a></li>
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object></span>Ministry of Economic Affairs</a></li>
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object></span>Bhutan Narcotics Control Authority</a></li>
            <li><a href="#"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object></span>Nation Environment Comission</a></li>
          </ul>
          <div id="dropdown-sec" >
            <a onclick="myFunction()" class="dropbtn">See More<img src="img/icons/dropdown.svg" alt="language switch"style="margin-top:5px;"class="ml-1"></a>
            <div id="myDropdown" class="dropdown-content">
              <a href="#home"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object> Bhutan Chamber of Commerce and industry</a>
              <a href="#about"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object> Tourism Council of Bhutan</a>
              <a href="#contact"><span class="mt-2 mr-2"><object data="img/icons/foreign.svg" type=""></object> Royal Monetary Authority</a>
            </div>
          </div>

        </div>
      </div>
    </div>
      <div class="row">
        <div class="col-md-7 text-md-left text-white"> Copyright &copy;<script>document.write(new Date().getFullYear());</script> Department of Revenue & Customs, Ministry of Finance</div>
        <div class="col-md-5 text-md-right text-white"> <a href="#"class="mr-1 ml-1"> Disclaimer </a> | <a href="#"class="mr-1 ml-1"> Sitemap </a> | <a href=""class="mr-1 ml-1"> Terms & Condition </a></div>
    
      </div>
    </div>
  </footer>

<!---------------Footer section ends here --------------------->


<!---------------Copyright section ends here ---------------------> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> 
<script src="frontend_js/bootstrap.js"></script> 
<script src="frontend_js/jquery.bxslider.min.js"></script> 
<script>
$(document).ready(function() {
	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});
  $(document).ready(function(){
    $('.slider').bxSlider({	
	minSlides:1,
	maxSlides:1,
    captions:false
	});
  });
</script>
<script>
  $(document).ready(function() {
	$(".tabs_one_content").hide();
	$(".tabs_one_content:first").show(); 

	$("ul.tabs_one li").click(function() {
		$("ul.tabs_one li").removeClass("active");
		$(this).addClass("active");
		$(".tabs_one_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});
  $(document).ready(function(){
    $('.slider').bxSlider({	
	minSlides:1,
	maxSlides:1,
    captions:false
	});
  });
</script>
<script>
  let i=2;


$(document).ready(function(){
var radius = 100;
var fields = $('.itemDot');
var container = $('.dotCircle');
var width = container.width();
radius = width/2.2;

var height = container.height();
var angle = 0, step = (2*Math.PI) / fields.length;
fields.each(function() {
var x = Math.round(width/2 + radius * Math.cos(angle) - $(this).width()/2);
var y = Math.round(height/2 + radius * Math.sin(angle) - $(this).height()/2);
if(window.console) {
console.log($(this).text(), x, y);
}

$(this).css({
left: x + 'px',
top: y + 'px'
});
angle += step;
});


$('.itemDot').click(function(){

var dataTab= $(this).data("tab");
$('.itemDot').removeClass('active');
$(this).addClass('active');
$('.CirItem').removeClass('active');
$( '.CirItem'+ dataTab).addClass('active');
i=dataTab;

$('.dotCircle').css({
"transform":"rotate("+(360-(i-1)*36)+"deg)",
"transition":"2s"
});
$('.itemDot').css({
"transform":"rotate("+((i-1)*36)+"deg)",
"transition":"1s"
});


});

setInterval(function(){
var dataTab= $('.itemDot.active').data("tab");
if(dataTab>6||i>6){
dataTab=1;
i=1;
}
$('.itemDot').removeClass('active');
$('[data-tab="'+i+'"]').addClass('active');
$('.CirItem').removeClass('active');
$( '.CirItem'+i).addClass('active');
i++;


$('.dotCircle').css({
"transform":"rotate("+(360-(i-2)*36)+"deg)",
"transition":"2s"
});
$('.itemDot').css({
"transform":"rotate("+((i-2)*36)+"deg)",
"transition":"1s"
});

}, 5000);

});
</script>
<script>
  // for feedback
  $(function() {
	$("#feedback-tab").click(function() {
		$("#feedback-form").toggle("slide");
	});

	$("#feedback-form form").on('submit', function(event) {
		var $form = $(this);
		$.ajax({
			type: $form.attr('method'),
			url: $form.attr('action'),
			data: $form.serialize(),
			success: function() {
				$("#feedback-form").toggle("slide").find("textarea").val('');
			}
		});
		event.preventDefault();
	});
});


</script>
<script>
  /* for see more dropdowns */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  </script>
  <script>
    /* for language switch */
    function myFunction2() {
      document.getElementById("myDropdown2").classList.toggle("show2");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn2')) {
        var dropdowns = document.getElementsByClassName("dropdown-content2");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show2')) {
            openDropdown.classList.remove('show2');
          }
        }
      }
    }
    </script>
</div>
</div>
</body>
</html>