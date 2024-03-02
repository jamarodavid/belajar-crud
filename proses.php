<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add" ){
            
            $No_Telepon = $_POST['No_Telepon'];
            $Nama_Kontak = $_POST['Nama_Kontak'];
            $Email = $_POST['Email'];

            $query = "INSERT INTO tb_kontak VALUES(null, '$No_Telepon', '$Nama_Kontak', '$Email')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
                // echo "berhasil <a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }

            // echo $No_Telepon." | ".$Nama_Kontak." | ".$Email;

            // echo "<br>Tambah Data <a href='index.php'>[Home]</a> ";
        } else if ($_POST['aksi'] =="edit" ){
            // echo "Edit Data <a href='index.php'>[Home]</a> ";
            // var_dump($_POST);
            $Nomor = $_POST['Nomor'];
            $No_Telepon = $_POST['No_Telepon'];
            $Nama_Kontak = $_POST['Nama_Kontak'];
            $Email = $_POST['Email'];

            $query = "UPDATE tb_kontak SET No_Telepon='$No_Telepon', Nama_Kontak='$Nama_Kontak', Email='$Email'  WHERE Nomor ='$Nomor';";

            $sql = mysqli_query($conn, $query);
            header("location: index.php");

        }
    }

    if(isset($_GET['hapus'])){
        $Nomor = $_GET['hapus'];
        $query = "DELETE FROM tb_kontak WHERE Nomor = '$Nomor';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
            // echo "berhasil <a href='index.php'>[Home]</a>";
        } else {
            echo $query;
        }
        //echo "Hapus Data <a href='index.php'>[Home]</a> ";
    }
?>

