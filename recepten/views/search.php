<?php
   
    $out = "";
    include ("connect.php");
    if(isset($_POST['search'])){
        $q = $_POST['search']; // input name='search'

        $qry = "SELECT * FROM tbl_voeding WHERE name LIKE '%$q%' OR tags LIKE '%$q%'";

        $res = mysqli_query($con,$qry) or die("De kweri is kapot ");
             
        while($rij = mysqli_fetch_array($res)){

                $id = $rij['id'];
                $name = $rij['name'];
                $gram = $rij['gram'];
                $carbs = $rij['carbs'];
                $sugars = $rij['sugars'];
                $fats = $rij['fats'];
                $price = $rij['price'];
                $photo = $rij['photolink'];
                $store = $rij['store'];
                $category = $rij['category'];
                $tags = $rij['tags'];

                 if($gram > 0 && $price > 0)  
                    {
                        $ppkg = $price * (1000/$gram);
                        $ppkg = number_format($ppkg,2);
                    }
                else    $ppkg = "€€€";
             
                $out .= "
                <div class='card border border-primary d-inline-block col-md-3 col-sm-10 ml-5 mt-2 mb-2'>
                    <img src ='$photo' class='card-img-top border-bottom border-3 border-primary' >
                    <div class='card-body'>
                        <p>$name $category</p> 
                            <p>$store $ppkg /kg</p>
                            <p>$id</p>                      
                    </div>
                </div>
                ";
        }
            echo $out;
    }
?>
