<?php 
include("model/Model.php");

class Controller extends Model{
    public $burl;
    public function __construct()
    {
        parent::__construct();
        $this->burl="http://localhost/mvc1/home.php/";
        // echo "controllerr contructor calll....";
        // include("view/header.php");
        // $host = $_SERVER['SERVER_NAME'];
        // $url = $_SERVER['PHP_SELF'];
        // $urlarray = explode("/",$url);
        // $folderpath = "/" . $urlarray[1] . "/" . $urlarray[2];
        // $GLOBALS['baseurl'] = "http://" . $host . $folderpath . "/";
        // echo $GLOBALS['baseurl'];
    }
    public function create(){
        include("view/create.php");
        if(isset($_REQUEST['btnsubmit'])){
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $pass=$_REQUEST['pass'];
            $insertarray=[
                "user_name"=>$name,
                "user_email"=>$email,
                "user_pass"=>$pass,
            ];
            if($this->insertData("user",$insertarray)){
                echo "data Successfully insert";
            }
            else{
                echo "data not insert";

            }
            header("Location:".$this->burl."index1");
        }
        
    }
    public function index(){
        
        $data=$this->selectData("user");
        include("view/index1.php");
    }
    public function delete(){
        if(isset($_REQUEST['id'])){
           $userid=$_REQUEST['id'];
           $where=['user_id'=>$userid];
           $this->delete_data("user",$where);
           header("Location:".$this->burl."index1");
        }
    }
    
    public function update(){
        if(isset($_REQUEST['id'])){
            $userid=$_REQUEST['id'];
            $where =['user_id'=>$userid];
            $data=$this->select_where("user",$where);
            include('view/create.php');
            if(isset($_REQUEST['btnsubmit'])){
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $password=$_REQUEST['pass'];
                $updatearray=[
                 "user_name"=>$name,
                 "user_email"=>$email,
                 "user_pass"=>$password,
              ];
              $this->update_data("user",$updatearray,$where);
              header("Location:".$this->burl."index1");
            }   
        }
    } 
    public function countrydata(){
        $d=file_get_contents('http://country.io/names.json');
        $data=json_decode($d);
        foreach($data as $key=>$value){
            $this->insertData("country",["ccode"=>$key,"cname"=>$value]);
        }
    }
    public function encodeData(){
        $s=$this->selectData("user");
        json_encode($s);
        print_r($s);
    }
    public function createApi(){
        if(isset($_REQUEST['name'])){
         echo $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $pass=$_REQUEST['pass'];
            $insertarray=[
                "user_name"=>$name,
                "user_email"=>$email,
                "user_pass"=>$pass,
            ];
            if($this->insertData("user",$insertarray)){
                echo "success";
            }
            else{
                echo "error";
            }
    }
}
}
?>