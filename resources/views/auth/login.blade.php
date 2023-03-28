<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login page</title>
  <link rel="stylesheet" href="{{ asset('dist/css/login.css') }}">
  
</head>
<body>
  <section>
    <div class="Leaves">
      <div class="set">
      <div><img src="{{asset('images/leaf_01.png')}}" alt="asdasda"></div>
      <div><img src="{{asset('images/leaf_02.png')}}" alt=""></div> 
      <div><img src="{{asset('images/leaf_03.png')}}" alt=""></div> 
      <div><img src="{{asset('images/leaf_04.png')}}" alt=""></div> 
      <div><img src="{{asset('images/leaf_01.png')}}" alt=""></div>
      <div><img src="{{asset('images/leaf_02.png')}}" alt=""></div> 
      <div><img src="{{asset('images/leaf_03.png')}}" alt=""></div> 
      <div><img src="{{asset('images/leaf_04.png')}}" alt=""></div>   
      </div> 
    </div>
    <img src="{{ asset('images/bg.jpg')}}" alt="" class="bg">
    <img src="{{ asset('images/girl.png')}}" alt="asdasd" class="girl">
    <img src="{{ asset('images/trees.png')}}" alt="" class="trees">
    <div class="login">
      <h2>Sign in </h2>
      <form action="{{('login')}}" method="post">
      @csrf
       <div class="input-box">
          <input type="text" name="email" placeholder="email">
        <div class="input-box">
          <input type="password" name="password" placeholder="password">
        </div>
        <div class="input-box">
          <input type="submit"  value="Sign In" id="btn">
        </div>
        <div class="group">
          <a href="{{ url ('auth/registrasi')}}">register</a>
          <a href="#">forgot password</a>
        </div>
      </div>
    </div>
      </form>
       
</section>
</body>
</html>