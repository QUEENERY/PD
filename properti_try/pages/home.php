<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROPERTI</title>
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
</head>
<body>
<?php
  session_start();
    if(isset($_POST)) {
      $_SESSION['post'] = $_POST;
    }
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="home.php">Properti Rumah</a>
      <button class="navbar-toggler" type="button" value-bs-toggle="collapse" value-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="#">Home</a>
          <a class="nav-link" href="#">Transaksi</a>
        </div>
          <div class="navbar-nav ms-auto">
            <a class="nav-link" href="../index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <div class="isi">
  <section id="hero" class="mb-3">
    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="mt-5">ℙℝ𝕆ℙ𝔼ℝ𝕋𝕀<br></h1>
          <p></p>

          <a href="#paket" class="btn btn-md btn-primary px-5">Pilih Rumah</a>
        </div>
        <div class="col-lg-6">
          <img src="../assets/img/home.webp" alt="" class="img-fluid mx-auto d-block" width="400">
        </div>
      </div>
    </div>
  </section>
  </div>
  <!-- End Hero -->

  <!-- Paket -->
  <div class="paket">
  <section id="paket" class="mb-3 py-3 container-fluid bg-light">
    <div class="container mb-4">
      <h3 class="mb-4 mt-2 text-center">𝒟𝒜𝐹𝒯𝒜𝑅 𝒫𝒪𝒟𝒰𝒦 𝒫𝑅𝒪𝒫𝐸𝑅𝒯𝐼 𝑅𝒰𝑀𝒜𝐻</h3>

      <div class="row">
        <?php
        require "../data/produk.php";
          foreach ($propertirumah as $data => $value) {
        ?>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card my-2 h-100">
            <img src="../assets/img/<?=$value[3] ?>" name="gambar" width="120px" height="280px" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title"><?= $value[0] ?></h5> 
              <p><?= $value[1] ?></p>
            </div>
            <div class="card-footer">
              <h5>Rp. <?= $value[2] ?></h5>
              <div class="d-grid gap-2 mt-2">
            <a href="transaksi.php?id=<?=$data ?>" class="btn btn-outline-primary">ᴘɪʟɪʜ ʀᴜᴍᴀʜ</a>
              </div>
            </div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
  </section>
  </div>
  <!-- End Paket -->
<?php
    include 'footer.php';
?>

  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>