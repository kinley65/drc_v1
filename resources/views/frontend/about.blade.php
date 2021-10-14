@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">About Us</h1>
        <p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/aboutus') }}">About Us</a></p>
      </div>
    </div>
   </div>
   <div id="about-bg">
    <div class="container pt-5">
      <div class="row">
        <div class="col-lg-7 col-md-6 col-12">
          <div class="col-11 text-center pr-5 pl-5"><h1>Our Mission</h1></div>
          <hr>
          <div class="col-12 text-center"> <p>"To ensure that the tax and customs administration has
            the capacity to collect taxes efficiently and effectively at
            minimum cost through impartial and consistent 
            enforcement of regulations, and to provide a convenient
            and honest service to the taxpayers."</p></div>
          
         
        </div>
        <div class="col-lg-5 col-md-6 col-12">
          <div class="col-11 text-center pr-5 pl-5"><h1> Our Vision</h1></div>
          <hr>
          <div class="col-12 text-center"> <p>"Contribute to the nation building process 
            through the development of an effective 
            revenue system."</p></div>
        </div>
      </div>
    </div>
    </div>
    <div class="bd-example-about" id="Organization">
      <div class="main-home-about-orgonagram">
        <div class="container" class="text-center">
          <div class="content">
            <figure class="org-chart cf">
              <div class="board ">
                <ul class="columnOne">
                  <li>
                    <span class="lvl-bd">
                         <strong>Department of Revenue and Custom</strong>
                         
                         </span>
                  </li>
                </ul>
              </div>
              <ul class="departments ">
                <li class="department ">
                  <span class="lvl-b">
                      <strong> 
                        <a data-toggle="modal"href="#"class="text-white" data-target="#costumModel">
                          Custom Division 
                        </a>
                      </strong>
                      </span>
                
                </li>
                <li class="department ">
                  <span class="lvl-b">
                      <strong>Revenue Division</strong>
                      </span>
                  
                </li>
                <li class="department ">
                  <span class="lvl-b">
                      <strong>Revenue Intelligence Devision</strong>
                      </span>
                  
                </li>
               
                <li class="department ">
                  <span class="lvl-b">
                      <strong>Sales Tax Division</strong>
                      </span>
                 
                </li>
                <li class="department ">
                  <span class="lvl-b">
                      <strong>
                        <a data-toggle="modal"href="#"class="text-white" data-target="#taxadmModel">
                         Tax Administration Division
                        </a>
                      </strong>
                      </span>
                  
                </li>
                <li class="department ">
                  <span class="lvl-b">
                      <strong>Taxpayer Information Service Division</strong>
                      </span>
                 
                </li>
              </ul>
            </figure>
              </div>
          </div>
        </div>
      </div>

    <!-- Modal for custom -->
    <div class="modal fade" id="costumModel" tabindex="-100" role="dialog" aria-labelledby="costumModelTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="costumModelTitle">Custom Division</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>It is responsible for the facilitation of legitimate
              trade, collection of national revenue and also successful law enforcement.
              The Division in particular is mandated to collect revenue and facilitate legitimate
              trade while on the other it is also responsible for identifying, disrupting and
              dismantling entities that threatens the legitimate flow of trade. So, there is greater
              need to balance a high level of compliance with revenue objectives and regulatory
              requirements while facilitating the movement of goods and people across the
              border.
              </p><p>
              The Division is also responsible for the uniform application and implementation of
              The Customs Act of Bhutan 2017 and Customs Rules and Regulations of Bhutan
              2017. </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    {{-- model for tax and administration division  --}}
    <div class="modal fade" id="taxadmModel" tabindex="-100" role="dialog" aria-labelledby="taxadmModelTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="taxadmModelTitle">Tax Administration Division</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>It is directly responsible for the formulation and
              amendment of Income tax Act and Rules, reviewing and advising sound tax policy to the Ministry
              of Finance as and when required. The Division continuously strives to develop an effective tax
              system that will serve as a fiscal policy tool for the government to manage and regulate the
              economy from time to time. In doing so, we remain guided by the principles of equity, fairness,
              and efficiency in our endeavor to mobilize adequate revenue for the government. The Division
              also ensures that the department has the capacity to collect taxes efficiently and effectively at
              minimum cost through impartial service to taxpayers. Further, maintaining a high degree of
              integrity and morale of our staff is a major operational strategy. To this end, the tax
              administration division shall strive to put in place an effective policy framework, risk-based
              control mechanisms and a strong culture of accountability in our work. We shall remain fully 
              dedicated both in our spirit and action to contribute towards achieving the national goal of selfreliance by mobilizing adequate internal revenue to the government every year. </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

@endsection