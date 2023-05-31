<?php
include_once './config/connectDB.php';
include_once './object/student.php';
include_once './object/class.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$uri = ltrim($uri, "/");
$uri = rtrim($uri, "/");
$uri = explode("/", $uri);
$second = strtolower($uri[1]);
$third = strtolower($uri[2]);


switch ($second){
    case "classi":
        switch ( $method ) {
                case 'GET' : 
                    require __DIR__.'/api/class/read.php';
                    break;   
                    
                case 'POST' : 
                    require __DIR__.'/api/class/create.php';
                    break;   
                case 'DELETE' : 
                    require __DIR__.'/api/class/delete.php';
                    break;   
                case 'PUT' : 
                    require __DIR__.'/api/class/update.php';
                    break;            
                }            
        break;
    
    case "studente":
        switch ( $method ) {
            case 'GET' : 
                require __DIR__.'/api/student/read.php';
                break;              
            case 'POST' : 
                require __DIR__.'/api/student/create.php';
                break;  
            case 'DELETE' : 
                require __DIR__.'/api/student/delete.php';
                break;   
            
                case "PATCH":
                    require __DIR__ . "/api/student/update.php";
                break;           
            case "GETONE":
                require __DIR__ . "/api/student/readOne.php";
                break;
            }
        break;

        }




?>
