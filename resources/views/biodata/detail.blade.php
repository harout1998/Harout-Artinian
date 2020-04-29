@extends('layouts.app')
@section('content')

   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h3>Biodata's Details</h3>
               <hr>
           </div>
       </div>
       <div class="row">
           <div class="col-md-12">
               <div class="form-group">
                   <strong>Full Name: </strong><br>{{$biodata->fullName}}
               </div>
           </div>
           <div class="col-md-12">
               <div class="form-group">
                   <strong>Description: </strong><br>{{$biodata->description}}
               </div>
           </div>
           <div class="col-md-12">
               <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
           </div>
       </div>
   </div>

    @endsection
