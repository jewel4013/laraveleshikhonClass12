<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>User Show</title>
</head>
<body>
    <div class="container">
        <h1>{{$suser->fname}} Data</h1>
        <a href="/" class="btn btn-info">Home</a>
        <a href="/profiles" class="btn btn-info">All profiles</a>


        {{-- $suser   $suser->profile --}}
        <div class="row">
            <div class="col-md-6">
                <h2>User information</h2>

                <div class="card" style="width: 80%">
                    <p class="card-img-top">{{$suser->profile->photo}}</p>
                    <div class="card-body">
                        <h4 class="card-titile">{{$suser->profile->gender == 'Male' ? 'Mr' : ($suser->profile->gender == 'Female' ? 'Mrs' : 'SML')}} {{$suser->fname}} {{$suser->lname}}</h4>
                        <p class="card-text">{{$suser->profile->bio}}</p>
                        <a href="" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2>Profile information</h2>
                <table class="table">
                    <tr>
                        <th style="width: 35%">Your user name</th>
                        <td>:</td>
                        <td>{{$suser->uname}}</td>
                    </tr>
                    <tr>
                        <th>Your Phone Number</th>
                        <td>:</td>
                        <td>{{$suser->phone}}</td>
                    </tr>
                    <tr>
                        <th>Your Email Address</th>
                        <td>:</td>
                        <td>{{$suser->email}}</td>
                    </tr>
                    <tr>
                        <th>Your Address</th>
                        <td>:</td>
                        <td>{{$suser->profile->address}}</td>
                    </tr>
                    <tr>
                        <th>Your Date of Birth</th>
                        <td>:</td>
                        <td>{{$suser->profile->date_of_birth}}</td>
                    </tr>
                    <tr>
                        <th>Your are a</th>
                        <td>:</td>
                        <td>{{$suser->profile->gender}}</td>
                    </tr>
                </table>





                <a href="/users/{{$suser->id}}/edit" class="btn btn-primary mt-2">User Edit</a>
                <a href="/profiles/{{$suser->profile->id}}/edit" class="btn btn-primary mt-2">Profile Edit</a>
                <form action="/users/{{$suser->id}}/delete" class="d-inline-block" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>



    </div>
</body>
</html>