<?php 
    $id = $_GET['id']-1;

    $data = [
        'username' => [
            'Pengajian Bersama',
            'Buka Bersama',
            'Sahur Bersama',
            'Tadarusan'
        ],

        'role' => [
            'SC',
            'IC',
            'OC',
            'OC'
        ],

        'password' => [
            '123456',
            '123456',
            '281477',
            '123456'
        ],
    ]
?>
<form>
    <table>
        <tbody>
            <tr>
                <td>Username</td>
                <td><input disabled value="Akun <?= $id+1 ?>"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input disabled value="<?= $data['role'][$id] ?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" disabled value="<?= $data['password'][$id] ?>"></td>
            </tr>
        </tbody>
    </table>
</form>