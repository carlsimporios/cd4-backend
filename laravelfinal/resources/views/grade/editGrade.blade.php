<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Grade</h2>

    <form method="post" action="{{ url('updateGrade', $grade->id) }}">
        @csrf
        @method('PATCH')

        <label for="student_id">Student:</label>
        <select name="student_id" required>
            @foreach($students as $student)
                <option value="{{ $student->id }}" {{ $grade->student_id == $student->id ? 'selected' : '' }}>
                    {{ $student->name }}
                </option>
            @endforeach
        </select>

        <label for="course_id">Course:</label>
        <select name="course_id" required>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ $grade->course_id == $course->id ? 'selected' : '' }}>
                    {{ $course->title }}
                </option>
            @endforeach
        </select>

        <label for="grade">Grade:</label>
        <input type="text" name="grade" value="{{ $grade->grade }}" required>

        <button type="submit">Update Grade</button>
    </form>
    <style>
        /* public/css/style.css */

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    width: 50%;
    margin: 20px auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

select, input {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

    </style>
</body>
</html>
