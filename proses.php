<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php

// ambil data file
$namaFile = $_FILES['berkas']['name'];
$namaSementara = $_FILES['berkas']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);


?>
    <h1 class="text-center my-5" data-aos="fade-down" data-aos-offset="0" data-aos-duration="1300" data-aos-delay="0">
        Isi Formulir Data Diri</h1>
    <section>
        <div class="container" data-aos="fade" data-aos-offset="0" data-aos-duration="1500" data-aos-delay="0">
            <div class="row">
                <div class="col text-left  justify-content-center  ">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td colspan="5"><?php echo $_POST["nama_awal"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td colspan="5"><?php echo $_POST["Alamat_kamu"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>

                                <td colspan="5"><?php echo $_POST["eml"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">No HP</th>
                                <td colspan="5"><?php echo $_POST["nm"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td colspan="3"><?php echo $_POST["JK"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Asal Institusi</th>
                                <td colspan="5"><?php echo $_POST["ai"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jurusan</th>
                                <td colspan="5"><?php echo $_POST["JS"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Ijazah</th>
                                <td colspan="5">
                                    <?php echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>"?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>