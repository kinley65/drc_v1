@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Tender Announcement</h1>
        <p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/tender') }}"> Tender</a></p>
      </div>
    </div>
   </div>
   <div id="about-bg">
    <div class="container pt-5 pb-5"> 
            <table id="example" class="table table-striped table-bordered nowrap bg-white" style="width:100%">
                <thead>
                    <tr>
                        <th>Sl.no</th>
                        <th>Tender ID</th>
                        <th width="500">Tender Description</th>
                        <th>Cost of Tender Document</th>
                        <th>Tender Opening Date</th>
                        <th>Tender Closing Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>123445</td>
                        <td>Tender on somthing Demo</td>
                        <td>12234</td>
                        <td>17 Oct</td>
                        <td>17 Nov</td>
                  
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>123445</td>
                      <td>Tender on somthing Demo</td>
                      <td>12234</td>
                      <td>17 Oct</td>
                      <td>17 Nov</td>
                    </tr>
                    <tr>
                      <td>1</td>
                        <td>123445</td>
                        <td>Tender on somthing Demo</td>
                        <td>12234</td>
                        <td>17 Oct</td>
                        <td>17 Nov</td>
                    </tr>
                    <tr>
                      <td>1</td>
                        <td>123445</td>
                        <td>Tender on somthing Demo</td>
                        <td>12234</td>
                        <td>17 Oct</td>
                        <td>17 Nov</td>
                    </tr>
                    <tr>
                      <td>1</td>
                        <td>123445</td>
                        <td>Tender on somthing Demo</td>
                        <td>12234</td>
                        <td>17 Oct</td>
                        <td>17 Nov</td>
                    </tr>
                    <tr>
                      <td>1</td>
                        <td>123445</td>
                        <td>Tender on somthing Demo</td>
                        <td>12234</td>
                        <td>17 Oct</td>
                        <td>17 Nov</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>123445</td>
                      <td>Tender on somthing Demo</td>
                      <td>12234</td>
                      <td>17 Oct</td>
                      <td>17 Nov</td>
                    </tr>
                </tbody>
            </table>
        </div>
 </div>
@endsection