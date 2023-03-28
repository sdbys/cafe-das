<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>register </></title>
  <link rel="stylesheet" href="{{ asset('dist/css/register.css') }}">
  
</head>
<body>
  <section>
    <form action="{{ route("signup")}}" method="post">
      @csrf
      <h1>Sign Up</h1>
      {{-- <img src="{{ asset('images/back.jpg') }}" alt=""> --}}
      <input type="text" name="name" placeholder="Username">
      <input type="text" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <button type="submit">Sign Up</button>
    </form>
  </section>
  
</body>
</html>