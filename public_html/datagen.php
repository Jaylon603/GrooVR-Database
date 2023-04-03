<?php
require_once("composer/vendor/autoload.php");

//Faker documentation:
echo "Hello World";
try
{
    $faker = Faker\Factory::create();

    //two departments per building
    $num_users = 50;
    $num_players = 20;
    $num_developers = 10;
    $num_boths = 10;
    $num_avatars = 10;
    $num_VRExperiences = 30;
    $num_developmentTeams = 50;

    //data structure to hold department information
    // $data["department"][$i]{
    //    "dept_name"
    //    "building"
    //    "budget"
    // }
    for($i=0; $i<$num_users; $i++){ 
        $data["user"][$i]["fName"] = $faker->unique(5)->firstName();
        $data["user"][$i]["lName"] = $faker->unique(5)->lastName() ;
        $data["user"][$i]["dateOfBirth"] = $faker->unique(5)->date() ;
        $data["user"][$i]["email"] = $faker->unique(5)->email() ;
        $data["user"][$i]["streetAddr"] = $faker->unique(5)->streetAddress() ;
        $data["user"][$i]["city"] = $faker->unique(5)->city() ;
        $data["user"][$i]["state"] = $faker->unique(5)->state() ;
        $data["user"][$i]["country"] = $faker->unique(5)->country() ;
        $data["user"][$i]["zip"] = $faker->unique(5)->postcode() ;

    }
    
    for($i=0; $i<$num_VRExperiences; $i++){ 
        $data["VRExperience"][$i]["maintainerFName"] = $faker->unique(5)->firstName();
        $data["VRExperience"][$i]["maintainerLName"] = $faker->unique(5)->lastName() ;
        $data["VRExperience"][$i]["maintainerDOB"] = $faker->unique(5)->date() ;
        $data["VRExperience"][$i]["name"] = $faker->unique(5)->name() ;
        $data["developmentTeam"][$i]["type"] =$faker->randomElement(['back-end', 'front-end', 'QA', 'integration']) ;

    }


    

    for($i=0; $i<$num_avatars; $i++){
        $data["avatar"][$i]["fName"] = $faker->unique(5)->firstName();
        $data["avatar"][$i]["lName"] = $faker->unique(5)->lastName() ;
        $data["avatar"][$i]["dateOfBirth"] = $faker->unique(5)->date() ;

    }

    for($i=0; $i<$num_players; $i++){
        $data["player"][$i]["fName"] = $faker->unique(5)->firstName();
        $data["player"][$i]["lName"] = $faker->unique(5)->lastName() ;
        $data["player"][$i]["dateOfBirth"] = $faker->unique(5)->date() ;

    }

    for($i=0; $i<$num_developers; $i++){
        $data["developer"][$i]["fName"] = $faker->unique(5)->firstName();
        $data["developer"][$i]["lName"] = $faker->unique(5)->lastName() ;
        $data["developer"][$i]["dateOfBirth"] = $faker->unique(5)->date() ;
        $data["progLanguage"][$i]["language"] = $faker->randomElement(['Java', 'C++', 'Python', 'SQL', 'PHP']) ;

    }

    
    $encoded_data = json_encode($data);

    $json_encoded_file = fopen("dump.json","w");

    fwrite($json_encoded_file,$encoded_data);
    fclose($json_encoded_file);
}catch(Exception $e){
    echo "Exception: " . $e->getMessage();
}


echo "<PRE>";
print_r($encoded_data);
echo "</PRE>"
?>