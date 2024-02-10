<?php


class laptops{
    var $size;
    var $generation;
    var $mark;
    var $ram_size;

    function name(){
        return $this-> mark . " " . $this->generation ." " . $this->size  ." " . $this->ram_size;    }
}



class HP extends laptops{
    
}
$p = new HP;
$p -> generation = '5th generation';
$p -> mark = 'HP probook' ;
$p -> size = '14 inches';
$p -> ram_size = '8GB';


echo $p -> name() . "<br/>";




class DELL extends laptops{
    var $price;

    function price(){
        return  $this-> name() . " " . $this->price;
    }
}
$u = new  DELL;
$u -> generation = '6th generation';
$u -> mark = 'DELL elitebook' ;
$u -> size = '15 inches';
$u -> price = '$200';

echo $u -> name() . "<br/>";
echo $u ->price();

?>