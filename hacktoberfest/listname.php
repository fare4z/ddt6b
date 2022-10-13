<?php

echo "<h3>Senarai Nama DDT6B</h3>";

$pelajar = ['nama' => 'Ali', 'jabatan' => 'JTMK'];
$kelas[] = $pelajar;

$pelajar = ['nama' => 'Mamat', 'jabatan' => 'JP'];
$kelas[] = $pelajar;

$pelajar = ['nama' => 'Aisyah', 'jabatan' => 'JKE'];
$kelas[] = $pelajar;

?>

<table width="60%">
    <tr>
        <td width="30%">Nama : </td>
        <td width="10%">Jabatan : </td>
    </tr>
<?php
foreach ($kelas as $value) {
    $nama = $value['nama'];
    $jabatan = $value['jabatan'];
    ?>
    <tr>
        <td><?php echo $nama; ?></td>
        <td><?php echo $jabatan; ?></td>
    </tr>
<?php }?>
</table>
</table>


<?php

echo "<hr>";

echo "<pre>";
print_r($kelas);
echo "</pre>";

echo "<p></p>";

echo "<hr>";
