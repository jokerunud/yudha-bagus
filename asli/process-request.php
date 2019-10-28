<?php
if(isset($_POST["country"])){
    // Capture selected country
    $country = $_POST["country"];
     
    // Define country and city array
    $countryArr = array(
                    "MIPA" => array("ILKOM", "MATIK", "KIMIA","FARMASI,BIOLOGI"),
                    "FEB" => array("Mumbai", "New Delhi", "Bangalore"),
                    "FT" => array("London", "Manchester", "Liverpool")
                );
     
    // Display city dropdown based on country name
    if($country !== 'Select'){
        echo "<label>City:</label>";
        echo "<select>";
        foreach($countryArr[$country] as $value){
            echo "<option>". $value . "</option>";
        }
        echo "</select>";
    } 
}
?>