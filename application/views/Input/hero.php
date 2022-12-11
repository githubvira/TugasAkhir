<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/vendor/hero/'); ?>docs/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/vendor/hero/'); ?>docs/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url('/vendor/hero/'); ?>docs/js/jquery-latest-slim.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('/vendor/hero/'); ?>docs/js/jquery-ui-custom.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

<body>

    <!-- <body style="background:#7FFFD4"> -->


    <style type="text/css">
        .form-group,
        .form-group input {
            text-align: center;
        }

        .form-group label {
            color: #ffffff;
        }
    </style>


    <div class="container">
        <div class="col-md-12">
            <form class="form" method="post" action="<?= base_url('index.php/Admin/simpan'); ?>" enctype="multipart/form-data">
                <!-- <center><img src="SITAMU 2.png" width="250px;"></center> -->
                <div class="panel panel-dark">
                    <div class="panel-heading text-center" style="background: #808080; color:#ffffff">
                        <b>HERO CAROUSEL </b>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Label</label>
                            <input type="text" name="label" id="label" class="form-control" placeholder="Masukkan label Anda" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi" required>
                        </div>

                        <div class="form-group">
                            <label>Input Gambar</label>
                            <input class="form-control" type="file" id="formFile" name="gambar">
                        </div>

                        <div class="form-group">
                            <label>Persetujuan</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" nama="status">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Disetujui
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked nama="status">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Belum Disetujui
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked nama="status">
                            <label class="form-check-label" for="flexRadioDefault3">
                                Ditolak
                            </label>
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
</body>

</html>






</body>

</html>