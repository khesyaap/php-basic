<?php
// koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "cruddb1");

function query($query){
    global $conn;

// ambil dat di database
$result = mysqli_query ($conn,$query);
$rows = [];
while($row = mysqli_fetch_assoc($result)){
    $rows[]= $row;
}
return $rows;

}

function tambahdata($data){
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO siswi VALUES('', '$nama', '$nis', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapusData($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswi WHERE id = $id");

    return mysqli_affected_rows($conn);
}


?>