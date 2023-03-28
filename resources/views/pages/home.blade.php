<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Ngebakso</title>
</head>

<body id="page-top">
  <nav class="navbar navbar-expand-lg navbar-primery bg-secondary" id="main nav">
    <div class="container">
      <a class="navbar-brand" href="#">ngebakso</a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <button class="btn  btn-primary mt-3 m-5">Tambah Produk</button>
    <div class="row m-5">
      <div class="col-md-3">
        <div class="card">
          <img
          src=" {{ asset('assets/img/baso.jpg') }} " alt="gambar baso">
          <div class="card-body">
            <h5 class="card-title M-1">Bakso Kuah</h5>
            <p class="card-text M-1">Bakso dengan berbagai variasi dijamin anda tidak bosan</p>
            <p class="card-text M-1">Rp.15.000</p>
            <button class="btn btn-success">Edit</button>
            <button class="btn btn-danger">Hapus</button>
            <button class="btn btn-info">To Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>