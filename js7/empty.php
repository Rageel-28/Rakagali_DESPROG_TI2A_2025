<?php
$myarray = array();

// cek array
if (empty($myarray)) {
    echo "Array tidak terdefinisi atau kosong.<br>";
} else {
    echo "Array terdefinisi dan tidak kosong.<br>";
}

// cek variabel yang belum didefinisikan
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.<br>";
} else {
    echo "Variabel terdefinisi dan tidak kosong.<br>";
}
?>
