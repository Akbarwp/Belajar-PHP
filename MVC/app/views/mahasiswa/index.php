<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <!-- Triggeer Button -->
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Mahasiswa
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mahasiswa" id="keyword" name="keyword" autocomplete="off">
                    <button class="btn btn-primary text-light btn-outline-success" type="submit" id="tombolCari" name="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a class="badge bg-danger float-end ms-1" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Apakah Anda yakin');">Hapus</a>

                        <a class="badge bg-warning float-end ms-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" data-id="<?= $mhs['id']; ?>">Ubah</a>

                        <a class="badge bg-primary float-end ms-1" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>

                        <div class="form-group mb-3">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                                <option selected>---Pilih Jurusan---</option>
                                <option value="S1 Meniup Gelembung">S1 Meniup Gelembung</option>
                                <option value="S1 Peniup Karang">S1 Peniup Karang</option>
                                <option value="S1 Guru Pengemudi">S1 Guru Pengemudi</option>
                                <option value="S1 Guru Klarinet">S1 Guru Klarinet</option>
                                <option value="S1 Pahlawan">S1 Pahlawan</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>