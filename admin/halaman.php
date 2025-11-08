<?php
if(isset($_GET['url'])){
	$url=$_GET['url'];

	switch ($url) 
	{
		
	case'verifikasi_pengaduan';
	include'verifikasi_pengaduan.php';
	break;

  case'detail-pengaduan':
		include'detail-pengaduan.php';
		break;
    
      case'tulis-tanggapan';
      include'tulis-tanggapan.php';
      break;

      case'lihat_petugas';
      include'lihat_petugas.php';
      break;

      case'tambah_petugas';
      include'tambah_petugas.php';
      break;

      case'edit_petugas';
      include'edit_petugas.php';
      break;

        case'lihat_masyarakat';
      include'lihat_masyarakat.php';
      break;

      case'preview_petugas';
      include'preview_petugas.php';
      break;

      case'preview_masyarakat';
      include'preview_masyarakat.php';
      break;

      case'preview_pengaduan';
      include'preview_pengaduan.php';
      break;

      case'preview_tanggapan';
      include'preview_tanggapan.php';
      break;

       case'lihat_pengaduan';
      include'lihat-pengaduan.php';
      break;

      case'lihat_tanggapan';
      include'lihat_tanggapan.php';
      break;
    
    }
}else{

}
 