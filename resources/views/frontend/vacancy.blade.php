@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Vacancy Announcement</h1>
        <p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/vacancy') }}">Vacancy</a></p>
      </div>
    </div>
   </div>
   <div id="about-bg">
      <div class="container pt-5 pb-5"> 
              <table id="example" class="table table-striped table-bordered nowrap bg-white" style="width:100%">
                  <thead>
                      <tr>
                          <th>Sl.no</th>
                          <th>Job Title</th>
                          <th>Job Slots</th>
                          <th width="500">Documents Required</th>
                          <th width="50">Deadline for Doc Submission</th>
                          <th width="500">Remarks</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Driver</td>
                          <td>3</td>
                          <td>Driving License. 2 years experience</td>
                          <td>17 Oct</td>
                          <td></td>
                    
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>IT Programmer</td>
                        <td>2</td>
                        <td>class 12 Mark sheet</td>
                        <td>17 Oct</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Tax Officer</td>
                        <td>3</td>
                        <td>Degree documents</td>
                        <td>17 Oct</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Driver</td>
                        <td>3</td>
                        <td>Driving License. 2 years experience</td>
                        <td>17 Oct</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Driver</td>
                        <td>3</td>
                        <td>Driving License. 2 years experience</td>
                        <td>17 Oct</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Driver</td>
                        <td>3</td>
                        <td>Driving License. 2 years experience</td>
                        <td>17 Oct</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Driver</td>
                        <td>3</td>
                        <td>Driving License. 2 years experience</td>
                        <td>17 Oct</td>
                        <td></td>
                      </tr>
                  </tbody>
              </table>
          </div>
   </div>
@endsection