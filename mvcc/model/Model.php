<?php

class Model{
    public $con;
    public function __construct(){
        // echo "Constructor call....";
        $this->con = new mysqli("localhost","root","","mvc");
    }
    public function insertData($table,$insertarray){
       $keys=array_keys($insertarray);
       $keystr=implode(",",$keys);
        $values=array_values($insertarray);
        $valuestr=implode("','",$values);
         $q="insert into $table($keystr) values('$valuestr')";
        $this->con->query($q);
        // echo "<script>alert('insert Sucessfully')</script>";
    }
    public function selectData($table){
        $q1="select * from $table";
        $res=$this->con->query($q1);
        while($row=$res->fetch_object())
        {
            $result[]=$row;       
         }
         return $result ?? [];
    }
    public function delete_data($table,$where){
        $query= "delete from $table where 1=1 ";
        foreach($where as $key=>$value){
            $query.= " and " .$key ." = '".$value." ' ";
        }
        echo $query;
        $this->con->query($query);
    }

    public function select_where($table,$where){
        $query="select * from $table where 1=1";
        foreach($where as $key=>$value){
            $query.= " and " .$key ." = '".$value." ' ";
        }
        $req=$this->con->query($query);
        while($row=$req->fetch_object()){
            $result[]=$row;
        }
        return $result ?? [];
    }

    public function update_data($table,$data,$where){
        $query= "update $table set ";
        $count=count($data);
        $i=0;
        foreach($data as $key=>$val){
            if($i<$count-1){
                $query.= " ".$key ." = '".$val ."',";  
            }
            else{
                $query.= " ".$key ." = '".$val ."'";
            }
           
            $i++;
        }
      $query.=" where 1=1 ";
        foreach($where as $key=>$value){
            $query.= " and " .$key ." = '".$value." ' ";
        }

        $this->con->query($query);

    }
}

?>