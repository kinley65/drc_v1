@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Publication</h1>
       <p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/publication') }}">Publication</a></p>
      </div>
    </div>
   </div>
   <section class="py-5 header bg-white">
    <div class="container py-4">


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Appeals</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Bhutan Trade Statistics</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <i class="fa fa-star mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Nationa Revenue Reports</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <i class="fa fa-check mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Performance Indicators</span></a>
                        <a class="nav-link mb-3 p-3 shadow" id="v-pills-lastsec-tab" data-toggle="pill" href="#v-pills-lastsec" role="tab" aria-controls="v-pills-lastsec" aria-selected="false">
                            <i class="fa fa-check mr-2"></i>
                            <span class="font-weight-bold small text-uppercase">Guidlines</span></a>
                            <a class="nav-link mb-3 p-3 shadow" id="v-pills-last-tab" data-toggle="pill" href="#v-pills-last" role="tab" aria-controls="v-pills-last" aria-selected="false">
                                <i class="fa fa-check mr-2"></i>
                                <span class="font-weight-bold small text-uppercase">Manuals</span></a>
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"> 
                        <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sl.no</th>
                                <th scope="col">Title</th>
                                <th scope="col">Document</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Document demo 1</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Document demo 2</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Document demo 3</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sl.no</th>
                                <th scope="col">Title</th>
                                <th scope="col">Document</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Document demo 1</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Document demo 2</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Document demo 3</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sl.no</th>
                                <th scope="col">Title</th>
                                <th scope="col">Document</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Document demo 1</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Document demo 2</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Document demo 3</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sl.no</th>
                                <th scope="col">Title</th>
                                <th scope="col">Document</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Document demo 1</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Document demo 2</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Document demo 3</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-lastsec" role="tabpanel" aria-labelledby="v-pills-lastsec-tab">
                        <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sl.no</th>
                                <th scope="col">Title</th>
                                <th scope="col">Document</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Document demo 1</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Document demo 2</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Document demo 3</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-last" role="tabpanel" aria-labelledby="v-pills-last-tab">
                        <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sl.no</th>
                                <th scope="col">Title</th>
                                <th scope="col">Document</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Document demo 1</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Document demo 2</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Document demo 3</td>
                                <td>Download(2.3)<i class="fa fa-file-pdf-o ml-1 mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection