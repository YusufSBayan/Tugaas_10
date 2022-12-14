<html>
<body>
    <?php
        $mahasiswa = [
            [
                "Nama" => "Rizky",
                "Nim" => "123456",
                "Jurusan" => "Teknik Informatika",
                "Email" => "rizky@gmail.com",
                "Nilai" => "90",
            ],
            [
                "Nama" => "Muhammad",
                "Nim" => "1234561",
                "Jurusan" => "Teknik Informatika",
                "Email" => "muhammad@gmail.com",
                "Nilai" => "60",
            ],
            [
                "Nama" => "Ahmad",
                "Nim" => "12345612",
                "Jurusan" => "Teknik Informatika",
                "Email" => "ahmad@gmail.com",
                "Nilai" => "80",
            ],
        ];

    ?>

    <table border=1 widht=300 cellspacing=8>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Nilai</th>
            <th>Status</th>
        </tr>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $mhs['Nama'];?> </td> 
                <td><?= $mhs['Nim'];?> </td>
                <td><?= $mhs['Jurusan'];?> </td>
                <td><?= $mhs['Email'];?> </td>
                <td><?= $mhs['Nilai'];?> </td>
                <td><?php if ($mhs['Nilai'] >60){
                    echo "LULUS";
                }else {
                echo "TIDAK LULUS";
                }?> </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>