<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas5 PHP Daffa Adil Manaf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 align="center">Daftar Bidang</h1>
    <br>
    <?php 
    require_once 'Persegi.php';
	require_once 'Lingkaran.php';
    require_once 'Segitiga.php';

    $bdg1 = new Persegi(10,11);
	$bdg2 = new Lingkaran(28);
    $bdg3 = new Segitiga(6,8,10);
	
	$bidang =[$bdg1,$bdg2,$bdg3];
    $thead = ['No', 'Nama Bidang', 'Luas Bidang', 'Keliling Bidang'];    
    ?>
	<table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <?php
            foreach ($thead as $th) { ?>
                <th><?= $th ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
        $no = 1;
        foreach ($bidang as $hasil) { ?>
            <tr>
                <th><?= $no++ ?></th>
                <td><?= $hasil->NBidang(); ?><br><?= $hasil->Ket(); ?></td>                   
                <td><?= $hasil->LBidang(); ?></td>
				<td><?= $hasil->KBidang(); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </body>
</html>