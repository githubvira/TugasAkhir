                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Product</h1>
                    <!-- CONTENT -->


                    <div class="container">
                        <div class="col-md-12">
                            <form class="form" method="post" action="<?= base_url('ControlPanel/insertProduct'); ?>" enctype="multipart/form-data">
                                <div class="panel panel-dark">
                                    <div class="panel-heading text-center" style="background: #808080; color:#ffffff">
                                        <b>Add Product </b>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan nama product" value="abc" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga Produk</label>
                                            <input type="number" name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukkan Harga" value="123" required>
                                        </div>


                                        <div class="form-group">
                                            <label>Jenis Produk</label>
                                            <input type="text" name="jenis_produk" id="jenis_produk" class="form-control" placeholder="Masukkan Jenis Produk" value="abc" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi" value="abc" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Input Gambar</label>
                                            <input class="form-control" type="file" id="file_foto" name="file_foto">
                                        </div>

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