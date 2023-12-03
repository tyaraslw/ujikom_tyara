<nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #ffede7;   box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.50)">
<div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/image/logo.png" alt="">
              </a>
    <a class="navbar-brand"href="{{url('home')}}">Kasir</a>
    <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="d-flex justify-content-start align-items-center">
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produk
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('produk')}}">Data Produk</a></li>
            <li><a class="dropdown-item" href="{{url('tambah_produk')}}">Tambah produk</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>  
        <li class="nav-item">
          <a class="nav-link px-3" href="{{url('')}}">Penjualan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="{{url('pelanggan')}}">Pelanggan</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link px-3" href="{{url('loginkasir')}}">login</a>
        </li> -->

        <div class="d-flex">
          <a class="nav-link" href="{{url('logout')}}">
            <font color="red">logout</font>
          </a>
        </div>
    <!-- <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form> -->
    </div>
</nav>