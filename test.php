<?php

include "vlang.class.php";

$Vlang          = new Vlang();
$Vlang->text    = "bengek hyung";
$to_vlang       = $Vlang->to_vlang($Vlang->text);
$normalize      = $Vlang->normalize($to_vlang);
print($to_vlang."\n".$normalize);

?>