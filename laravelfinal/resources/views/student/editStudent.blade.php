<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student Form</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #155617;
        }

        .container {
            display: flex;
            flex-direction: column; /* Set flex-direction to column for vertical alignment */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 8px;
            background-color: #fff;
            width: 1000px;
            max-width: 600px;
            text-align: center;
        }


        form {
            display: table-column;

        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input {
            display: block;
            margin-bottom: 20px;
            padding: 15px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }


        .delete{
            background-color: #e40000;
            color: white;
            cursor: pointer;
            display: block;
            margin-bottom: 20px;
            padding: 15px;
            width: 100%;
            box-sizing: border-box;
        }
        .delete:hover{
            background-color: #8d1414;
        }
    </style>
</head>
<body>

@if ($student)
    <div class="container">
        <form action="{{ url('student/update', ['id' => $student->id]) }}" method="POST">
            @csrf
            @method('POST')
            <h2>Edit Student</h2>
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $student->name }}">

            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ $student->email }}">

            <input type="submit" value="Submit">

        </form>
        <a href="{{url('deleteStudent',$student->id)}}">
            <button class="delete" onclick="return confirm('Are you sure to delete?');">Delete</button>

        </a>

    </div>
@endif

</body>
</html>
