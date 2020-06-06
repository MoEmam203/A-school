<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('app/css/login/style.css' )}}" /> 
    <link rel="stylesheet" href="{{asset('app/css/login/normalize.css')}}" />
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Martel+Sans&display=swap">
  </head>
  <body>
    <div class="container">
      <div class="form_info">
       
      <form action="{{route('post-login')}}" method="post">

        {{ csrf_field() }}

          <h1 id="h1"> Login </h1>
          <label for="userName" id="l1"> Username </label>
          <input type="text" name='id' placeholder="Enter Your ID or Email" id="userName" required/>

          @if ($errors->has('id'))
            <small class="alert alert-danger">
              <span class="error">{{ $errors->first('id') }}</span>
            </small> 
          @endif

          <label for="pass" id="l2"> Password </label>
          <input type="password" name="password" placeholder="Enter Your Password" id="pass" required/>

          @if ($errors->has('password'))
          <small class="alert alert-danger">
            <span class="error">{{ $errors->first('password') }}</span>
          </small>  
          @endif



          <div class="radio-container">
            <div class="radio-group">
              <label class="radio">
                <input type="radio" value="admin" name="is_admin"> Admin
                <span class="circle"></span>
              </label>
            </div>
            <div class="radio-group">
              <label class="radio">
                <input type="radio" value="Parent" name="is_admin"> Parent
                <span class="circle"></span>
              </label>
            </div>
            <div class="radio-group">
              <label class="radio">
                <input type="radio" value="student" name="is_admin"> Student
                <span class="circle"></span>
              </label>
            </div>
          </div>
          <input type="submit" value="Login"> 
        </form>
      </div>
      <div class="pic">
        <div class="content">
          <h1 id="h2"> Welcome To "A+ School" Login Form </h1>
        </div>
        <div class="photo">
          <img class="responsive-img" src="{{  asset('app/pics/login/login1.png') }}">
        </div>
      </div>
    </div>

    
    

    <!-- Start Scripts -->
    <script src="{{ asset('app/js/jquery.js') }}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script>

    @if(Session::has('success'))
        toastr.success("{{Session::get('success')}}")
	  @endif

	  @if(Session::has('warning'))
        toastr.warning("{{Session::get('warning')}}")
	  @endif

	  @if(Session::has('error'))
        toastr.error("{{Session::get('error')}}")
	  @endif
	  
	  @if(Session::has('info'))
        toastr.info("{{Session::get('info')}}")
	  @endif

	</script>

    <!-- End Scripts -->
  </body>
</html>