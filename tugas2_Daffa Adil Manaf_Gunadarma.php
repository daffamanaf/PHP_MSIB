<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2 Daffa Adil Manaf</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <div class="container p-4">
        <h1 class="text-center mb-3">
            Data Pegawai
        </h1>
        <div class="row justify-content-left">
            <div class="col-md-7 mb-3">
                <div class="form-floating mb-3">
                    <div class="form">
                        <form action="" method="post">

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nama pegawai</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control-sm" id="nama" name="nama" placeholder="Masukkan Nama"aria-label="Disabled input example">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Agama pegawai</label>
                                <div class="col-sm-9">
                                    <select class="form-select" aria-label="Default select example" name="agama">
                                        <option selected>Agama pegawai</option>
                                        <option value="Islam">Islam</option>
										<option value="Konghucu">Konghucu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Kristen katolik">Kristen</option
                                    </select>
                                </div>
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Jabatan pegawai</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="j1"
                                            value="Manager">
                                        <label class="form-check-label"> 
										Manager
										</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="j2"
                                            value="Asisten">
                                        <label class="form-check-label"> 
										Asisten
										</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="j3"
                                            value="Kabag">
                                        <label class="form-check-label"> 
										Kabag
										</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jabatan" id="j4"
                                            value="Staff">
                                        <label class="form-check-label"> 
										Staff
										</label>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Status pegawai</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="st1"
                                            value="Menikah">
                                        <label class="form-check-label"> Menikah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="st2"
                                            value="Belum menikah">
                                        <label class="form-check-label"> Belum menikah</label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Jumlah anak</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="janak" name="janak">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="proses"
                                    class="btn btn-primary mb-3">Simpan</button>
                            </div>
                        </form>
				<div class="col-md">
                <div class="card">
                    <div class="card-body">
                        <?php
                        error_reporting(0);
                        $nama = $_POST['nama'];
                        $agama = $_POST['agama'];
                        $jabatan = $_POST['jabatan'];
                        $status = $_POST['status'];
                        $janak = $_POST['janak'];
                        $submit = $_POST['proses'];


                        switch ($jabatan) {
                            case 'Manager':
                                $gaji = '20000000';
                                break;
                            case 'Asisten':
                                $gaji = '15000000';
                                break;
                            case 'Kabag':
                                $gaji = '10000000';
                                break;
                            case 'Staff':
                                $gaji = '4000000';
                                break;
                            default:
                                $gaji = '';
                        }
                        $tunjab = 0.2 * $gaji;
                        if ($status == 'Menikah' && $janak <= 2) {
                            $tunkel = $gaji * 0.05;
                        } 
						else if ($status == 'Menikah' && $janak >= 3 && $janak <= 5) {
                            $tunkel = $gaji * 0.1;
                        } 
						else if ($status == 'Menikah' && $janak > 5) {
                            $tunkel = $gaji * 0.15;
                        } 
						else $tunkel = '0';
                     
                        $gator = $gaji + $tunjab + $tunkel;
                        
                        $zaprof = ($agama == 'Islam' && $gator >= 6000000) ? $zaprof = $gator * 0.025 : $zaprof = 0;

                        $thp = $gator - $zaprof;

                        if (isset($submit)) {
                        ?>
                        <table class="table table-hover table-sm table-bordered border-primary">
                            <tr>
                                <br/>Nama pegawai :<?= $nama ?>
								<br/>Agama Pegawai : <?= $agama ?>
								<br/>Jabatan Pegawai : <?= $jabatan ?>
								<br/>Status Pegawai : <?= $status ?>
								<br/>Jumlah Anak	: <?= $janak ?>
								<br/>Gaji Pokok	: <?= number_format($gaji, 2, ',', '.'); ?>
								<br/>Tunjangan Jabatan	: <?= number_format($tunjab, 2, ',', '.'); ?>
								<br/>Tunjangan Keluarga <?= number_format($tunkel, 2, ',', '.'); ?>
								<br/>Gaji Kotor <?= number_format($gator, 2, ',', '.'); ?>
								<br/>Zakat Profesi <?= number_format($zaprof, 2, ',', '.'); ?>
								<br/>Take Home Pay <?= number_format($thp, 2, ',', '.'); ?>
							</tr>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
	</div>
		<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
	</body>
</html>