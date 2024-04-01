<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="text" name="name">
    </div>
    <div>
        <input type="email" name="email">
    </div>

      <div>
        <input type="file" name="image">
    </div>
    <div>
       <button>Submit</button>
    </div>
  </form>
</body>
</html>
