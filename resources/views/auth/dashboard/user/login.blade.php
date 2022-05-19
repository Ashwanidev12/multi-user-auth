<!DOCTYPE html>
<html>
<body>
​
<h2>HTML Forms</h2>
​
<form action="{{route('user.check')}}" method="post">
  <label for="fname">Email:</label><br>
  <input type="text" id="email" name="email" value="{{old('email')}}"><br>
  <span class="text-danger">@error('email'){{$message}}</span>
  <label for="lname">Password:</label><br>
  <input type="text" id="password" name="password" value="{{old('password')}}"><br><br>
  <span class="text-danger">@error('password'){{$message}}</span>
  <input type="submit" value="Submit">
</form> 
​
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
​
</body>
</html>
​