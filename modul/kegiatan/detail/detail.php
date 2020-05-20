<?php 
    $id = $_GET['id']-1;

    $data = [
        'kegiatan' => [
            'Pengajian Bersama',
            'Buka Bersama',
            'Sahur Bersama',
            'Tadarusan'
        ],

        'waktu' => [
            'Selasa, 12 Mei 2020 16:00',
            'Selasa, 12 Mei 2020 17:30',
            'Selasa, 12 Mei 2020 03:30',
            'Selasa, 12 Mei 2020 20:00'
        ],

        'detail' => [
            'Sehabis sholat Ashar',
            'Sebelum adzan Maghrib',
            '1 jam sebelum Subuh',
            'Selepas tarawih'
        ],

        'tempat' => [
            'Masjid Manarul Ilmi',
            'Masjid Manarul Ilmi',
            'Masjid Manarul Ilmi',
            'Masjid Manarul Ilmi'
        ]
    ]
?>
<form>
    <table>
        <tbody>
            <tr>
                <td>Nama Kegiatan</td>
                <td><input disabled value="Kegiatan <?= $id+1 ?>"></td>
            </tr>
            <tr>
                <td>Waktu kegiatan</td>
                <td><input disabled value="<?= $data['waktu'][$id] ?>"></td>
            </tr>
            <tr>
                <td>Tempat kegiatan</td>
                <td><input disabled value="<?= $data['tempat'][$id] ?>"></td>
            </tr>
            <tr>
                <td>Detail</td>
                <td><input disabled value="<?= $data['detail'][$id] ?>"></td>
            </tr>
        </tbody>
    </table>
    <a href="daftar.php">Daftar Peserta</a>
</form>