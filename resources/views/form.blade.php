<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/form') }}"  method="POST">
      @csrf
        <label for=""></label>
        <input type="text" name="uname"><br>
        <input type="text" name="password"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>