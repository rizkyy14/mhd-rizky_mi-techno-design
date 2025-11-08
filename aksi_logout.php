<?php 
session_start();
session_destroy();
echo "<script>
alert('Anda telah sukses logout!');
location.href='index.php';

</script>";

?>