<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Register a new book</h1>
<body>
    <form action="/books" method="post">
        @csrf
        <div>
            <label for="title">Book title:</label>
            <input type="text" name="title">
        </div>
         <div>
            <label for="title">Book author:</label>
            <input type="text" name="author">
        </div>
         <div>
            <label for="title">Book Realease date:</label>
            <input type="text" name="released_at">
        </div>
         <div>
            <label for="title">Book description:</label>
            <textarea name="description" type="text"></textarea>
        </div>
        <input type="submit" value="Submit">



    </form>
</body>
</html>