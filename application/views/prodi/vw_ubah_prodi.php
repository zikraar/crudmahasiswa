div class="container">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">

            </div>

            <div class="card-body">
                <form action="<?= base_url('Prodi/update');?> " method="POST">
                <input type ="hidden" name="id" value = "<?= $prodi['id']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Prodi</label>
                        <input type="text" name="nama" value = "<?= $prodi['nama']; ?>" class="form-control" id="nama" placeholder="Nama">

                    </div>
                    <div class="form-group">
                        <label for="nim">Ruangan</label>
                        <input type="text" name="ruangan" value = "<?= $prodi['ruangan']; ?>" class="form-control" id="ruangan" placeholder="ruangan">

                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" value = "<?= $prodi['jurusan']; ?>" class="form-control" id="jurusan" class="form-control">
                            <option value="">Jurusan</option>
                            <option value="JTI">JTI</option>
                            <option value="Industri">Industri</option>
                            <option value="Akuntan">Akuntansi Perpajakan</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="nim">Akreditasi</label>
                        <input type="text" name="akreditasi" value = "<?= $prodi['akreditasi']; ?>" class="form-control" id="akreditasi" placeholder="akreditasi">

                    </div>
                    <div class="form-group">
                        <label for="email">Nama Kaprodi</label>
                        <input type="text" name="nama_kaprodi" value = "<?= $prodi['nama_kaprodi']; ?>" class="form-control" id="nama_kaprodi" placeholder="nama kapordi">

                    </div>
                    <div class="form-group">
                        <label for="email">Tahun Berdiri</label>
                        <input type="text" name="tahun_berdiri" value = "<?= $prodi['tahun_berdiri']; ?>" class="form-control" id="tahun_berdiri" placeholder="tahun berdiri">

                    </div>
                    <div class="form-group">
                        <label for="email">Output Lulusan</label>
                        <input type="text" name="lulusan" value = "<?= $prodi['lulusan']; ?>" class="form-control" id="lulusan" placeholder="Output Lulusan">

                    </div>
                    
                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Edit Program Studi</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>