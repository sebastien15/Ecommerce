@extends('admin')
@section('title','All Sub-category')
@section('content')
   <div class="col-md-12 content">
        <div class="col-md-3 col-md-offset-1 card " style="color:blue;">
            <h4>Add a new subcat</h4>
            @if (Session::get('$success'))
              <p class="aler alert-success">{{$success}}</p>
            @endif
           
           <form method="post" action="{{route('Subcat.store')}}" class="form-group">
                @csrf
                <div class="form-group">
                    <label>Sub-category Name:</label>
                    <input class="form-control" type="text" name="subcat_name">
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
                    <th>Subcat name</th>
                    <th>Items of this subcat</th>
                    <th>sold</th>
                    <th>views</th>
                    <th>Added on </th>
                    <th>Updated on</th>
                </thead>
                <tbody>
                    @foreach ($subcats as $subcat)
                    <tr>
                        <td>{{$subcat->id}}</td>
                        <td>{{$subcat->subcat_name}}</td>
                        <td>{{$subcat->sold_count}}</td>
                        <td>{{$subcat->views_count}}</td>
                        <td>{{$subcat->created_at}}</td>
                        <td>{{$subcat->updated_at}}</td>
                        <td>
                            <form action="{{route('Subcat.destroy',$subcat->id)}}" method="post">
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