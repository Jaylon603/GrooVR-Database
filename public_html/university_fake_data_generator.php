<?php
require_once("composer/vendor/autoload.php");

//Faker documentation:

try
{
    $faker = Faker\Factory::create();

    //two departments per building
    $num_departments = 50;
    $num_buildings = 25;

    //data structure to hold department information
    // $data["department"][$i]{
    //    "dept_name"
    //    "building"
    //    "budget"
    // }

    for($i=0; $i<$num_departments; $i++){
        $data["department"][$i]["dept_name"] = $faker->unique()->word();
        
        //generate a new building at even indexes
        if(!($i % 2)){
            $data["department"][$i]["building"] = $faker->unique()->word();
        }else{
            $data["department"][$i]["building"] = $data["department"][$i-1]["building"];
        }

        $data["department"][$i]["budget"] = $faker->numberBetween(150,500)*1000;
    }

    $encoded_data = json_encode($data);

    $json_encoded_file = fopen("data_dump.json","w");

    fwrite($json_encoded_file,$encoded_data);
    fclose($json_encoded_file);
}catch(Exception $e){
    echo "Exception: " . $e->getMessage();
}


echo "<PRE>";
print_r($encoded_data);
echo "</PRE>"
?>