<?php 
include("controller/Controller.php");
$baseurl = $_SERVER['SERVER_NAME'];
$my = $baseurl.=$_SERVER['PHP_SELF'];
$self=$_SERVER['PHP_SELF'];
// echo $my;
// echo $my;
// echo $_SERVER['PATH_INFO'];
include("view/header.php");
$controller = new Controller();
// $controller -> create();
if(isset($_SERVER['PATH_INFO'])){
    $path= $_SERVER['PATH_INFO'];
    // echo $path;
    echo "<br/>";
    switch($path){
        case '/create':
            $controller -> create();
            break;
        case '/index1':
         $controller -> index();
         break;
         case '/delete':
            $controller -> delete();
            break;
            case '/update':
                $controller -> update();
                break;
                case '/country':
                    $controller -> countrydata();
                    break;
                    case '/encodeData':
                        $controller -> encodeData();
                        break;
                        case '/createapi':
                            $controller -> createApi();
                            break;
        default:
            echo "PAGE NOT FOUND";
            break;
    }
}
