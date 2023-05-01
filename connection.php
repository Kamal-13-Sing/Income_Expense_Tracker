<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "project_paisa";

$conn = mysqli_connect($servername, $username, $password,$database);
//-------------create database--------
/*
$query = "CREATE DATABASE project_paisa;";
mysqli_query($conn, $query);
*/

//------------------creating income table-------------
/*
$query = "CREATE TABLE income(
    id int AUTO_INCREMENT primary key,
    category varchar(200) not null,
    notes varchar(200) not null,
    date date,
    amount int not null
);";
$run = mysqli_query($conn, $query);

if($run){
    echo "sucess";
}else{
    echo "failed because ".mysqli_error($conn);
}
*/
//------------------creating expense table-------------
/*
$query = "CREATE TABLE expense(
    id int AUTO_INCREMENT primary key,
    category varchar(200) not null,
    notes varchar(200) not null,
    date date,
    amount int not null
);";
$run = mysqli_query($conn, $query);

if($run){
    echo "sucess";
}else{
    echo "failed because ".mysqli_error($conn);
}
*/

?>