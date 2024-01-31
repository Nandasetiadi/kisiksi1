<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"> `   
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .card {
  border-radius: 15px; /* Softer corners */
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15); /* Subtle shadow */
  overflow: hidden; /* Prevent image overflow */
  background: linear-gradient(to bottom, #f5f5f5, #e5e5e5); /* Subtle gradient */
}

.card-img-top {
  width: 100%;
  height: 250px; /* Adjust height as needed */
  object-fit: cover; /* Ensure image fills the space */
}

.card-body {
  padding: 16px;
  text-align: center; /* Align content for a cleaner look */
}

.card-title {
  font-weight: bold;
  font-size: 1.2rem;
  margin-bottom: 0.5rem;
}

.card-text {
  color: #6c757d; /* Lighter text color for better readability */
}

.btn-primary, .btn-success {
  border-radius: 10px; /* Matching button corners */
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
  color: #fff;
}

.btn-primary:hover {
  background-color: #0069d9;
  border-color: #0062cc;
}
    </style>
</head>
<body>
<body style="background: linear-gradient(to bottom, #a9a9a9, #808080);">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="\img\kuas.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      atrox
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav ms-auto"> <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDarkDropdownMenuLink"> @if (Auth::guest())
              <li><a class="dropdown-item" href="/login">Login</a></li>
            @else
              <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{ route('actionlogout') }}">Log Out</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<a href="/" class="back-button btn btn-default">Back</a>
<div class="row">
  @foreach ($populer as $p)
    <div class="col-lg-4 col-md-6 p-2">
      <div class="card">
        <img src="assets/img/{{$p->gambar}}" class="card-img-top" alt="{{$p->nama}}" width="400" height="600">
        <div class="card-body">
          <h4 class="card-title">{{$p->nama}}</h4>
          <p class="card-text">{{$p->tipe}}</p>
          <a href="assets/img/{{$p->gambar}}" data-gallery="cardGallery" class="card-lightbox" title="{{$p->nama.' '.$p->tipe}}">
            <button class="btn btn-primary btn-sm"><i class="card"></i>SHOW</button>
          </a>
          @if(Auth::check())
            <a href="#ModalTambahpembelian{{$p->kode}}" data-bs-toggle="modal" title="Pesan">
              <button class="btn btn-success btn-sm"><i class="bx bx-link"></i>BELI</button>
            </a>
          @endif
        </div>
      </div>
        <div class="modal fade" id="ModalTambahpembelian{{$p->kode}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah pembelian</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body clearfix">
                <div class="card" style="width: 18rem;">
                  <img src="assets/img/{{$p->gambar}}" class="card-img-top" alt="{{$p->nama}}">
                  <div class="card-body">
                    <h5 class="card-title">Deskripsi :</h5>
                    <p class="card-text">Tipe : {{$p->tipe}}</p>
                    <p class="card-text">Jenis : {{$p->jenis}}</p>
                    <p class="card-text">Harga : Rp.{{$p->harga}}</p>
                    <p class="card-text">Stok : {{$p->stok}}</p>
                  </div>
                </div>
                <form action="/pembelian/storeinput" method="post" class="form-floating">
                  @csrf
                  <input type="hidden" name="kodepopuler" value="{{$p->kode}}">
                  <input type="hidden" name="harga" value="{{$p->harga}}">
                  <div class="form-floating p-1">
                    <input type="text" name="banyak" required="required" class="form-control">
                    <label for="floatingInputValue">Banyak</label>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Beli</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
</main><!-- End #main -->

<script src="/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/assets/js/bootsrap.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery-1.11.2.min.js"></script>
    <script src="/assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="/assets/js/npm.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function scrollToPopuler() {
      document.getElementById("populer").scrollIntoView({ behavior: "smooth" });
    }
  </script>
    
</body>
</html>