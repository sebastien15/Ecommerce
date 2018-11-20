@extends('admin')        

@section('content')
        <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
        
                                    <div class="header">
                                        <h4 class="title">Email Statistics</h4>
                                        <p class="category">Last Campaign Performance</p>
                                    </div>
                                    <div class="content">
                                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
        
                                        <div class="footer">
                                            <div class="legend">
                                                <i class="fa fa-circle text-info"></i> Open
                                                <i class="fa fa-circle text-danger"></i> Bounce
                                                <i class="fa fa-circle text-warning"></i> Unsubscribe
                                            </div>
                                            <hr>
                                            <div class="stats">
                                                <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title">Users Behavior</h4>
                                        <p class="category">24 Hours performance</p>
                                    </div>
                                    <div class="content">
                                        <div id="chartHours" class="ct-chart"></div>
                                        <div class="footer">
                                            <div class="legend">
                                                <i class="fa fa-circle text-info"></i> Open
                                                <i class="fa fa-circle text-danger"></i> Click
                                                <i class="fa fa-circle text-warning"></i> Click Second Time
                                            </div>
                                            <hr>
                                            <div class="stats">
                                                <i class="fa fa-history"></i> Updated 3 minutes ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        
        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card ">
                                    <div class="header">
                                        <h4 class="title">2014 Sales</h4>
                                        <p class="category">All products including Taxes</p>
                                    </div>
                                    <div class="content">
                                        <div id="chartActivity" class="ct-chart"></div>
        
                                        <div class="footer">
                                            <div class="legend">
                                                <i class="fa fa-circle text-info"></i> Tesla Model S
                                                <i class="fa fa-circle text-danger"></i> BMW 5 Series
                                            </div>
                                            <hr>
                                            <div class="stats">
                                                <i class="fa fa-check"></i> Data information certified
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-md-6">
                                <div class="card ">
                                    <div class="header">
                                        <h4 class="title">Messages</h4>
                                      
                                    </div>
                                    <div class="content">
                                        <div class="table-full-width">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>Name</th>
                                                        <th>subject</th>
                                                        <th>Send at</th>
                                                        <th>Buttons</th>
                                                    </tr>
                                                    @foreach($messages as $message)
                                                    <tr>
                                                        
                                                        <td>{{$message->id}}</td>
                                                        <td>{{$message->name}}</td>
                                                        <td>{{$message->subject}}</td>
                                                        <td>{{$message->created_at}}</td>
                                                        <td><a class="btn btn-info btn-simple btn-xs" href="" title="Edit"><i class="fa fa-edit">more</i></a>
                                                       <a class="btn btn-danger btn-simple btn-xs" href="" title="delete"><i class="fa fa-delete">delete</i></a></td>  
                                                    </tr>
                                                    @endforeach
                                                   
                                                </tbody>
                                            </table>
                                            <div class="text-center">
                                                {{$messages->links()}}
                                            </div>
                                        </div>
        
                                        <div class="footer">
                                            <hr>
                                            <div class="stats">
                                                <i class="fa fa-history"></i> Updated 3 minutes ago
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>        
@endsection                