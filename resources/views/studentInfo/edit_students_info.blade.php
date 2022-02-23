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
    <h1>Edit Student Info</h1>
    <form action="/update_students_info/{{$student[0]->student_card}}" method="POST">
        @csrf
        <table>
            <div class="form-group w-25 p-2">
                <label for="student_card">Student Card</label>
                <input type="text" name="student_card"  class="form-control" value="{{$student[0]->student_card}}" readonly/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="parent_name">Parent Name</label>
                <input type="text" name="parent_name"  class="form-control" value="{{$student[0]->parent_name}}" required/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="parent_phone">Parent Phone</label>
                <input type="text" name="parent_phone"  class="form-control" value="{{$student[0]->parent_phone}}" required/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="scholarship">Scholarship</label>
                <input type="number" name="scholarship" class="form-control" value="{{$student[0]->scholarship}}" required/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="enroll_date">Enroll</label>
                <input type="date" name="enroll_date" class="form-control" value="{{$student[0]->enroll_date}}" required/>
            </div>
            <input type="submit" name="button_updater"  class="btn btn-primary p-2" value="Update">
        </table>
    </form>
</body>
</html>
