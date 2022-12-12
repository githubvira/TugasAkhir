                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Hero List</h1>
                    <!-- CONTENT -->





                    <!-- <?php foreach ($heroList as $key => $value) : ?>
                        <div class=''>
                            <?php print_r($value) ?>
                        </div>
                    <?php endforeach; ?> -->



                    <?=
                    $this->session->flashdata('message');
                    ?>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Label</th>
                                            <th>deskripsi</th>
                                            <th>file_foto</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Label</th>
                                            <th>deskripsi</th>
                                            <th>file_foto</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1 ?>
                                        <?php foreach ($heroList as $key => $item) : ?>
                                            <form action='<?= base_url("Admin/heroUpdate/"); ?>' method="post">
                                                <input type="hidden" name="id" value="<?= $item['id']; ?>">
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $item['label']; ?></td>
                                                    <td><?= $item['deskripsi']; ?></td>
                                                    <td>
                                                        <img src="<?= base_url("uploads/" . $item['file_foto']); ?>" width="100px" alt="">
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            </form>

                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>







                    <!-- END OF CONTENT -->
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->