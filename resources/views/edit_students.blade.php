<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <h1>Edit Students</h1>
    <form action="/update_students/{{$student[0]->id_card}}" method="POST">
        @csrf
        <table>
            <div class="form-group w-25 p-2">
                <label for="id_card">ID Card</label>
                <input type="text" name="id_card"  class="form-control" value="{{$student[0]->id_card}}" readonly/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name"  class="form-control" value="{{$student[0]->full_name}}" required/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number"  class="form-control" value="{{$student[0]->phone_number}}" required/>
            </div> 
            <div class="form-group w-25 p-2">
                <label for="grade">Grade</label>
                <input type="number" name="grade"  class="form-control" value="{{$student[0]->grade}}" required/>
            </div> 
            <tr><td></td><td><input type="submit" name="button_updater" class="btn btn-primary p-2" value="Update"></td></tr>
        </table> 
    </form>
</body>
</html>