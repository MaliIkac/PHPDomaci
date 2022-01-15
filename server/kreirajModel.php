<?php

require 'broker.php';
$broker=Broker::getBroker();

$broker->izvrsiUpit("insert into model(marka,naziv,procesor,kamera,memorija) values (".$_POST['marka'].",'".$_POST['naziv']."','".$_POST['procesor']."','".$_POST['kamera']."','".$_POST['memorija']."')");
$rezultat=$broker->getRezultat();
if(!$rezultat){
   echo $broker->getMysqli()->error;
}else{
   
    
    echo '1';
}

?>