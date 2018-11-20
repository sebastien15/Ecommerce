<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin |Log in | E-Shopper</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <style type="text/css">
    	#body{
    		background-color: cyan;
    		background-image: url({{asset('backend/images/full-screen-image-3.jpg')}});
    	}
    	#logInForm {
    		marging-top: 30px;

    	}
    	#LogInbutton{
    		margin-top: 20px;

    	}
      #rcorners1 {
        border-radius: 10px;
        background: #73AD21;
        background-color: transparent;
        box-shadow: 3px 3px 2.5px 2.5px black;
        padding: 10px;
        padding-top: 17px;
        padding-bottom: 17px;"
       
      }
      #Remember{
        color: rgb(165, 255, 237);
      }
      #ForgotPassword{
        color: rgb(165, 255, 237);
      }

    </style>
</head>
<body id="body" >
       <form id="rcorners1" action="{{'/dashboard'}}" class="form-horizontal col-lg-4 col-md-4 col-sm-4 col-sm-offset-4 col-lg-offset-4 col-md-offset-4 " style=" margin-top: 10%;" >

        {{csrf_field()}}
       	
        <label class="text-left">User Name</label>
       	<input class=" form-control " type="text" name="admin_email" placeholder="Type Email">
       	<label class="text-left">Password</label>
       	<input  class=" form-control " type="password" name="admin_password" placeholder="Type Password">

       	<button id="LogInbutton" action='submit' class="btn btn-danger form-control " type="button"> Log in</button>
       	<div class="checkbox">
          <label>
          <input type="checkbox" > <span id="Remember">Remember me!</span> 
         </label>

       </div>
       <div class="text-left text-danger">
       	<a href="" id="ForgotPassword">Forgot Password?</a>
       </div>
       </form>




       <!--scripts starts -->
	<script src="{{asset('frontend/js/jquery.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!--scripts ends -->
</body>
</html>
	