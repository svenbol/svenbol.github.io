<?php 
	if(isset($_POST['submit'])){
        include "connect.php";
        echo " FRET KAK";
        $query = $_POST['search']; // gets value sent over search form
        $min_length = 3; // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then 
        $query = htmlspecialchars($query); // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($con,$query); // makes sure nobody uses SQL injection
        $qry = "
            SELECT * FROM tbl_voeding WHERE ('name' LIKE '%".$query."%') OR ('store' LIKE '%".$query."%')";

        $raw_results = mysqli_query($con,$qry) or die("De kweri is kapot ");
             
            while($rij = mysqli_fetch_array($raw_results)){

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
             
                $out .= "
                <div class='card border border-primary d-inline-block col-md-3 col-sm-10 ml-5 mt-2 mb-2'>
                    <img src ='$photo' class='card-img-top border-bottom border-3 border-primary' >
                    <div class='card-body'>
                        <p>$name $category</p> 
                            <p>$store $ppkg/kg</p>
                            <p>$id</p>                      
                    </div>
                </div>
                ";
            }
            return $out;
    }else echo "Minimum length is ".$min_length;
}

?>