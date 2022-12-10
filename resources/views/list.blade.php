<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <h4>Iformation <a href="/create">Add user</a></h4>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($request as $item)
            <tr>
                <td width="20">{{$loop->index+1}}</td>
                <td width="">{{$item->name}}</td>
                <td width="20">{{$item->email}}</td>  
                <td width="20">{{$item->address}}</td>
                <td>
                   <a href="/edit/{{$item->id}}">
                <button>

                    Update
                </button>                 
                </a>
                   <a href="/delete/{{$item->id}}">
                <button>

                    Delete
                </button>                 
                </a>

        
                </td>
            </tr>
            @endforeach
        </tbody> 
    </table>
</body>
</html>