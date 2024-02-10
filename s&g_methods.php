<!--  setter and getter methods inphp
fundamental idea is to 
#-acces private properties through public methods
 -->
<?php

class Product{
    private $price;

public function set_price($value){
    $no_format = preg_replace('/[\$,]/', '', $value);  //removes any other thing attached to the number
    $float = floatval($no_format);                     //   
    if($float<=0){
        trigger_error('price must be greater than zero.', E_USER_NOTICE);  //gets the number and checks if it is negative,
        return;                                          //if negative prints an error message
    }
    $this-> price = $float;                               //if positive returns the price
}
    public function get_price(){
        return '$' . number_format($this->price, 2);     //return the price in 2dp
    }
}


?>