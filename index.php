<?php
  include "config/koneksi.php";
  
  $w=mysql_fetch_array(mysql_query("select alamat_website from identitas"));
  
  // header("location:$w[alamat_website]");

  require 'media.php';
?>