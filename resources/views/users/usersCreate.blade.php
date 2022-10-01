<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Create A new user</title>
</head>
<body>
    <div class="container">
        <h1>Create your user</h1>
        <a href="/" class="btn btn-info">Home</a>
        <a href="/users" class="btn btn-info">Show all users</a>

        <form action="/users/create" method="POST" class="mt-2">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <h3>User Information</h3>
                    <div class="form-group mt-2">
                        <label for="fname">First Nmae</label>
                        <input type="text" class="form-control" name="fname" id="fname">
                    </div>
                    <div class="form-group mt-2">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname">
                    </div>
                    <div class="form-group mt-2">
                        <label for="uname">User Name</label>
                        <input type="text" class="form-control" name="uname" id="uname">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group mt-2">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Profile Information</h3>
                    <div class="form-group mt-2">
                        <label for="photo">Photo</label>
                        <input type="text" class="form-control" name="photo" id="photo">
                    </div>
                    <div class="form-group mt-2">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address">
                    </div>
                    <div class="form-group mt-2">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                    </div>
                    <div class="form-group mt-2">
                        <label for="bio">Biography</label>
                        <textarea class="form-control" name="bio" id="bio" cols="5" rows="4"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <p class="m-0">Gender</p>
                        <div class="form-check d-inline-block">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="Male">
                            <label for="male">Male</label>
                        </div>
                        <div class="form-check d-inline-block mx-3">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="Female">
                            <label for="female">Female</label>
                        </div>
                        <div class="form-check d-inline-block mx-3">
                            <input type="radio" class="form-check-input" name="gender" id="others" value="Others">
                            <label for="others">Others</label>
                        </div>
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</body>
</html>