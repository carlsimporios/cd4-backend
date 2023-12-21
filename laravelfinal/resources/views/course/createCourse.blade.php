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
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            width: 1000px;
        }

        input {
            display: block;
            margin: 10px 0;
            padding: 10px;
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
    </style>
</head>
<body>
    <form action="{{url('storeCourse')}}" method="POST">
        @csrf
        @method('POST')
        <label for="title">Course:
        <input type="text" name="title" placeholder="Enter your title">
    </label>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
