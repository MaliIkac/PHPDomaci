<?php

require 'broker.php';
$broker=Broker::getBroker();

$broker->izvrsiUpit("update model set naziv='".$_POST['naziv']."', procesor='".$_POST['procesor']."', kamera='".$_POST['kamera']."', memorija='".$_POST['memorija']."' where id=".$_POST['id']." and marka=".$_POST['marka']);
$rezultat=$broker->getRezultat();
if(!$rezultat){
   echo $broker->getMysqli()->error;
}else{
    echo '1';
}

?>