<!DOCTYPE html>
<html>
<head>
    <title>Latihan 2</title>
</head>
<body>
    <table width="200" border="1">
    <tr>
        <td width="85">Nama</td>
        <td width="99">Alamat</td>
    </tr>
    <?php
    $file_handle = fopen("database/list.txt", "rb");

    while (!feof($file_handle) ) {
        $line_of_text = fgets($file_handle);
        $parts = explode(':', $line_of_text);
        echo "<tr><td height='119'>$parts[0]</td><td>$parts[1]</td></tr>";
    }
    fclose($file_handle);
    ?>
    </table>
</body>
</html>