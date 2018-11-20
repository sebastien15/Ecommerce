@extends('admin')
@section('title','All Items')
@section('content')

   <div class="content">
   	
   	     <div class="col-md-12">
             <div class="card">
                 <div class="header">
                    <div class="row">
                      <div class="col-md-4">
                       <a class="btn btn-sm btn-info" href="{{route('items.create')}}"><i class="pe-7s-pen">Add a new item</i></a>  
                      </div>
                      <div class="col-md-8">
                         <form role="form" method="post" action="{{route('items.search')}}">
                         @csrf
                         <div class="from-group">
                            <div class="col-md-4">
                               <select class="form-control" name="search">
                                 @foreach ($categories as $category)
                                 <option value="{{$category->id}}">{{$category->name}}</option>
                                 @endforeach
                                </select> 
                                </div>
                           
                            <button class="btn btn-success btn-sm" type="submit">Search...</button>  
                         </div>
                         
                         </form> 
                      </div>
                      
                    </div>
                    
                     @if($message = Session::get('success'))
                     <p class="category">{{$message}}</p>
                     @endif
                 </div>
                 <div class="table-responsive ">
                     <table class="table table-hover table-striped">
                         <thead>
                            <th>ID</th>
                         	<th>Name</th>
                         	<th>code</th>
                         	<th>Detail</th>
                         	<th>Description</th>
                            <th>Category</th>
                            <th>Sub-Category</th>
                            <th>Price</th>
                            <th>Currency</th>
                            <th>Brand</th>
                         	<th>Image</th>
                         	<th>Shipping</th>
                            <th>Active state</th>
                            <th>Condition</th>
                         	<th>Created at</th>
                         	<th>Updated at</th>
                         	<th>Buttons</th>
                         </thead>
                         <tbody>
                         	@foreach($items as $item)
                             <tr>
                             	<td>{{$item->id}}</td>
                             	<td>{{$item->item_name}}</td>
                             	<td>{{$item->item_code}}</td>
                             	<td>{{$item->detail}}</td>
                             	<td>{{$item->description}}</td>
                                <td>{{$item->category_id}}</td>
                             	<td>{{$item->subcat_id}}</td>
                             	<td>{{$item->price}}</td>
                                <td>{{$item->currency_id}}</td>
                                <td>{{$item->brand_id}}</td>
                                <td>{{$item->shipping_id}}</td>
                                <td>{{$item->active}}</td>
                                <td>{{$item->condition}}</td>
                                <td>{{$item->image}}</td>
                             	<td>{{$item->created_at}}</td>
                             	<td>{{$item->updated_at}}</td>
                             	<td><a class="btn btn-sm btn-info" href="{{route('items.show',$item->id)}}"><i class="pe-7s-pen">View</i></a>
                                </td>
                            </tr>
                            @endforeach
                            
                         </tbody>

                     </table>
                    <div class="text-center">
                            	{{$items->links()}}
                    </div>
                 </div>
             </div>
         </div>
   </div>


@endsection