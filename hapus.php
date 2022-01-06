<?php 
require 'function.php';
if (isset ($_GET["id"])) {
    if (hapus($_GET) > 0) {
        echo "
        <script>
            alert('Data Berhasil Dihapuskan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Dihapuskan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>