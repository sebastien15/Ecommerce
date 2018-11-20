@extends('admin')
@section('title','Edit Item')
@section('content')

     <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Item</h4>
                            </div>
                            <div class="content">
                                <form action="{{route('items.update',$item->id)}}" method="post">
                                	@csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input type="text" class="form-control" placeholder="item name" name="item_name" value="{{$item->item_name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>item_code:</label>
                                                <input type="text" class="form-control" placeholder="item_code" name="item_code" value="{{$item->item_code}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Price:</label>
                                                <input type="text" class="form-control" placeholder="Price" name="price" value="{{$item->price}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Currency</label>
                                            <select name="currency_id" class="form-control">
                                                    @foreach ($currencies as $currency)
                                                      <option value="{{$currency->id}}">{{$currency->name}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Category:</label>
                                                <select name="category_id" class="form-control">
                                                    @foreach ($categories as $category)
                                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sub category:</label>
                                                <select class="form-control" name="subcat_id">
                                                     @foreach ($subcats as $subcat)
                                                       <option value="{{$subcat->id}}">{{$subcat->subcat_name}}</option>
                                                     @endforeach 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Brand</label>
                                                <select class="form-control" name="brand_id">
                                                    @foreach ($brands as $brand)
                                                     <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Shop:</label>
                                                   <select class="form-control" name="shop_id">
                                                    <option value="1">Mine shop</option>
                                                    <option value="2">Bine shop</option>
                                                   </select> 
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Shipping options:</label>
                                                    <select class="form-control" value="shipping_id">
                                                        @foreach ($shippings as $shipping)
                                                          <option value="{{$shipping->id}}">{{$shipping->shipping_means}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Add item image:</label>
                                                    <div class="" style="border-color: skyblue;">
                                                        <input class="form-control" type="file" name="image">
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>detail</label>
                                                <input type="text" name="detail" class="form-control" placeholder="add item detail" value="{{$item->detail}}">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="">
                                             <label>Active state:</label>
                                             <p><input type="checkbox" name="active" value="unavailable" class=""> Unavailable</p>
                                             <p><input type="checkbox" name="active" value="available">Available</p>   
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea rows="5" class="form-control" placeholder="Description about the item" name="description" name="description" value="{{$item->description}}"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Save</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
