<?php
/* inheritance helps
* - to reduce repetitions of codes
* - reduce inconsistency

* - reduces the amount of code
making it organised, consistent and easy to see
*/

class User
{
    var $is_admin = false;
    var $first_name;
    var $last_name;
    var $username;

    function full_name(){
        echo $this->first_name . " " . $this ->last_name;
    }
}
 class AdminUser extends User{
    var $is_admin=  True;
    function full_name(){
        echo $this->first_name . " " . $this ->last_name . '(Admin)';
    }
 }


class Customer extends User{
    var $city;
    var $state;
    var $country;

    function location(){
    return 'location:'.' ' . $this-> city . ',' . $this->state . ','. $this->country;
}


}

$u = new User;
$u -> first_name = 'Etta';
$u -> last_name = 'Ako';
$u -> username = 'EttAko';

$p = new Customer;
$p -> first_name = 'Tayong';
$p -> last_name = 'Shalanyuy';
$p -> username = 'Shalyong';
$p-> city = 'Buea';
$p-> state = 'south west';
$p-> country = 'Cameroon';


echo $u->full_name() . '<br/>';
echo $p->full_name() . '<br/>';
echo $p -> location() . '<br/>';
// echo $u -> is_admin .'<br />'; 
// echo $p -> is_admin .'<br />'; 

    if (is_subclass_of($u, 'user')){
    echo "instance is a subclass of user";
    }
else{
    echo 'instance is not a subclass of user' . '<br/>';
}
echo get_parent_class($u) .  "<br/>";
echo get_parent_class($p) .  "<br/>";
?>