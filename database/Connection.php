<?php
class Connection{
    public $conn;
    function ConnectionStart(){
       return mysqli_connect("localhost","root","","store"); 
    }
}