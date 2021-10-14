@extends('layouts.front')

@section('content')
<div class="bd-example-about"id="main-home-style">
    <div class="main-home-about">
      <div class="container" class="text-center">
        <h1 class="main-home-he">Rules</h1>
       <p><a href="{{ url('/') }}">Homepage /</a> <a href="{{ url('/rules') }}">Rules</a></p>
      </div>
    </div>
   </div>
   <div class="bg-download">
<div class="container pt-5 pb-5"> 
        <table id="example" class="table table-striped table-bordered nowrap bg-white" style="width:100%">
            <thead>
                <tr>
                    <th>Sl.no</th>
                    <th width="600">Title</th>
                    <th width="200">Document</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Income Tax Rules & Regulations</td>
                    <td>Download(2.3)<i class="fa fa-file-pdf-o mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
              
                </tr>
                <tr>
                    <td>2</td>
                    <td>Customs Rules & Regulations</td>
                    <td>Download(2.3)<i class="fa fa-file-pdf-o mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sales Tax Rules & Regulations</td>
                    <td>Download(2.3)<i class="fa fa-file-pdf-o mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>GST Rules & Regulations</td>
                    <td>Download(2.3)<i class="fa fa-file-pdf-o mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Fiscal Incentive Rules & Regulations</td>
                    <td>Download(2.3)<i class="fa fa-file-pdf-o mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Refund Manuals</td>
                    <td>Download(2.3)<i class="fa fa-file-pdf-o mr-3" aria-hidden="true"></i><i class="fa fa-download" aria-hidden="true"></i></td>
                </tr>
              
            </tbody>
        </table>
    </div>
</div>
@endsection