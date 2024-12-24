<?= $this->extend('admin/template'); ?>

<?= $this->section('main'); ?>
<h2>Daftar Buku</h2>

<?php if(session('sukses')):?>
<div class="mb-3">
    <div class="alert alert-success">
        <strong>Berhasil!</strong> <?= session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb-3">
    <div class="alert alert-danger">
        <strong>Gagal!</strong> <?= session('error');?>
    </div>
</div>
<?php endif;?>

<div class="">
    <a href="<?= base_url('admin/daftar-buku/tambah') ?>" class="btn btn-primary">
        Tambah Buku
    </a>
</div>

<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penggarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Cover</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>The Principles of Power </td>
                <td>Dion Yulianto</td>
                <td>Gramedia</td>
                <td>2024</td>
                <td>
                    <img src="<?= base_url('Image/buku1.jpg')?>" alt="" style="width:150px; height: auto;">
                </td>
                <td>
                    Rp.150.000
                </td>
                <td>
                    <a href="<?= base_url('admin/daftar-buku/edit')?>" class="btn btn-success">Edit</a>
                    <a href="<?= base_url('admin/daftar-buku/hapus')?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>