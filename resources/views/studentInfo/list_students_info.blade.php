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
    <h1>List Student Info</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Student Card</th>
              <th scope="col">Parent Name</th>
              <th scope="col">Parent Phone</th>
              <th scope="col">Scholarship</th>
              <th scope="col">Enroll Date</th>
              <th scope="col">Action</th>
              <th scope="col">Created At</th>
              <th scope="col">Updated at</th>
            </tr>
          </thead>
        <tbody>
            @foreach ($students as $item) 
            <tr>
              <th scope="row"> {{ $item->student_card }} </th>
                  <td> {{ $item->parent_name }} </td>
                  <td> {{ $item->parent_phone }} </td>
                  <td> {{ $item->scholarship }} </td>
                  <td> {{ $item->enroll_date }} </td>
                  <td>
                  <a href="/edit_students_info/{{$item->student_card}}" class="btn btn-primary btn-sm"><i class="bi-wrench"></i>  Edit</a>
                  <a href="/delete_students_info/{{$item->student_card}}" class="btn btn-danger btn-sm"><i class="bi-trash"></i>  Delete</a>
                  </td>
                  <td> {{ $item->created_at }} </td>
                  <td> {{ $item->updated_at }} </td>
                  {{-- <td> <a href="/list_students_info/{{$item->id_card}}">Check</a> </td> --}}
              </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>