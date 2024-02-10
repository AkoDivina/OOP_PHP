<?php 

class bicycle{
      var $brand;
      var $model;
      var $year;
      var $description;
      var $weight_kg;

      function name(){
        return $this-> brand  . " " . $this->model ." " . $this-> year;
      }
      function weight_lbs(){
        // 1kg = 2.20462218 ;
      return floatval($this->weight_kg) * 2.20462218 . " "."lbs" . "<br/>";
      }
      function weight_kg(){
        return floatval($this->weight_lbs())/2.20462218. " ". "kg" ."<br/>"; 
      }
      
}

 $suzuki = new bicycle;
 $suzuki -> weight_kg= 200 . "<br/>";
 $suzuki -> description= " i am a bucycle, you can buy me at a cheap price,  all my parts functioning ok" . "<br/>";
 $suzuki -> model='medusa' ;
 $suzuki -> year='2023' . "<br/>";
 $suzuki -> brand='k623';

    
echo $suzuki->weight_kg();
echo $suzuki->weight_lbs();
echo $suzuki->name();
echo $suzuki->description;


?>