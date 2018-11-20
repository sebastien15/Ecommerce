@extends('admin')
@section('title','All Category')
@section('content')
   <div class="col-md-12 content">
        <div class="col-md-3 col-md-offset-1 card " style="color:blue;">
            <h4>Add a new category</h4>
            @if (Session::get('$success'))
              <p class="aler alert-success">{{$success}}</p>
            @endif
           
           <form method="post" action="{{route('Category.store')}}" class="form-group">
                @csrf
                <div class="form-group">
                    <label>Category Name:</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label>Items:</label>
                    <input class="form-control" type="text" name="items_count">
                </div>
                <div class="form-group">
                    <label>Sold:</label>
                    <input class="form-control" type="text" name="sold_count">
                </div>
                <div class="form-group">
                    <label>Views:</label>
                    <input class="form-control" type="text" name="views_count">
                </div>
                <button class="btn btn-info form-control" action="submit">Save</button>
           </form>
        </div>
        <div class="col-md-7 well" style="margin-left: 10px;">
            <table class="table table-hover table-responsive">
                <caption><h6>All Currencies</h6></caption>
                @if ($message = Session::get('success'))
                   <caption><h5 class="text-success">{{$message}}</h5></caption>
                @endif
                <thead>
                    <th>ID</th>
                    <th>Category name</th>
                    <th>Items of this category</th>
                    <th>sold</th>
                    <th>views</th>
                    <th>Added on </th>
                    <th>Updated on</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->items_count}}</td>
                        <td>{{$category->sold_count}}</td>
                        <td>{{$category->views_count}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td>
                            <form action="{{route('Category.destroy',$category->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="pe-7s-trash"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
   </div>
   

@endsection