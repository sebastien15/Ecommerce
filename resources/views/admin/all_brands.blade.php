@extends('admin')
@section('title','All Brands')
@section('content')
       <div class="col-md-12">
           <div class="">
               <div class="header">
               	<h3>All brand</h3>
               </div>
                @if($message = Session::get('success'))
                       <div class="alert alert-success col-md-8">
                         <p>{{$message}}
                       </div>
                    @endif
                <div class="content row">
                    <div class="col-md-5 card" style="color:blue; margin-left: 10px; margin-bottom: 5px;">
                      <h4>Add a new brand</h4>
                      @if($message = Session::get('success'))
                         <p class="alert alert-success">{{$message}}</p>
                      @endif
                       <form method="post" action="{{route('Brands.store')}}">
                          @csrf
                           <div class="form-group">
                              <label>Brand Name:</label>
                              <input class="form-control" type="text"name="name">
                           </div>
                           <div class="form-group">
                             <label>Items Number:</label>
                             <input class="form-control" type="text" name="item_count">
                           </div>
                           <div class="form-group">
                               <label>Description:</label>
                               <input class="form-control" type="text" name="description">
                           </div>
                           <div class="form-group">
                               <label>Sold:</label>
                               <input class="form-control" type="number" name="sold_count">
                           </div>
                           <div class="form-group">
                               <label>views:</label>
                               <input class="form-control" type="number" name="views_count">
                           </div>
                           <button class="btn btn-info form-control" action="submit">Save</button>
                        </form>
                    </div>
                   
              </div>
               <div class="content table-responsive table-full-width row">
                   <table class="table table-hover">
                       <thead>
                        <th>ID</th>
                       	<th>Brand Name</th>
                        <th>items</th>
                        <th>description</th>
                        <th>sold items</th>
                        <th>Viewed items</th>
                       	<th>Created At</th>
                       	<th>Updated At</th>
                       	<th>Buttons</th>
                       </thead>
                       <tbody>
                       	@foreach ($brands as $brand)
                           <tr>
                           	<td>{{$brand->id}}</td>
                           	<td>{{$brand->name}}</td>
                           	<td>{{$brand->item_count}}</td>
                            <td>{{$brand->description}}</td>
                            <td>{{$brand->sold_count}}</td>
                            <td>{{$brand->views_count}}</td>
                           	<td>{{$brand->created_at}}</td>
                           	<td>{{$brand->updated_at}}</td>
                           	<td>
                              <form method="post" class="form-group" action="{{route('Brands.destroy',$brand->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit"><i class="pe-7s-trash">Delete</i></button>
                              </form>
                            </td>
                           </tr>
                        @endforeach   
                       </tbody>
                   </table>

               </div>
              
           </div>
       </div>
@endsection