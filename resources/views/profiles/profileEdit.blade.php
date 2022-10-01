<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Update your profile</title>
</head>
<body>
    <div class="container">
        <h1>Update your profile</h1>
        <a href="/" class="btn btn-info">Home</a>

        <form action="/profiles/{{$sprofile->id}}/edit" method="POST" class="mt-2">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mt-2">
                        <label for="photo">Photo</label>
                        <input type="text" class="form-control" name="photo" id="photo" value="{{$sprofile->photo}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{$sprofile->address}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" value="{{$sprofile->date_of_birth}}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="bio">Biography</label>
                        <textarea class="form-control" name="bio" id="bio" cols="5" rows="4">{{$sprofile->bio}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <p class="m-0">Gender</p>
                        <div class="form-check d-inline-block">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="Male" {{$sprofile->gender == 'Male' ? 'checked' : ''}}>
                            <label for="male">Male</label>
                        </div>
                        <div class="form-check d-inline-block mx-3">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="Female" {{$sprofile->gender == 'Female' ? 'checked' : ''}}>
                            <label for="female">Female</label>
                        </div>
                        <div class="form-check d-inline-block mx-3">
                            <input type="radio" class="form-check-input" name="gender" id="others" value="Others" {{$sprofile->gender == 'Others' ? 'checked' : ''}}>
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