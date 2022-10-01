<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>All Profile List</title>
</head>
<body>
    <div class="container">
        <h1>All Profile here</h1>
        <a href="/" class="btn btn-info">Home</a>
        <a href="/users/create" class="btn btn-info">Create a nuew user and profile</a>
        

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Bio</th>
                    <th>Gender</th>
                    <th>Owner</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allprofile as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->photo}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->date_of_birth}}</td>
                        <td>{{$data->bio}}</td>
                        <td>{{$data->gender}}</td>
                        <td>
                            <a href="/users/{{$data->owner->id}}" class="">{{$data->owner->fname}}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>