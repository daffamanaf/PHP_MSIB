<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas3 PHP Daffa Adil Manaf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <?php
    $m1 = ['npm' => '51419528', 'nama' => 'Daffa Adil Manaf', 'nil' => 90];
    $m2 = ['npm' => '54419703', 'nama' => 'Nathanael Rogeliho', 'nil' => 88];
    $m3 = ['npm' => '50419637', 'nama' => 'Amar Andra', 'nil' => 22];
    $m4 = ['npm' => '51419596', 'nama' => 'Davito Arrachman', 'nil' => 77];
    $m5 = ['npm' => '50419650', 'nama' => 'Amelia Oktovia', 'nil' => 66];
    $m6 = ['npm' => '52419487', 'nama' => 'Fitranindya Alifia', 'nil' => 67];
    $m7 = ['npm' => '57419144', 'nama' => 'Daffa Arya Pandhita', 'nil' => 84];
    $m8 = ['npm' => '50419395', 'nama' => 'Akhyar Ramadhan', 'nil' => 33];
    $m9 = ['npm' => '54419827', 'nama' => 'Novaldi tulus', 'nil' => 11];
    $m10 = ['npm' => '50419231', 'nama' => 'Adrian Juansyah', 'nil' => 68];
    $mahasiswasiswi = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];
	
	
    $attr = ['No', 'npm', 'Nama Mahasiswa', 'Nilai', 'Grade', 'predat', 'ket'];

    $jmlmhs = count($mahasiswasiswi);
    $nil = array_column($mahasiswasiswi, 'nil');
    $total_nil = array_sum($nil);
    $nil_maks = max($nil);
    $nil_min = min($nil);
    $ratnil = $total_nil / $jmlmhs;

    $ket = [
    'Jumlah Mahasiswa' => $jmlmhs,
	'Nilai Terendah' => $nil_maks,
    'Nilai Tertinggi' => $nil_min,
    'Rata-Rata nil' => $ratnil
    ];
	?>
    <h2 class="text-center">Daftar nilai</h2>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <?php
                foreach ($attr as $th) {?>
                <th class="text-center"><?= $th ?>
				</th>
                <?php } ?>
            </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswasiswi as $mahasiswa) {
                    $ternary = ($mahasiswa['nil'] >= 60) ? 'Lulus' : 'Tidak Lulus';
                    $grade;
                    $pred;
                    if ($mahasiswa['nil'] <= 100 && $mahasiswa['nil'] >= 80) $grade = 'A';
                    else if ($mahasiswa['nil'] <= 79 && $mahasiswa['nil'] >= 70) $grade = 'B';
                    else if ($mahasiswa['nil'] <= 69 && $mahasiswa['nil'] >= 60) $grade = 'C';
                    else if ($mahasiswa['nil'] <= 59 && $mahasiswa['nil'] >= 31) $grade = 'D';
                    else if ($mahasiswa['nil'] > 0 && $mahasiswa['nil'] <= 30) $grade = 'E';
                    else $grade = '';
                    switch ($grade) {
                        case 'A':
                            $pred = 'Memuaskan';break;
                        case 'B':
                            $pred = 'Bagus';break;
                        case 'C':
                            $pred = 'Cukup';break;
                        case 'D':
                            $pred = 'Kurang';break;
                        case 'E':
                            $pred = 'Buruk';break;
                        default:
                            $pred = '';
                    }?>
				<tr class="text-center">
                    <th> <?= $no++ ?> </th>
                    <td><?= $mahasiswa['npm'] ?></td>
                    <td><?= $mahasiswa['nama'] ?></td>
                    <td><?= $mahasiswa['nil'] ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $pred ?></td>
                    <td><?= $ternary ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($ket as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="6"><?= $ket ?>
					</th>
                    <th><?= $hasil ?>
					</th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
  </body>
</html>
