<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ayo Ngoding - Membuat Form Wizard Bootstrap</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="wizard.css" />
</head>

<body style="text-align: center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="upload.php" method="post" class="f1" enctype="multipart/form-data">
                    <h3>FORMULIR DATA DIRI</h3>
                    <!-- step 1 -->
                    <fieldset>
                        <h4>Identitas Pribadi</h4>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_awal" placeholder="Nama Awal" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <td><input name="Alamat_kamu" placeholder="Alamat Kamu " class="form-control"
                                    required></input></td>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div><input type="text" name="eml" placeholder="Masukan Email" class="form-control"
                                    required></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor HP </label>
                            <div><input type="number" name="nm" placeholder="Masukan 0-9" class="form-control"
                                    required></input>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <div><select name='JK'>
                                    <option value='Laki-laki'>Laki-laki</option>
                                    <option value='Perempuan'>Perempuan</option>
                                </select></div>

                            <div class="form-group">
                                <label>Asal Institusi </label>
                                <div><input type="text" name="ai" placeholder="Masukan Asal Institusi"
                                        class="form-control" required></input></div>
                            </div>
                            <div class="form-group">
                                <label>Jurusan </label>
                                <div><select name='JS'>
                                        <option value='Teknik Informatika'>Teknik Informatika</option>
                                        <option value='Sistem Informasi'>Sistem Informasi</option>
                                        <option value='Sistem Komputer'>Sistem Komputer</option>
                                    </select>
                                </div>
                                <div class="mb-3" data-aos="fade-left" data-aos-offset="0" data-aos-duration="1000"
                                    data-aos-delay="0">
                                    Pilih file: <input class="form-control" type="file" id="ijazah" name='berkas'
                                        value="ijazah" />
                                </div>
                                <div class="col-auto" data-aos="fade" data-aos-offset="0" data-aos-duration="1300"
                                    data-aos-delay="0">
                                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                                </div>

</html>