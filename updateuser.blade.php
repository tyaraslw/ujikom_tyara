<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
    body{
        background-color: #fff1ec; 
    };
</style>
<body>
@include('layouts.navU') 
<section class="">
  <!-- Jumbotron -->
  <br><br><br><br><br>
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" >
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Update<br />
            <span class="text-primary">User</span>
          </h1>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="/updateUser/{id}" method="POST" enctype="multipart/form-data">
              @method("POST")
              @csrf 
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="form-outline mb-4">
                         <label for="exampleFormControlText" class="form-label">Nama</label>
                         <textarea class="form-control" id="exampleFormControlText" name="isinama" required>{{$user->nama}}</textarea>
                </div>
                <!-- username input -->
                <div class="form-outline mb-4">
                         <label for="exampleFormControlText" class="form-label">Username</label>
                         <textarea class="form-control" id="exampleFormControlText" name="isiuser" required>{{$user->username}}</textarea>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                         <label for="exampleFormControlText" class="form-label">Password</label>
                         <textarea type="password" class="form-control" id="form3Example4" name="isipass" required>{{$user->password}}</textarea>
                <br><br>
                <select name="level" class="user">
                     <option value="admin">admin</option>
                     <option value="petugas">petugas</option>
                </select>
                </div><br>
                <!-- Submit button -->
                <input class="btn btn-primary" type="submit" value="Update"> 
                 <div class="text-center">
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>