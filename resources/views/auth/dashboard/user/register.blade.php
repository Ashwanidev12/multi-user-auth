<!DOCTYPE html>
<html>
<body>

<h2>Register Form</h2>
<form action="{{route(user.create)}}" method="post" >
    @if(session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    @if(session::get('fail'))
    <div class=" alert alert-danger">
        {{ Session::get('failed') }}
    </div>
    @csrf

    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="name" value="{{old ('name')}}"><br>
    <span class="test-danger">@error('name'){{$message}}@enderror</span>
    <label for="lname">Email</label><br>
    <input type="text" id="lname" name="email" value="{{old('email')}}"><br><br>
    <span class="test-danger">@error('email'){{$message}}@enderror</span>
    <label for="lname">Password</label><br>
    <input type="text" id="lname" name="password" value="{{old('password')}}"><br><br>
    <span class="test-danger">@error('password'){{$message}}@enderror</span>
    <label for="lname">confirm Password</label><br>
    <input type="text" id="lname" name="cpassword" value="{{old('cpassword')}}"><br><br>
    <span class="test-danger">@error('cpassword'){{$message}}@enderror</span>
    <input type="submit" value="Submit">
    <a href="{{route('user.login')}}">I already have an account</a>
  </form> 
  
<p>register</p>

</body>
</html>