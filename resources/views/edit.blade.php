<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <h4>Iformation Edit</h4>
    <div>
        <form method="post" action="/update/{{$data->id}}" >
            @csrf
            @method('put')
        <label for="">Name</label>
        <input type="text" placeholder="Enter name" name="name" value="{{$data->name}}">
        <br>
        <label for="">Email</label>
        <input type="text" placeholder="Enter Email" name="email" value="{{$data->email}}">
        <br>
        <label for="">Address</label>
        <input type="text" placeholder="Enter Address" name="address" value="{{$data->address}}">
        <br>
        <br>
        <button>Update</button>
    
        </form>
    </div>
</body>
</html>