<?php


// class me jo varialbes hot h usko properties and function ko method bolte h

class mysqli1{
    public $servername = "localhost";
    public $username = "azad";
    public $password = "djlak";
    public $databasename = "appna";

};

$conn = new mysqli1();
echo $conn->password;


class mysqli2{
    public $servername = "";
    public $username = "";
    public $password = "";
    public $databasename = "";

    function __construct($ser, $user, $pss, $data){
        $this->servername = $ser;
        $this->username = $user;
        $this->databasename = $data;
    }

    function test($na){
        echo "hello $na this is a mehtod isnide a class";
    }

};

$conn = new mysqli2("localhost", "root", '', 'mydb');
echo "<br>";
print_r($conn);
echo $conn->servername;
echo $conn->test("azad");


