<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Upade your User</title>
</head>
<body>
    <div class="container">
        <h1>Upade your user</h1>
        <a href="/" class="btn btn-info">Home</a>

        <form action="/users/{{$suser->id}}/edit" method="POST" class="mt-2">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-md-6">
                    <h3>User Information</h3>
                    <div class="form-group mt-2">
                        <label for="fname">First Nmae</label>
                        <input type="text" class="form-control" name="fname" id="fname" value="{{$suser->fname}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname" value="{{$suser->lname}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="uname">User Name</label>
                        <input type="text" class="form-control" name="uname" id="uname" value="{{$suser->uname}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$suser->email}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{$suser->phone}}">
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>