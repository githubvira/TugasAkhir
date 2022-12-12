                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <!-- Page Heading -->
                  <h1 class="h3 mb-4 text-gray-800">Hero Evaluate</h1>
                  <!-- CONTENT -->






                  <?= $this->session->flashdata('message'); ?>
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
                              <th>status_persetujuan</th>
                              <th>Update</th>
                              <th>Delete</th>
                              <th>Edit</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>No</th>
                              <th>Label</th>
                              <th>deskripsi</th>
                              <th>file_foto</th>
                              <th>status_persetujuan</th>
                              <th>Update</th>
                              <th>Delete</th>
                              <th>Edit</th>
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
                                  <td>
                                    <select name="status_persetujuan" id="status_persetujuan">
                                      <option value="belum disetujui" <?= $item['status_persetujuan'] == 'belum disetujui' ? 'selected' : ''; ?>>belum disetujui </option>
                                      <option value="disetujui" <?= $item['status_persetujuan'] == 'disetujui' ? 'selected' : ''; ?>>disetujui</option>
                                      <option value="ditolak" <?= $item['status_persetujuan'] == 'ditolak' ? 'selected' : ''; ?>>ditolak</option>
                                    </select>
                                  </td>
                                  <td>
                                    <button type="submit" class="btn btn-info btn-icon-split">
                                      <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                      </span>
                                      <span class="text">Update</span>
                                    </button>
                                  </td>
                                  <td>
                                    <a href="<?= base_url('Admin/deleteHero/' . $item['id']); ?>">
                                      <button type="button" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                      </button>
                                    </a>
                                  </td>
                                  <td>
                                    <a href="<?= base_url('Admin/editHero/' . $item['id']); ?>" data-toggle="modal" data-target="#editHerolpModal<?= $item['id'] ?>">
                                      <button type="button" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                          <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                      </button>
                                    </a>
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








<!-- Edit Modal -->
<?php foreach ($heroList as $item) : ?>
    <div class="modal fade" id="editHerolpModal<?= $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="editHerolpModal<?= $item['id'] ?>Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editHerolpModal<?= $item['id'] ?>Label">Edit Produk</h5>
                    <buttond type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </buttond>
                </div>

                <form action="<?= base_url('Admin/editHero/' . $item['id']); ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="label<?= $item['id'];?>">Label</label>
                            <input type="text" class="form-control" value="<?= $item['label'] ?>" id="label<?= $item['id'];?>" name="label" placeholder="Label">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi<?= $item['id'];?>">deskripsi Produk</label>
                            <input type="text" class="form-control" value="<?= $item['deskripsi'] ?>" id="deskripsi<?= $item['id'];?>" name="deskripsi" placeholder="deskripsi">
                        </div>
            
                        <!-- <div class="form-group">
                            <label for="harga<?= $item['id'];?>">harga Produk</label>
                            <input type="number" class="form-control" value="<?= intval($item['harga_produk']) ?>" id="harga<?= $item['id'];?>" name="harga" placeholder="Harga">
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="deskripsi<?= $item['id'];?>">deskripsi Produk</label>
                            <input type="text" class="form-control" value="<?= $item['deskripsi'] ?>" id="deskripsi<?= $item['id'];?>" name="deskripsi<?= $item['id'];?>" placeholder="deskripsi">
                        </div> -->
                        <div class="form-group">
                            <div class="custom-file">
                            <label for="status_persetujuan<?= $item['id'];?>">Status Persetujuan</label>
                                <select class="form-control" name="status_persetujuan" id="status_persetujuan<?= $item['id'];?>">
                                    <option value="belum disetujui">belum disetujui</option>
                                    <option value="disetujui">disetujui</option>
                                    <option value="ditolak">ditolak</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <img class="mb-2" src="<?=base_url('uploads/'. $item['file_foto']);?>" width="100px">
                        <br>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file_foto<?= $item['id'];?>" name="file_foto" value="<?= $item['file_foto'] ?>">
                                <label class="custom-file-label" for="file_foto<?= $item['id'];?>">Choose new file photo</label>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Edit Modal -->












                  <!-- END OF CONTENT -->
                </div>
                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->