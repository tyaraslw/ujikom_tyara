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
@include('layouts.nav') 
    <br><br><br>
    <br>
    <center>
    <td><h2>Update here!</h2></td>
    </center>

       
            <div class="container">
                @method("POST")
                @csrf 
                <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
                     <textarea class="form-control" id="exampleFormControlTextarea1" name="isi_pelanggan" rows="3" required></textarea>
                     @error('isi_laporan')
                         <div> {{ $message }}</div>
                     @enderror
                </div>
                 
                <input class="btn btn-primary" type="submit" value="Kirim"> 
        </form> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>        
</body>
</html>