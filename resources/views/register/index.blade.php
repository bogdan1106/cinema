<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>

</body>
</html>

<form action="{{route('register')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input  type="text"  class="form-control" name="name">
    </div>
    <label for="name">Email</label>
    <div class="form-group">
        <input type="text"  class="form-control" name="email">
    </div>
    <label for="name">Pass</label>
    <div class="form-group">
        <input type="password"  class="form-control" name="password">
    </div>
    <button type="submit" class="btn-primary btn">Register</button>
</form>