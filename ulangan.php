<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: linear-gradient(to right, #005AA7, #FFFDE4) ;
        }
    </style>
    <title>UAS FATHIR</title>
    <form method="post">
  </head>
  <body>
    <br><br><br><br>
    <h3 align="center"><b>SOAL UAS PRAKTIK RPL</b></h3>

    <img src="bgr.png" class="rounded mx-auto d-block" alt="...">

    <h5 align="center">PENGGAJIHAN GURU/KARYAWAN YAYASAN ASSALAAM</h5>
    <br>

        <div class="col-6 rounded mx-auto d-block">
    <div class="card">
    <div class="card-header">
    Data Penggajihan
    </div>
    <div class="card-body">
        <table class="col-12">
            <tr>
                <td>No</td>
            </tr>
            <tr>
                <td><input type="number" name="no" class="col-12"></td>
            </tr>
            <tr>
                <td>Nama</td>
            </tr>
            <tr>
                <td><input type="text" name="nama" class="col-12"></td>
            </tr>
            <tr>
                <td>Unit Pendidikan</td>
            </tr>
            <tr>
                <td>
                    <select name="unit" class="col-12">
                        <option value="oilih unit pendidikan"></option>
                        <option value="TK">TK</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMK">SMK</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tanggal Gaji</td>
            </tr>
            <tr>
                <td><input type="date" name="tanggal" class="col-12"></td>
            </tr>
        </table>
        <br>
        <table class="col-12" border="0">
            <tr>
                <td align="center"><i><b>Gaji</b></i></td>
                <td align="center"><i><b>Potongan</b></i></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>BPJS</td>
            </tr>
            <tr >
                <td class="col-6">
                    <select name="jabatan" class="col-12" style="width: 95%;">
                        <option value="">pilih jabatan</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakasek">Wakasek</option>
                        <option value="Guru">Guru</option>
                        <option value="Karyawan">Karyawan</option>
                    </select>
                </td>
                <td class="col-6"><input type="text" name="bpjs" class="col-12"></td>
            </tr>
            <tr>
                <td class="col-6">Lama Kerja</td>
                <td class="col-6">Pinjaman</td>
            </tr>
            <tr>
                <td class="col-6"><input type="text" name="lama" class="col-12" style="width: 95%;"></td>
                <td class="col-6"><input type="text" name="pinjam" class="col-12"></td>
            </tr>
            <tr>
                <td class="col-6">Status Kerja</td>
                <td class="col-6">Cicilan</td>
            </tr>
            <tr>
                <td class="col-6">
                    <select name="status" class="col-12" style="width: 95%;">
                        <option value=""></option>
                        <option value="Kontrak">Kontrak</option>
                        <option value="Tetap">Tetap</option>
                    </select>
                </td>
                <td class="col-6">
                    <input type="text" name="tabungan" class="col-12">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Infaq</td>
            </tr>
            <tr>
                <td></td>
                <td class="col-6"><input type="text" name="infaq" class="col-12"></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="enter" value="enter" class="btn btn-primary"></td>
            </tr>
        </table>
    </div>
    </div>
        </div>
    <br><br><br><br>
    </form>

    <?php
    if (isset($_POST['enter'])) {
        $no = $_POST['no'];
        $nama = $_POST['nama'];
        $unit = $_POST['unit'];
        $tanggal = $_POST['tanggal'];

        $jabatan = $_POST['jabatan'];
        $bpjs = $_POST['bpjs'];
        $jamterbang = $_POST['lama'];
        $pinjam = $_POST['pinjam'];
        $status = $_POST['status'];
        $cicilan = $_POST['tabungan'];
        $infaq = $_POST['infaq'];

        class data{
            
            public function data($no, $nama, $unit, $tanggal, $jabatan, $bpjs, $jamterbang, $pinjam, $status, $cicilan, $infaq){
            ?>
                <div class=" col-6 rounded mx-auto d-block">
                <div class="card">
                <div align="center" class="card-header">
                Muhammad Fathir
                </div>
                <div class="card-body">
                <table align="center" class="col-8">
                    <tr>
                        <td colspan="2" align="center"><h3><i>STRUK GAJI</i></h3></td>
                    </tr>
                    <tr>
                        <td>No</td>
                        <td><?php echo ":" . $no; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo ":" . $nama; ?></td>
                    </tr>
                    <tr>
                        <td>Unit Pendidikan</td>
                        <td><?php echo ":" . $unit; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Gaji</td>
                        <td><?php echo ":" . $tanggal; ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><?php echo ":" . $jabatan; ?></td>                   
                    </tr>
                    <tr>
                        <td>Gaji</td>
                        <td>
                        <?php
                        switch ($jabatan) {
                            case 'Kepala Sekolah':
                                $gajih = 10000000;
                                echo ":" . $gajih;
                                break;
                            case 'Wakasek';
                                $gajih = 7000000;
                                echo ":" . $gajih;
                                break;
                            case 'Guru';
                                $gajih = 5000000;
                                echo ":" . $gajih;
                                break;
                            case 'karyawan';
                                $gajih = 2500000;
                                echo ":" . $gajih;
                                break;
                            default:
                                break;
                        }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Lama Kerja</td>
                        <td><?php echo ":" . $jamterbang; ?></td>
                    </tr>
                    <tr>
                        <td>Status Kerja</td>
                        <td><?php echo ":" . $status; ?></td>
                    </tr>
                    <tr>
                        <td>Bonus</td>
                        <td>
                            <?php
                            switch ($status) {
                                case 'Tetap':
                                    $bonus = 1000000;
                                    echo ":" . $bonus;
                                    break;
                                case 'Kontrak':
                                    $bonus = 0;
                                    echo ":" . $bonus;
                                default:                                  
                                    break;
                            } 
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>BPJS</td>
                        <td><?php echo ":" . $bpjs; ?></td>
                    </tr>
                    <tr>
                        <td>Pinjaman</td>
                        <td><?php echo ":" . $pinjam; ?></td>
                    </tr>
                    <tr>
                        <td>Cicilan</td>
                        <td><?php echo ":" . $cicilan; ?></td>
                    </tr>
                    <tr>
                        <td>Infaq</td>
                        <td><?php echo ":" . $infaq; ?></td>
                    </tr>
                    <tr>
                        <td>Gaji Bersih</td>
                        <td>
                            <?php
                                $gajipokok = $gajih + $bonus;
                                $gajikurang = $bpjs + $pinjam + $cicilan + $infaq;
                                $gajibersih = $gajipokok - $gajikurang;
                                echo ":" . $gajibersih;
                            ?>
                        </td>
                    </tr>
                </table>
                </div>
                </div>
                </div>
            <?php
            }
        }

        $view = new data();
        echo $view->data($no, $nama, $unit, $tanggal, $jabatan, $bpjs, $jamterbang, $pinjam, $status, $cicilan, $infaq);
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>