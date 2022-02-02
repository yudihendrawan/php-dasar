<?php 
//mktime (0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0, 0, 0, 9, 2, 1998));
    // echo date("Y - M - d -s", strtotime("2 sep 1998"));
    // echo date("Y", time() - mktime(0, 0, 0, 9, 2, 1998) );
    echo date("d - M", time() + 60*60*24*2);
?>