@extends('admin')
@section('title','All Sub-category')
@section('content')
   <div class="col-md-12 content">
        <div class="col-md-3 col-md-offset-1 card " style="color:blue;">
            <h4>Add a new shipping</h4>
            @if (Session::get('$success'))
              <p class="aler alert-success">{{$success}}</p>
            @endif
           
           <form method="post" action="{{route('Shipping.store')}}" class="form-group">
                @csrf
                <div class="form-group">
                    <label>Shipping means:</label>
                    <input class="form-control" type="text" name="shipping_means">
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
                    <th>Shipping means</th>
                    <th>Added on </th>
                    <th>Updated on</th>
                </thead>
                <tbody>
                    @foreach ($shippings as $shipping)
                    <tr>
                        <td>{{$shipping->id}}</td>
                        <td>{{$shipping->shipping_means}}</td>
                        <td>{{$shipping->created_at}}</td>
                        <td>{{$shipping->updated_at}}</td>
                        <td>
                            <form action="{{route('Shipping.destroy',$shipping->id)}}" method="post">
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