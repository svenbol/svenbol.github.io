<?php 

return upload();

function upload(){
    include_once "connect.php";
    include_once "./class/Item.class.php";
    $i = new Item();

    if(isset($_POST["upload"])){
        $qry = "INSERT INTO $c->table (";
            foreach($i as $prop => $val){
                if($prop !== 'id'){
                    $qry .= $prop;
                    $qry .= ",";
                }
            }
        $qry = substr($qry,0,-1);    
        $qry .= ")";
        $qry .= " VALUES (";
            foreach($i as $prop => $val){
                if($prop !== 'id'){
                    $i->$prop = $_POST["$prop"];
                    $qry .= "'";
                    $qry .= $i->$prop; 
                    $qry .= "'";
                    $qry .= ",";
                }
            }
        $qry = substr($qry,0,-1);    
        $qry .= ");";
        
        //$res = mysqli_query($con,$qry) or die(mysqli_error($c->db));
        $res = mysqli_query($con,$qry) or die('INSERT failed : upload');

        if($res)header("Location: index.php");
    }
    else{
        $out =  include_once './template/pageUpload.php';
        return $out;
    }
}
