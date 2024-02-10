<?php 

class bicycle{
      public $brand;
      public $model; 
      public $year;
      public $description = 'used bicycle';
      private $weight_kg;
      protected $wheels = 2;

      
      function name(){
        return $this-> brand  . " " . $this->model ." " . $this-> year;
      }
      function weight_lbs(){
        // 1kg = 2.20462218 ;
      return floatval($this->weight_kg) * 2.20462218 . " "."lbs" . "<br/>";
      }
      public function weight_kg(){
        return floatval($this->weight_lbs())/2.20462218. " ". "kg" ."<br/>"; 
        return $this->weight_kg . "kg";
      }
      public function wheel_details(){
        $wheel_string= $this->wheels ==1 ? "1 wheel" : "{$this->wheels} wheels";
        return "it has " . $wheel_string . "."; //checks if wheel = 1 , then(?) it has 1 wheel 
      
      }
      
      public function set_weight_kg($value){
        $no_format = preg_replace('/[\$,]/', '', $value);  //removes any other thing attached to the number
        $float = floatval($no_format);                     //   
        if($float<=0){   
            trigger_error('weight must be greater than zero.', E_USER_NOTICE);  //gets the number and checks if it is negative,
            return;                                          //if negative prints an error message
        }
        $this-> weight_kg = $float;                               
    }
        public function get_price(){
            return '$' . number_format($this->weight_kg, 2);     
        }
        
    }
    
    class unicycle extends bicycle
  {
protected $wheels=1; 

   
    // visiblity must match the property that is overwritten
  
     
  }
  $uni = new unicycle;
echo $unicyle -> wheels;
    $suzuki = new bicycle;
    $suzuki -> description= " i am a bicycle, you can buy me at a cheap price,  all my parts functioning ok" . "<br/>";
    $suzuki -> model='medusa' ;
    $suzuki -> year='2023' . "<br/>";
    $suzuki -> brand='k623' . "<br/>";
  
  echo "bicycle:" . $suzuki->wheel_details() . "<br/>";
  echo "bicycle:" . $uni->wheel_details() . "<br/>";

  echo "set weight using kg . <br/>";
  $suzuki->set_weight_kg(1);
   echo $suzuki->weight_kg(1);
   echo $suzuki->weight_lbs() . "<br/>";
   echo $suzuki->name() . "<br/>";
   echo $suzuki->description . "<br/>" . "<hr/> ";
   
   echo "set weight using lbs . <br/>";
   $uni->set_weight_kg(1);
   echo $suzuki->weight_lbs(2);
   echo $suzuki->weight_lbs() . "<br/>";
   echo $suzuki->name() . "<br/>";
   echo $suzuki->description . "<br/>" . "<hr/> ";


    
?>