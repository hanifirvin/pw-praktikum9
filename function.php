<?php 
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "praktikum_9");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $db;
    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $address = htmlspecialchars($data['address']);
    $gender = htmlspecialchars($data['gender']);
    $position = htmlspecialchars($data['position']);
    $status = htmlspecialchars($data['status']);

    $query = "INSERT INTO karyawan
                VALUES
               ('', '$name', '$email', '$address', '$gender', '$position', '$status') 
            ";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($data) {
    global $db;
    $id = $data["id"];
    mysqli_query($db, "DELETE FROM karyawan WHERE id = $id");
    
    return mysqli_affected_rows($db);

}


?>