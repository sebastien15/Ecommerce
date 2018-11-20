@extends('admin')
@section('title','All Messages')
@section('content')

   <div class="content">
   	    <div class="content table-responsive table-full-width">
                   <table class="table table-hover">
                       <thead>
                           <th>ID</th>
                       	<th>Name</th>
                       	<th>Email</th>
                       	<th>Subject</th>
                       	<th>Message</th>
                       	<th>Send At</th>
                       	<th>Buttons</th>
                       </thead>
                       <tbody>
                       	@foreach ($messages as $message)
                           <tr>
                           	<td>{{$message->id}}</td>
                           	<td>{{$message->name}}</td>
                           	<td>{{$message->email}}</td>
                           	<td>{{$message->subject}}</td>
                           	<td>{{$message->message}}</td>
                           	<td>{{$message->created_at}}</td>
                           	<td>
                               <a class="btn btn-sm btn-info" href=""><i class="pe-7s-pen">Edit</i></a>
                               <a class="btn btn-sm btn-danger" href=""><i class="pe-7s-trash">Delete</i></a>
                           	</td>
                           </tr>
                        @endforeach   
                       </tbody>
                   </table>

               </div>
   </div>

@endsection