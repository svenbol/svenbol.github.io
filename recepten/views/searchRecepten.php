<?php
   
    $out = "";
    include ("connect.php");
    if(isset($_POST['searchRecept'])){
        $q = $_POST['searchRecept']; // input name='search'

        $qry = "SELECT * FROM tbl_recepten WHERE name LIKE '%$q%'";

        $res = mysqli_query($con,$qry) or die("De kweri is kapot ");
             
        while($rij = mysqli_fetch_array($res)){
                $id = $rij['id'];
                $name = $rij['name'];
                $photo = $rij['photo'];
                $ingredients = $rij['ingredients'];
                $gram = $rij['gram'];
                $description = $rij['description'];
                $pretime = $rij['pretime'];
                $dotime = $rij['dotime'];
                $kitchmat = $rij['kitchmat'];
             
                $out .= "
                <div class='card border border-primary d-inline-block col-md-3 col-sm-10 ml-5 mt-2 mb-2'>
                    <img src ='$photo' class='card-img-top border-bottom border-3 border-primary' >
                    <div class='card-body'>
                        <p>$name $category</p> 
                            <p>$ingredients $ppkg /kg</p>
                            <p>$id</p>                      
                    </div>
                </div>
                ";
        }
            echo $out;
    }
?>
