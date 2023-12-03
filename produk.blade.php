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
  @include('layouts.nav') 
    <br>
    <br>
    <br>
    <br>
      <h3 style="text-align:center;">{{$TextIsi}}</h3>
      <br>
        <div class="container">
          <table class="table" > 
            <tr>
              <th scope="col" class="table-danger">Nama_Produk</th>
              <th scope="col" class="table-danger">Harga</th>
              <th scope="col" class="table-danger">Stok</th>
              <th scope="col" class="table-danger">opsi</th>
            </tr>

              @foreach ($produk as $produk)
            <tr>
              <td>{{$produk->NamaProduk}}</td>  
              <td>{{$produk->Harga}} </td>
              <td>{{$produk->Stok}} </td>
            <td>
            <a type="button" class="btn btn-danger" href="hapusProduk/{{$produk->ProdukID}}">Delete</a>
            <!-- <a href="update/{{$produk->ProdukID}}">Update</a>-->
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