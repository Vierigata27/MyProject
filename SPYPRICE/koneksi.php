<?php
// membuat koneksi ke database dengan mysqli_connect()

$dbServer = 'db4free.net'; // host
$dbPort = 3306; // port
$dbUser = 'testingrplroot'; // username
$dbPass = 'kelompok'; // password
$dbName = "testingdbrpl6"; // database

// membuat koneksi ke database dengan mysqli_connect()
$koneksi = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName, $dbPort);
//$koneksi = mysqli_connect("sql307.epizy.com", "epiz_34272883", "19kutVEc4z8puMn","perbandingan_harga");


//fungsi menampilkan data
function tampil($tampil)
{
   global $koneksi;
   $result = mysqli_query($koneksi, $tampil);
   $rows=[];
   while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
   }
   return $rows;
}
//fungsi Upload
function upload(){

  $namaFile = $_FILES['foto_produk']['name'];
  $ukuranFile = $_FILES['foto_produk']['size'];
  $error = $_FILES['foto_produk']['error'];
  $tmpName = $_FILES['foto_produk']['tmp_name'];

  if($error === 4){
    echo "<script> 
    alert('Pilih Gambar Terlebih Dahulu');
    </script>";
    return false;
  }

  //cek apakah yang di upload gambar
  $tipeGambar = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $tipeGambar)){
    echo "<script> 
      alert('Data Yang Anda Upload Bukan Gambar');
      </script>";
      return false;
  }

  // $namaFileBaru = uniqid();
  // $namaFileBaru .= '.';
  // $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'gambar/gula/' . $namaFile);

  return $namaFile;
}

function tambah($data){
  global $koneksi;
  $nama_toko = $data["nama_toko"];
  $nama_barang = $data["nama_barang"];
  $ukuran_barang = $data["ukuran_barang"];
  $harga_barang = $data["harga_barang"];

  // Upload gambar
  $gambar = upload();
  if (!$gambar) {
    return false;
  }

  $query = "INSERT INTO gula (`id_barang`, `nama_toko`, `nama_barang`, `ukuran_barang`, `harga_barang`, `foto_produk`)  VALUES (NULL, '$nama_toko', '$nama_barang', '$ukuran_barang', '$harga_barang', '$gambar')";

  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
}


//fungsi tambah data Produk Beras
function tambah1($data){
  global $koneksi;
   $nama_toko = $data["nama_toko"];
   $nama_barang = $data["nama_barang"];
   $ukuran_barang =$data["ukuran_barang"];
   $harga_barang =$data["harga_barang"];
   //upload gambar
   $gambar = upload();
   if( !$gambar ){
     return false;
   }
  
   $query = "INSERT INTO beras (`id_barang`, `nama_toko`, `nama_barang`, `ukuran_barang`, `harga_barang`, `foto_produk`)  VALUES (NULL, '$nama_toko', '$nama_barang', '$ukuran_barang', '$harga_barang', '$gambar')";
  
  mysqli_query($koneksi, $query);

  
  
  return mysqli_affected_rows($koneksi);
  }

//fungsi tambah data Produk Susu
function tambah2($data){
  global $koneksi;
   $nama_toko = $data["nama_toko"];
   $nama_barang = $data["nama_barang"];
   $ukuran_barang =$data["ukuran_barang"];
   $harga_barang =$data["harga_barang"];
   //upload gambar
   $gambar = upload();
   if( !$gambar ){
     return false;
   }
  
   $query = "INSERT INTO susu (`id_barang`, `nama_toko`, `nama_barang`, `ukuran_barang`, `harga_barang`, `foto_produk`)  VALUES (NULL, '$nama_toko', '$nama_barang', '$ukuran_barang', '$harga_barang', '$gambar')";
  
  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
  }

//fungsi tambah data Produk minyak
function tambah3($data){
  global $koneksi;
   $nama_toko = $data["nama_toko"];
   $nama_barang = $data["nama_barang"];
   $ukuran_barang =$data["ukuran_barang"];
   $harga_barang =$data["harga_barang"];
   //upload gambar
   $gambar = upload();
   if( !$gambar ){
     return false;
   }
  
   $query = "INSERT INTO minyak (`id_barang`, `nama_toko`, `nama_barang`, `ukuran_barang`, `harga_barang`, `foto_produk`)  VALUES (NULL, '$nama_toko', '$nama_barang', '$ukuran_barang', '$harga_barang', '$gambar')";
  
  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
  }

  //fungsi tambah data Produk telur
function tambah4($data){
  global $koneksi;
   $nama_toko = $data["nama_toko"];
   $nama_barang = $data["nama_barang"];
   $ukuran_barang =$data["ukuran_barang"];
   $harga_barang =$data["harga_barang"];
   //upload gambar
   $gambar = upload();
   if( !$gambar ){
     return false;
   }
  
   $query = "INSERT INTO telur (`id_barang`, `nama_toko`, `nama_barang`, `ukuran_barang`, `harga_barang`, `foto_produk`)  VALUES (NULL, '$nama_toko', '$nama_barang', '$ukuran_barang', '$harga_barang', '$gambar')";
  
  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
  }

  //fungsi tambah data Produk garam
function tambah5($data){
  global $koneksi;
   $nama_toko = $data["nama_toko"];
   $nama_barang = $data["nama_barang"];
   $ukuran_barang =$data["ukuran_barang"];
   $harga_barang =$data["harga_barang"];
   //upload gambar
   $gambar = upload();
   if( !$gambar ){
     return false;
   }
  
   $query = "INSERT INTO garam (`id_barang`, `nama_toko`, `nama_barang`, `ukuran_barang`, `harga_barang`, `foto_produk`)  VALUES (NULL, '$nama_toko', '$nama_barang', '$ukuran_barang', '$harga_barang', '$gambar')";
  
  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
  }


//fungsi hapus
function hapus($id_barang){
global $koneksi;
mysqli_query($koneksi, "DELETE FROM gula where id_barang = $id_barang");
return mysqli_affected_rows($koneksi);
}

function hapus1($id_barang){
  global $koneksi;
  mysqli_query($koneksi, "DELETE FROM beras where id_barang = $id_barang");
  return mysqli_affected_rows($koneksi);
  }
  
  function hapus2($id_barang){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM susu where id_barang = $id_barang");
    return mysqli_affected_rows($koneksi);
    }

    function hapus3($id_barang){
      global $koneksi;
      mysqli_query($koneksi, "DELETE FROM minyak where id_barang = $id_barang");
      return mysqli_affected_rows($koneksi);
      }

      function hapus4($id_barang){
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM telur where id_barang = $id_barang");
        return mysqli_affected_rows($koneksi);
        }

        function hapus5($id_barang){
          global $koneksi;
          mysqli_query($koneksi, "DELETE FROM garam where id_barang = $id_barang");
          return mysqli_affected_rows($koneksi);
          }
          
        
      
    

//fungsi login
function login(){
if( isset($_POST["login"])){

   global $koneksi;

  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' ");

  //cek username
  if(mysqli_num_rows($result) == 1){

    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ) {
      $_SESSION["email"] = $email;
      $_SESSION["logged_in"] = true;
      header("location: homepage.php");
      exit;
    } else {
      echo "<script>alert('Password salah/Email Salah');
        window.location = 'login.php';
        </script>";
    }
  } 
}
}

function signup($data){
      global $koneksi;

      $nama = $data["nama"];
      $email = $data["email"];
      $no = $data["no"];
      $password = mysqli_real_escape_string($koneksi, $data["password"]);
      $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

      //cek email apakah sudah pernah dibuat
      $cek = mysqli_query($koneksi, "SELECT email FROM user WHERE EMAIL ='$email'");

      if(mysqli_fetch_assoc($cek)){
        echo "<script>alert('USERNAME SUDAH PERNAH TERDAFTAR');
        </script>";
        return false;
      }

      //cek konfirmasi password
      if($password != $password2){
        echo "<script>alert('Password tidak sesuai');
        </script>";
        return false;
      }

      $enkripsi = password_hash($password,PASSWORD_DEFAULT);
  
      mysqli_query($koneksi,"INSERT INTO user (`nama`,`email`,`no`,`password`) VALUES ('$nama','$email','$no','$enkripsi')");

      return mysqli_affected_rows($koneksi);
     
  }

function contact($data){
  global $koneksi;

  $nama = $data["nama"];
  $email = $data["email"];
  $keterangan = $data["keterangan"];

  mysqli_query($koneksi,"INSERT INTO contact (`nama`,`email`,`keterangan`) VALUES ('$nama','$email','$keterangan')");

  return mysqli_affected_rows($koneksi);

}

function admin() {
    global $koneksi;

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email' ");

    // Cek username
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row["password"]) {
            $_SESSION["logged_in"] = true;
            header("Location: beras.php");
            exit();
        } else {
            echo "<script>alert('Password salah/Email Salah');
            window.location.href = 'admin.php';
            </script>";
            exit();
        }
    } 
}
function ubah($data){ 
  
  global $koneksi;
  $id_barang = $data["id_barang"];
  $nama_toko = $data["nama_toko"];
  $nama_barang = $data["nama_barang"];
  $ukuran_barang = $data["ukuran_barang"];
  $harga_barang = $data["harga_barang"];
  $gambarLama = $data["gambarLama"];

  if($_FILES['foto_produk']['error'] === 4){
      $gambar = $gambarLama; 
  }else{
    $gambar = upload();
  }

  $query = "UPDATE gula SET 
            nama_toko = '$nama_toko',
            nama_barang = '$nama_barang',
            ukuran_barang = '$ukuran_barang',
            harga_barang = '$harga_barang',
            foto_produk = '$gambar'
            where id_barang = $id_barang";

  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
}

function ubah1($data){ 
  
  global $koneksi;
  $no_pengaduan = $data["no_pengaduan"];
  $user_id = $data["user_id"];
  $judul = $data["judul"];
  $keterangan_laporan = $data["keterangan_laporan"];
  $gambar = $data["gambar"];
  $admin_id = $data["admin_id"];
  $status = $data["status"];
  $hasil_berita = $data["hasil_berita"];
  $query = "UPDATE beras SET 
            nama_toko = '$nama_toko',
            nama_barang = '$nama_barang',
            ukuran_barang = '$ukuran_barang',
            harga_barang = '$harga_barang',
            foto_produk = '$gambar'
            where id_barang = $id_barang";

  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
}

function ubah2($data){ 
  
  global $koneksi;
  $id_barang = $data["id_barang"];
  $nama_toko = $data["nama_toko"];
  $nama_barang = $data["nama_barang"];
  $ukuran_barang = $data["ukuran_barang"];
  $harga_barang = $data["harga_barang"];
  $gambarLama = $data["gambarLama"];

  if($_FILES['foto_produk']['error'] === 4){
      $gambar = $gambarLama; 
  }else{
    $gambar = upload();
  }

  $query = "UPDATE susu SET 
            nama_toko = '$nama_toko',
            nama_barang = '$nama_barang',
            ukuran_barang = '$ukuran_barang',
            harga_barang = '$harga_barang',
            foto_produk = '$gambar'
            where id_barang = $id_barang";

  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
}

function ubah3($data){ 
  
  global $koneksi;
  $id_barang = $data["id_barang"];
  $nama_toko = $data["nama_toko"];
  $nama_barang = $data["nama_barang"];
  $ukuran_barang = $data["ukuran_barang"];
  $harga_barang = $data["harga_barang"];
  $gambarLama = $data["gambarLama"];

  if($_FILES['foto_produk']['error'] === 4){
      $gambar = $gambarLama; 
  }else{
    $gambar = upload();
  }

  $query = "UPDATE minyak SET 
            nama_toko = '$nama_toko',
            nama_barang = '$nama_barang',
            ukuran_barang = '$ukuran_barang',
            harga_barang = '$harga_barang',
            foto_produk = '$gambar'
            where id_barang = $id_barang";

  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
}

function ubah4($data){ 
  
  global $koneksi;
  $id_barang = $data["id_barang"];
  $nama_toko = $data["nama_toko"];
  $nama_barang = $data["nama_barang"];
  $ukuran_barang = $data["ukuran_barang"];
  $harga_barang = $data["harga_barang"];
  $gambarLama = $data["gambarLama"];

  if($_FILES['foto_produk']['error'] === 4){
      $gambar = $gambarLama; 
  }else{
    $gambar = upload();
  }

  $query = "UPDATE telur SET 
            nama_toko = '$nama_toko',
            nama_barang = '$nama_barang',
            ukuran_barang = '$ukuran_barang',
            harga_barang = '$harga_barang',
            foto_produk = '$gambar'
            where id_barang = $id_barang";

  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
}

function ubah5($data){ 
  
  global $koneksi;
  $id_barang = $data["id_barang"];
  $nama_toko = $data["nama_toko"];
  $nama_barang = $data["nama_barang"];
  $ukuran_barang = $data["ukuran_barang"];
  $harga_barang = $data["harga_barang"];
  $gambarLama = $data["gambarLama"];

  if($_FILES['foto_produk']['error'] === 4){
      $gambar = $gambarLama; 
  }else{
    $gambar = upload();
  }

  $query = "UPDATE garam SET 
            nama_toko = '$nama_toko',
            nama_barang = '$nama_barang',
            ukuran_barang = '$ukuran_barang',
            harga_barang = '$harga_barang',
            foto_produk = '$gambar'
            where id_barang = $id_barang";

  mysqli_query($koneksi, $query);
  
  return mysqli_affected_rows($koneksi);
}

function update_user($data) {
  global $koneksi;
  $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
  $email = mysqli_real_escape_string($koneksi, $data["email"]);
  $no = mysqli_real_escape_string($koneksi, $data["no"]);

  $query = "UPDATE user SET 
            nama = '$nama',
            email = '$email',
            no = '$no'
            WHERE email = '$email'";

  mysqli_query($koneksi, $query);

  return mysqli_affected_rows($koneksi);
}

?>