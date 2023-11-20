<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class=" card-header justify-content-center">
                    Form Tambah Data Mahasiswa
                </div>

                <div class="card-body">
                    <form action="<?= base_url('Prodi/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">

                        </div>
                        <div class="form-group">
                            <label for="nim">Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="ruangan">

                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" class="form-control" id="jurusan" class="form-control">
                                <option value="">Jurusan</option>
                                <option value="JTI">JTI</option>
                                <option value="Industri">Industri</option>
                                <option value="Akuntan">Akuntansi Perpajakan</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="nim">Akreditasi</label>
                            <input type="text" name="akreditasi" class="form-control" id="akreditasi" placeholder="akreditasi">

                        </div>
                        <div class="form-group">
                            <label for="email">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="nama kapordi">

                        </div>
                        <div class="form-group">
                            <label for="email">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="tahun berdiri">

                        </div>
                        <div class="form-group">
                            <label for="email">Output Lulusan</label>
                            <input type="text" name="lulusan" class="form-control" id="lulusan" placeholder="Output Lulusan">

                        </div>

                        <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Mahasiswa </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>