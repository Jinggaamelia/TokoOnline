<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/stylesheet_tambah_produk.css">
</head>
<body>
    <?php
        include "navbar.php";
        include "koneksi.php";
        global $koneksi;
        $qry_get_produk=mysqli_query($koneksi, "select * from produk where id_produk ='".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
    ?>

    <div class="container">
        <div class="content my-3">
            <h3 class=" mb-2 text-center">Ubah Produk</h3>
            <form action="proses_ubah_produk.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">
                <div class="mb-2">
                    <label class="form-label">Nama Produk :</label>
                    <input type="text" name="nama_produk" class="form-control"  value="<?=$dt_produk['nama_produk']?>" placeholder="Masukkan Nama Produk" required>
                </div>
                
                <div class="mb-2">
                    <label class="form-label">Deskripsi Produk :</label>
                    <textarea name="deskripsi" class="form-control textarea" rows="4" placeholder="Masukkan Deskripsi Produk" required><?=$dt_produk['deskripsi']?></textarea>
                </div>
               
                <div class="mb-2">
                    <label class="form-label">Kategori Produk :</label>
                    <select name="kategori" class="form-control" required>
                        <option><?=$dt_produk['kategori']?></option>
                        <option>Tas slingbag</option>
                        <option>Tas ransel</option>
                    </select>
                </div>
                
                <div class="mb-2">
                    <label class="form-label">Merek Produk :</label>
                    <select name="merek" class="form-control" required>
                        <option><?=$dt_produk['merek']?></option>
                        <option>channel</option>
                    </select>
                </div>
               
                <div class="mb-2">
                    <label class="form-label">Harga Produk :</label>
                    <input type="number" name="harga" class="form-control" value="<?=$dt_produk['harga']?>" placeholder="Masukkan Harga Produk" required>
                </div>
                <div class="mb-2">
                    <label for="formFile" class="form-label">Foto Produk :</label>
                    <div>
                        <img src="foto/<?php echo $dt_produk['foto_produk']; ?>" width="100px">
                    </div>
                </div>
               
                <div class="mb-4">
                    <label for="formFile" class="form-label">Ubah Foto Produk :</label>
                    <input class="form-control" type="file" name="foto_produk">
                </div>
                <input type = "submit" name ="simpan" value ="Ubah Produk" class = "btn1">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>