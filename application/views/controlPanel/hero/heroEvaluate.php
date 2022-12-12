                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <!-- Page Heading -->
                  <h1 class="h3 mb-4 text-gray-800">Hero Evaluate</h1>
                  <!-- CONTENT -->




                  <!-- 
    Buat list label+deskripsi+fotokecil+dropdownStatus+tombol Update
    kirim id, status menggunakan post di form nya ke Admin/heroUpdate
    
    
 -->

                  <!-- <?php foreach ($heroList as $key => $value) : ?>
                  <div class=''>
                    <?php print_r($value) ?>
                  </div>
                  <?php endforeach; ?> -->


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
                            <?php foreach ($heroList as $key => $item) : ?>
                              <form action='<?= base_url("Admin/heroUpdate/"); ?>' method="post">
                                <input type="hidden" name="id" value="<?= $item['id']; ?>">
                                <tr>
                                  <td><?= $item['id']; ?></td>
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
                                </tr>
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