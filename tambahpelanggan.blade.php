<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah-pelanggan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<style>
    body{
        background-color: #fff1ec; 
    };

</style>
<body>
@include('layouts.nav') 
     <br>
     <br>
     <br>
     <br>
     <h3 style="text-align:center;">{{$isi}}</h3>
     <br>
        <form action="tambah-pelanggan" method="POST" enctype="multipart/form-data">
            <div class="container">
            <div class="card">
            <div class="card-body py-5 px-md-8">
                <div class="row justify-content-center">
                  <div class="col-md-9">
                    @method("POST")
                    @csrf 
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">Nama Pelanggan</label>
                         <input type="text" class="form-control" id="exampleFormControlText" name="nama">
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">Alamat</label>
                         <input type="text" class="form-control" id="exampleFormControlText" name="alamat">
                    </div>
                    <div class="mb-3">
                         <label for="exampleFormControlText" class="form-label">No telp</label>
                         <input type="text" class="form-control" id="exampleFormControlText" name="telp">
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" value="simpan"> 
                    </div>
                </div>
            </div>
        </form> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>