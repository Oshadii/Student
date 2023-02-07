<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <a href="{{ url('/home') }}">Home page</a>
   <form action="{{ url('/home') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Age:</label>
        <input type="text" class="form-control" id="age" name="age">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <button value="submit">Submit</button>

   </form>
</body>
</html>
