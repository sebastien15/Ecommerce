@extends('admin')
@section('title','Edit currency')
@section('content')
  <div class="content">
  	<div class="col-md-3 col-md-offset-1 card " style="color:blue;">
            <h4>Add a new currency</h4>
            @if ($message = Session::get('success'))
              <p class="aler alert-success">{{$message}}</p>
            @endif
            <form method="POST" action="{{route('Currency.update',$currency->id)}}" class="form-group">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Currency Name:</label>
                    <input class="form-control" type="text" name="name" value="{{$currency->name}}">
                </div>
                <div class="form-group">
                    <label>Exchange Percentage:</label>
                    <input class="form-control" type="text" name="percentage" value="{{$currency->percentage}}">
                </div>
                <button class="btn btn-info form-control" action="submit">Save</button>
           </form>
    </div>
    <div class="col-md-7 well" style="margin-left: 10px;">
            <table class="table table-hover table-responsive">
                <caption><h6>All Currencies</h6></caption>
                <thead>
                    <th>ID</th>
                    <th>Currency name</th>
                    <th>Percentage exchange</th>
                    <th>Added on </th>
                    <th>Updated on</th>
                </thead>
                <tbody>
                    @foreach ($currencies as $currency)
                    <tr>
                        <td>{{$currency->id}}</td>
                        <td>{{$currency->name}}</td>
                        <td>{{$currency->percentage}}</td>
                        <td>{{$currency->created_at}}</td>
                        <td>{{$currency->updated_at}}</td>
                        <td><a class="btn btn-info" href="{{route('Currency.update',$currency->id)}}">
                            <i class="pe-7s-edit"></i> Edit
                            </a>
                        </td>
                        <td>
                            <form action="{{route('Currency.destroy',$currency->id)}}" method="post">
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