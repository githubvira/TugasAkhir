                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Product</h1>
                    <!-- CONTENT -->


                    <div class="container">
                        <div class="col-md-12">
                            <form class="form" method="post" action="<?= base_url('ControlPanel/insertProduct'); ?>" enctype="multipart/form-data">
                                <!-- <center><img src="SITAMU 2.png" width="250px;"></center> -->
                                <div class="panel panel-dark">
                                    <div class="panel-heading text-center" style="background: #808080; color:#ffffff">
                                        <b>Add Product </b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan product Anda" value="abc" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Produk</label>
                                            <input type="number" name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukkan deskripsi" value="123" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Produk</label>
                                            <input type="text" name="jenis_produk" id="jenis_produk" class="form-control" placeholder="Masukkan deskripsi" value="abc" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi" value="abc" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Input Gambar</label>
                                            <input class="form-control" type="file" id="file_foto" name="file_foto">
                                        </div>

                                        <!-- <div>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" nama="status">
                                <label class="form-check-label" for="flexCheckDefault">Disetujui</label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" nama="status">
                                <label class="form-check-label" for="flexCheckDefault">Belum Disetujui</label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" nama="status">
                                <label class="form-check-label" for="flexCheckDefault">Ditolak</label>
                            </div> -->


                                        <!-- <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Input Gambar</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="gambar">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div> -->
                                        <!-- 
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input" nama="status">
                                    </div>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with checkbox">
                            </div> -->
                                        <button type="submit" class="btn btn-success center-block">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>














                    <!-- CONTENT -->

                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->