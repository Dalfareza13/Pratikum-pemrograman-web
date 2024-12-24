<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daffa Alfareza </title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?=base_url()?>CSS/tyle.css" />
  </head>
  <body>
   
      <div class="row m-3">
        <div class="col-12 text-end">
          <a href="<?= base_url()?>chart" class="btn btn-warning"
            >Keranjang Belanja <span class="badge text-bg-primary">4</span></a
          >
        </div>
      </div>
      <div class="row bg-primary-subtle">
        <div class="col-6 p-5">
          <h1>Selamat datang di toko buku online</h1>
          <p>kami menyediakan buku-buku dari berbagai penerbit nasional</p>
          <a href="#1" class="btn btn-success">Lihat Produk</a>
        </div>
        <div class="col-6 p-5">
          <h1>temukan buku favorit anda</h1>
          <form action="">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Judul Buku"
              />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Pengarang" />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Penerbit" />
            </div>
            <div class="mb-3">
              <button class="btn btn-primary">Cari</button>
            </div>
          </form>
        </div>
      </div>

      <div class="container">
      <div class="row m-1 g-4" id="1">
        <h2>Buku Best seller</h2>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Sherlock Holmes</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The Complete Sherlock Holmes</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Omniscent Readers Viewpoint</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Perahu Kertas</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku5.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Percy Jackson</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku6.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">The Beginning After The End</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku7.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Segala Yang Disapa Langit </h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="<?=base_url()?>image/buku8.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Negeri 5 Menara</h5>
              <p class="card-text">Rp. 20.000</p>
              <a href="#" class="btn btn-danger">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-success text text-white py-3 text text-center mt-5">
      <div class="container">
        Copyright 2024. Toko buku online kelas B. All Rights Reserved
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
