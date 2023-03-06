<?php

$jamkerja = 7;
if($jamkerja >8 ){
    $echo  = "mendapat gaji lembur";
}elseif($jamkerja <8 ){
    $echo ="tidak mendapat gaji lembur";
}else{
    $echo = "nvihn";
}

echo ("jam kerja " . $echo)

?>