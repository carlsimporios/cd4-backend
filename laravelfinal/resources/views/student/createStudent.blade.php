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
            background-color: #155617;
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
            padding: 40px;
            border-radius: 8px;
            width: 60%; /* Adjusted width to make the form larger */
            max-width: 600px; /* Set a maximum width for larger screens */
            text-align: center; /* Center the form content */
            transition: transform 0.3s ease-in-out;
        }

        input {
            display: block;
            margin: 15px auto; /* Centered margin */
            padding: 15px;
            width: 100%;
            box-sizing: border-box;
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

        form:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <form action="{{url('storeStudent')}}" method="POST">
        @csrf
        @method('POST')
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name">

        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Enter your email">

        <input type="submit" value="Submit">
    </form>
</body>
</html>
