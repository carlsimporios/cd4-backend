<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Design</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        input,
        select {
            display: block;
            margin: 10px 0;
            padding: 10px;
            width: calc(100% - 20px);
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="{{url('storeGrade')}}" method="POST">
        @csrf
        @method('POST')

        <label for="student_id">Student:</label>
        <select name="student_id" id="student_id">
            @foreach ( $students as $student)
                <option value="{{$student->id}}">{{$student->name}}</option>
            @endforeach
        </select>

        <label for="course_id">Course:</label>
        <select name="course_id" id="course_id">
            @foreach ( $courses as $course)
                <option value="{{$course->id}}">{{$course->title}}</option>
            @endforeach
        </select>

        <label for="grade">Grade:</label>
        <input type="text" name="grade" placeholder="Enter grade">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
