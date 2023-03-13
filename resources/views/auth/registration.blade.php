<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
     integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>registration From</title>
</head>
<boby>
    <div class='container'>
        <div class='row'>
           <div class='col-md-4 offset-md-4' style='margin-top:20px ;'>
             <h2> Registration </h2>
             <hr>
             <form action="{{url('register-user')}}" method="post">

                @if(Session::has('success'))
                <div class='alert alert-sussess'> {{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class='alert alert-danger'> {{Session::get('fail')}}</div>
                @endif

             <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
             <div class=form-group>
                <leble for='name'>Full Name</leble>
                <input type='text' class='form-control' requied placeholder='Enter Full Name' name='name' value="{{old('name')}}">
                <span class='text-danger'> @error('name'){{$message}} @enderror</span>
             </div>

             <div class=form-group>
                <leble for='email'>Email</leble>
                <input type='email' class='form-control' requied placeholder='Enter E-mail' name='email' value="{{old('email')}}">
                <span class='text-danger'> @error('email'){{$message}} @enderror</span>

             </div>

             <div class=form-group>
                <leble for='password'>Password</leble>
                <input type='password' class='form-control' requied placeholder='Enter Password' name='password' value=''>
                <span class='text-danger'> @error('password'){{$message}} @enderror</span>

             </div>

             <div class=form-group>
                <button type='submit' class='btn btn-block btn-primary'>Register</button>
             </div>
            </form>
             <br>
             Already Registered !! <a href="login">Login Here</a>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" 
crossorigin="anonymous"></script>
</html>