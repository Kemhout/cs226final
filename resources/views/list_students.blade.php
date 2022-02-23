<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h1>List Students</h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID Card</th>
            <th scope="col">Full Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Grade</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated at</th>
            <th scope="col">Action</th>
            <th scope="col">Check Additional Info</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $item)
          <tr>
            <th scope="row">{{ $item->id_card }}</th>
            <td>{{ $item->full_name }} </td>
            <td> {{ $item->phone_number }}</td>
            <td>{{ $item->grade }} </td>
            <td>{{ $item->created_at }} </td>
            <td> {{ $item->updated_at }} </td>
            <td>
                  <a href="/edit_students/{{$item->id_card}}" class="btn btn-primary btn-sm"><i class="bi-wrench"></i>  Edit</i></a>
                  <a href="/delete_students/{{$item->id_card}}" class="btn btn-danger btn-sm"><i class="bi-trash"></i>  Delete</i></a>
            </td>
            <td>
              @if(in_array($item->id_card, $student_info))
                <a href="/list_students_info/{{$item->id_card}}" class="btn btn-secondary btn-sm"><i class="bi-clipboard"></i>  Check</a>
              @else
                <a href="/add_students_info/{{$item->id_card}}" class="btn btn-warning btn-sm"><i class="bi-clipboard-plus"></i>  Add Student Info</a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/add_students" class="btn btn-primary"><i class="bi-person-plus-fill"></i>  Add Students</a>
</body>
</html>