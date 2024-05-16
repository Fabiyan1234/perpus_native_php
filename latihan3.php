<?php
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'],
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'],
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'],
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'],
);

echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Kelas</th><th>Jurusan</th></tr>";

foreach ($siswa as $data) {
    echo "<tr>";
    echo "<td>" . $data['nama'] . "</td>";
    echo "<td>" . $data['kelas'] . "</td>";
    echo "<td>" . $data['jurusan'] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>