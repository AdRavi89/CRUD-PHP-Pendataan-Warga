<?php
session_start();
 
// menghapus semua session
session_destroy();
  // mengalihkan halaman sambil mengirim pesan logout
header("location:../php/login.php?pesan=logout");
?> 