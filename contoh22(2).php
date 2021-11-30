<html>
<head><title>Document</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
    Nama Anda : <input type="text" name="nama" required><br>
    <input type="submit" name="Kirim" value="Kirim">
</FORM>
</body>
</html>
<?php 
if (isset($_POST['Kirim'])) {
    $nami = $_POST['nama'];
    echo "Nama Anda : <b>$nami</b>";
}
?>