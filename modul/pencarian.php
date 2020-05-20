<?php if(!isset($_GET['q'])){ ?>
<form method="GET" action="">
    <input type="text" name="q">
    <input type="submit">
<?php }else{?>
    <table>
    <thead>
        <th>Nama</th>
        <th>Detail</th>
    <tbody>
        <tr>
            <td>Tadarus</td>
            <td>Sehabis sholat Tarawih</td>
        </tr>
    </tbody>
</table>
<?php } ?>
