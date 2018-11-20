@extends('admin')
@section('title','Single Item')
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
                   <h3 class="panel-title">{{$item->item_name}}</h3>
               </div>
               <div class="panel-body">
                <ul class="list-group list-unstyled">
                  <li><span><strong>Code:</strong></span>          {{$item->code}}</li>
                  <li><span><strong>Detail:</strong></span>        {{$item->detail}}</li>
                  <li><span><strong>Description:</strong></span>   {{$item->description}}</li>
                  <li><span><strong>Category:</strong></span>      {{$item->category->name}}</li>
                  <li><span><strong>Sub Category:</strong></span>  {{$item->subcat_id}}</li>
                  <li><span><strong>Price:</strong></span>         {{$item->price}}</li>
                  <li><span><strong>Currency:</strong></span>      {{$item->currency->name}}</li>
                  <li><span><strong>Brand:</strong></span>         {{$item->brand_id}}</li>
                  <li><span><strong>Shop:</strong></span>          {{$item->shop_id}}</li>
                  <li><span><strong>Shipping:</strong></span>      {{$item->shippping_id}}</li>
                  <li><span><strong>Active:</strong></span>        {{$item->active}}</li>
                  <li><span><strong>Condition:</strong></span>     {{$item->condition}}</li>
                </ul>
                <div>
                  {{$item->image}}
                </div>
                <div class="panel-heading">
                <div class="col-md-5">
                  <a href="{{route('items.edit',$item->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>
                </div>
                <div class="col-md-5">
                 <form class="form-group" action="{{route('items.destroy',$item->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                   <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                </form> 
                </div>
               </div>
               </div>
               
            </div>
		</div>
  <div class="col-md-3 well">
  <div>
    <a class="btn btn-md btn-success" href="{{route('items.create')}}">Add a new Service</a>
  </div>
  <br/>
  <div>
    <a class="btn btn-md btn-success" href="{{route('items.index')}}">All Items................</a>
  </div>    
  </div>    
	</div>



</div>
@endsection