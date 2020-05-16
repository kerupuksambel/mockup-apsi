<?php if($_GET['m'] == 'donasi'):?>
    <table>
    <thead>
        <tr>
            <th>Nama Donatur</th>
            <th>Alamat Donatur</th>
            <th>Jenis Kelamin</th>
            <th>No Telp Donatur</th>
            <th>Nominal Donasi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nama</td>
            <td>Surabaya</td>
            <td>Laki-Laki</td>
            <td>019248856</td>
            <td>Rp. 450.000</td>
            <td><a href="verifikasi.php">Verifikasi</a></td>
        </tr>
    </tbody>
</table>
<?php elseif($_GET['m'] == 'peserta'):?>
    <table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Tlp</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nama</td>
            <td>Surabaya</td>
            <td>Laki-Laki</td>
            <td>019248856</td>
        </tr>
    </tbody>
</table>
<?php endif; ?>