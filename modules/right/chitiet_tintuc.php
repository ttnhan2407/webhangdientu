<?php
$sql = "select * from tintuc where id_baiviet='$_GET[id]' limit 1";
$run_tintuc = pg_query($conn, $sql);
$row_tintuc = pg_fetch_array($run_tintuc);
echo $row_tintuc['noidung'];
?>