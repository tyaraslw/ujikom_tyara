<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/home.css">
  <title>produk</title>
</head>
<body>
<div class="d-grid gap-2 col-6 mx-auto">
  <br><br><br><br>
  <a class="btn btn-outline-secondary" type="button" href="tambah-pelanggan">Tambah Pelanggan</a>
</div>
  @include('layouts.nav') 
    <br><br>
      <h3 style="text-align:center;">{{$TextIsi}}</h3>
      <br>
        <div class="container">
          <table class="table"> 
            <tr>
              <th scope="col" class="table-danger">Nama</th>
              <th scope="col" class="table-danger">Alamat</th>
              <th scope="col" class="table-danger">No telp</th>
              <th scope="col" class="table-danger">opsi</th>
            </tr>

              @foreach ($pelanggan as $pelanggan)
            <tr>
              <td>{{$pelanggan->NamaPelanggan}}</td>  
              <td>{{$pelanggan->Alamat}} </td>
              <td>{{$pelanggan->NomorTelepon}} </td>
            <td>
            <a type="button" class="btn btn-outline-danger" href="hapusPelanggan/{{$pelanggan->PelangganID}}">Delete</a>
            <a type="button" class="btn btn-outline-info" href="update/{{$pelanggan->PelangganID}}">Update</a>     
            </form>
          </td>
      </tbody>
          </tr>
         @endforeach
          </table>
       </div> 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>