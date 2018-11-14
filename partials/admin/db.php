<?php
class Database
{
    public $con;
    public function_construct(){
        $this->con = mysqli_connect("localhost","id7857619_root","254088Ma!","id7857619_mandra");
        if($this->con){
            echo "Connected";
        }else{
            echo "Not Connected";
        }
    }
}
?>