<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div>
        <a href="{{ url('home/create') }}" >Add Student Details</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <form action="{{ url('/home' .'/'. $item->id) }}" method="post">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('confirm delete?')">delete</button>

                    <a href="{{  url('/home/' . $item->id)  }}" class="btn btn-success btn-sm">show</a>

                    <a href="{{ url('/home/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                    </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
    </div>
</body>
</html>
