
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
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #155617;
}

h2 {
    text-align: center;
    color: #333;
}
.container{
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

.delete-btn {
    width: 100%;
    background-color: #ce1b1b;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;
}
.update-btn{
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    cursor: pointer;

}
.delete-btn:hover {
    background-color: #6e0b0b;
}
.update-btn:hover {
    background-color: #003b14;
}

        </style>
    </head>
    <body>

@if ($course)
    <div class="container">
        <form action="{{ url('course/update', ['id' => $course->id]) }}" method="POST">

            @csrf
            @method('POST')
            <h2>Edit Course</h2>
            <label for="title">Course:</label>
            <input type="text" name="title" value="{{ $course->title  }}">

            <input type="submit" class="update-btn" value="Submit">
        </form>
        <a href="{{url('deleteCourse',$course->id)}}">
            <button class="delete-btn" onclick="return confirm('Are you sure to delete?');">Delete</button>

        </a>
    </div>
@endif
    </body>
    </html>

</html>
