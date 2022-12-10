<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <h4>Iformation Added</h4>
    <div>
        <form action="/store" method="post">
            @csrf
        <label for="">Name</label>
        <input type="text" placeholder="Enter name" name="name">
        <br>
        <label for="">Email</label>
        <input type="text" placeholder="Enter Email" name="email">
        <br>
        <label for="">Address</label>
        <input type="text" placeholder="Enter Address" name="address">
        <br>
        <br>
        <button>Register</button>
    
        </form>
    </div>
</body>
</html>