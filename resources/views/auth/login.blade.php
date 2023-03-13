<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
     integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
     crossorigin="anonymous">
    <title>Login</title>
</head>
<boby>
    <div class='container'>
        <div class='row'>
           <div class='col-md-4 offset-md-4' style='margin-top:20px ;'>
            <h2> Login </h2>
            <hr>
            <form action="{{ url('login-user') }}" method="post">

            @if(Session::has('success'))
                <div class='alert alert-sussess'> {{Session::get('success')}}</div>
                @endif
                @if(Session::has('fail'))
                <div class='alert alert-danger'> {{Session::get('fail')}}</div>
            @endif

            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>


            <div class=form-group>
                <leble for='email'>Email</leble>
                <input type='email' class='form-control' requied placeholder='Enter E-mail' name='email' value="{{old('email')}}">
                <span class='text-danger'> @error('email'){{$message}} @enderror</span>

            </div>

            <div class=form-group>
                <leble for='password'>Password</leble>
                <input type='password' class='form-control' requied placeholder='Enter Password' name='password' value="">
                <span class='text-danger'> @error('password'){{$message}} @enderror</span>

            </div>

            <div class=form-group>
                <button type='submit' class='btn btn-block btn-primary'>Register</button>
            </div>
            </form>
            <br>
            New User !! <a href='registration'>Register Here </a>

           </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</html>