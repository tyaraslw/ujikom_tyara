<nav class="navbar navbar-expand-lg fixed-top navbar-scroll shadow-0" style="background-color: #ffede7;">
  <div class="container">
    <a class="navbar-brand"href="{{url('home')}}">Kasir</a>
    <button class="navbar-toggler ps-0" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
      aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="d-flex justify-content-start align-items-center">
        <i class="fas fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarExample01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link px-3" href="#!">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#!">pembelian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="#!">stok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3" href="{{url('login')}}">login</a>
        </li>

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