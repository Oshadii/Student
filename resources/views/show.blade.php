<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <a href="{{ url('/home') }}">Goto home</a>



        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name:</label>
             <h3>{{ $student->name }}</h3>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Age:</label>
            <h3>{{ $student->age }}</h3>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email:</label>
            <h3>{{ $student->email}}</h3>
          </div>

</body>
</html>