<html>
<head>
 <title>Data Pemantauan Covid19 Wilayah Jawa Tengah | Per 22 Maret 2021 14:27:16 (Waktu dan Jam Sekarang) | Selvy Pebrianti  / 171011400411</title>
</head>
<body style="font-family:arial">
 <center><h2>Data Pemantauan Covid19 Wilayah Jawa Tengah <br /> Per 22 Maret 2021 14:27:16 (Waktu dan Jam Sekarang) <br /> Selvy Pebrianti / 171011400411</h2></center>
 <hr />
 <b> Nama Wilayah : Dropdown Berisi : DKI Jakarta, Jawa Barat, Banten, Jawa Tengah </b>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="100%" border="0">
          <tr> 
                <td>Positif covid19</td>
                <td><input type="text" name="positif_covid19" size="50" required></td>
            </tr>
            <tr> 
                <td>Dirawat covid19</td>
                <td><input type="text" name="dirawat_covid19" size="50" required></td>
            </tr>
            <tr> 
                <td>Sembuh covid19</td>
                <td><input type="text" name="sembuh_covid" size="50" required></td>
            </tr>
            <tr> 
                <td>Meninggal covid19</td>
                <td><input type="text" name="meninggal_covid19" size="50" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="+ Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $positif_covid19 = $_POST['positif_covid19'];
        $dirawat_covid19 = $_POST['dirawat_covid19'];
        $sembuh_covid19 = $_POST['sembuh_covid19'];
        $meninggal_covid19 = $_POST['meninggal_covid19'];

        // include database connection file
        include "koneksi.php";

        // Insert user data into table
  $tambah_data  = "insert into covid19 values('','$positif_covid19','$dirawat_covid19','$sembuh_covid19','$meninggal_covid19')";
     $kerjakan=mysqli_query($konek, $tambah_data);
     if($kerjakan)
      {
     // Show message when user added
     echo "Berhasil Update Data <a href='index.php'>Lihat Data </a>";
     }
     else
      {
      echo " Data Sementara Pemantauan Covid19 ";
     }
    }
    ?>
</body>
</html>