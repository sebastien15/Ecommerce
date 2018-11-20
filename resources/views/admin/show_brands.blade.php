@extends('admin')
@section('title','Add a new Brands')
@section('content')
<div class="content">
	<div class="row">
		@if($message = Session::get('success'))
		<div class="alert alert-success col-md-8">
			<p>{{$message}}</p>
		</div>
		@endif
		<div class="col-md-8">
			<div class="panel panel-info">
               <div class="panel-heading">
                   <h3 class="panel-title">{{$brand->title}}</h3>
               </div>
               <div class="panel-body">
                {{$brand->body}}
               </div>
               <div class="panel-footer">
                <a href="{{route('Brands.edit',$brand->id)}}" class="btn btn-info btn-xs">Edit</a>
                <form action="{{route('Brands.destroy',$brand->id)}}" method="DELETE">
                	@csrf
                	 <input type="submit" value="Delete" class="btn btn-danger btn-xs">
                </form>
                
               </div>
            </div>
		</div>
	</div>
	<div>
		<a class="btn btn-md btn-success" href="{{route('Brands.create')}}">Add a new Service</a>
	</div>

</div>
@endsection