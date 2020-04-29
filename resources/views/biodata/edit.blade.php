@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Edit Biodata </h3>
            </div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Something Went Wrong.<br>
                <ul>
                    @foreach($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('biodata.update', $biodata->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullName" class="form-control" value="{{$biodata->fullName}}">
                </div>
                <div class="col-md-12">
                    <strong>Description:</strong>
                    <input type="text" name="description" class="form-control" value="{{$biodata->description}}">
                </div>
                <div class="col-md-12">
                    <br>
                    <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>

                </div>
            </div>
        </form>
    </div>
@endsection
