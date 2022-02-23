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
    <h1>Add Students</h1>
    <form action="/add_students" method="POST">
        @csrf
        <table>
            {{-- <tr><td>ID Card</td><td><input type="text" name="vaccination_card"/></td></tr> --}}
            <div class="form-group w-25 p-2">
                <label for="full_name">Full Name</label>
                <input type="text" name="full_name"  class="form-control" required/>
            </div> 
            <div class="form-group w-25 p-2">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number"  class="form-control" required/>
            </div>    
            <div class="form-group w-25 p-2">
                <label for="grade">Grade</label>
                <input type="number" name="grade"  class="form-control" required/>
            </div> 
            <input type="submit" class="btn btn-primary p-2" name="button_saver" value="Insert">
        </table>
    </form>
</body>
</html>