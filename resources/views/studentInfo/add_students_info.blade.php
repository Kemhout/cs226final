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
    <h1>Add Student Info</h1>
    <form action="/add_students_info/{{$student[0]->id_card}}" method="POST">
        @csrf
        <table>
            {{-- <tr><td>ID Card</td><td><input type="text" name="vaccination_card"/></td></tr> --}}
            <div class="form-group w-25 p-2">
                <label for="student_card">Student Card</label>
                <input type="text" name="student_card"  class="form-control" value="{{$student[0]->id_card}}" readonly/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="parent_name">Parent Name</label>
                <input type="text" name="parent_name"  class="form-control" required/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="parent_phone">Parent Phone</label>
                <input type="text" name="parent_phone"  class="form-control" required/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="scholarship">Scholarsip</label>
                <input type="number" name="scholarship"  class="form-control" required/>
            </div>
            <div class="form-group w-25 p-2">
                <label for="enroll_date">Enroll Date</label>
                <input type="date" name="enroll_date"  class="form-control" required/>
            </div>
            
            <input type="submit" name="button_saver" class="btn btn-primary p-2" value="Insert">
        </table>
    </form>
</body>
</html>