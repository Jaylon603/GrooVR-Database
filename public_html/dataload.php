<pre>
<?php
require("connection.php");

// data loader
// 1. read from json file into an array variable/structure
// 2. connect to the database
// 3. insert all data into respective rows in the correct order for all tables

// reading json file
try{
    $file_name = "dump.json";
    $json_contents = file_get_contents($file_name);
    $data = json_decode($json_contents);

    print_r($data);
    //die;

}catch(Exception $e){
    echo "JSON Exception: " . $e->getMessage();
    die;
}
/*$query = "INSERT INTO user(fName, lName, dateOfBirth, email, streetAddr, city, state, country, zip)
VALUES (:fName,:lName,:dateOfBirth, :email, :streetAddr, :city, :state, :country, :zip)";
$query_run = $connection->prepare($query);
$data= [
    $fName = "fName"
];
$query_run->execute($data);
$sql = "INSERT INTO `user` (`fName`, `lName`, `dateOfBirth`, `email`, `streetAddr`, `city`, `state`, `country`, `zip`) VALUES ('Jo', 'Toe', '1996-04-02', NULL, NULL, NULL, NULL, NULL, NULL)
";
$connection->query($sql);
*/
try{
        $file_name = "dump.json";
        $json_contents = file_get_contents($file_name);
        $data = json_decode($json_contents);
        // DEBUG
        // emulate prepared statements so debugDumpParams show full query
        $connection->setAttribute( PDO::ATTR_EMULATE_PREPARES, true );

        // empty table before inserting
        $connection->query("DELETE FROM player;");
        $connection->query("DELETE FROM avatar;");
        $connection->query("DELETE FROM developer;");
        $connection->query("DELETE FROM user;");
       
        $query_str = "INSERT INTO user(fName, lName, dateOfBirth, email, streetAddr, city, state, country, zip)
                      VALUES (:fName,:lName,:dateOfBirth, :email, :streetAddr, :city, :state, :country, :zip)";
        foreach ($data->player as $row) {
            $stmt = $connection->prepare($query_str);
            
            $stmt->bindParam(":fName", $row->fName, PDO::PARAM_STR);
            $stmt->bindParam(":lName", $row->lName, PDO::PARAM_STR);
            $stmt->bindParam(":dateOfBirth", $row->dateOfBirth, PDO::PARAM_STR);
            $stmt->bindParam(":email", $row->email, PDO::PARAM_STR);
            $stmt->bindParam(":streetAddr", $row->streetAddr, PDO::PARAM_STR);
            $stmt->bindParam(":city", $row->city, PDO::PARAM_STR);
            $stmt->bindParam(":state", $row->state, PDO::PARAM_STR);
            $stmt->bindParam(":country", $row->country, PDO::PARAM_STR);
            $stmt->bindParam(":zip", $row->zip, PDO::PARAM_STR);
            $stmt->execute();
            
            // DEBUG            
            // ob_start();
            // $stmt->debugDumpParams();
            // $r = ob_get_contents();
            // ob_end_clean();
    
            // echo explode("\n",$r)[1]."\n";
    
        }

        //parameters for each row will be bound to this query
        $query_str = "INSERT INTO player(fName, lName, dateOfBirth)
                      VALUES (:fName,:lName,:dateOfBirth)";
        foreach ($data->player as $row) {
            $stmt = $connection->prepare($query_str);
            
            $stmt->bindParam(":fName", $row->fName, PDO::PARAM_STR);
            $stmt->bindParam(":lName", $row->lName, PDO::PARAM_STR);
            $stmt->bindParam(":dateOfBirth", $row->dateOfBirth, PDO::PARAM_INT);
            
            

            $stmt->execute();
            
            // DEBUG            
            ob_start();
            $stmt->debugDumpParams();
            $r = ob_get_contents();
            ob_end_clean();
    
            echo explode("\n",$r)[1]."\n";
    
        }

        //parameters for each row will be bound to this query
        $query_str = "INSERT INTO jenorris developer(fName, lName, dateOfBirth)
                      VALUES (:fName,:lName,:dateOfBirth)";
        foreach ($data->developer as $row) {
            $stmt = $connection->prepare($query_str);
            
            $stmt->bindParam(":fName", $row->fName, PDO::PARAM_STR);
            $stmt->bindParam(":lName", $row->lName, PDO::PARAM_STR);
            $stmt->bindParam(":dateOfBirth", $row->dateOfBirth, PDO::PARAM_INT);
    
            $stmt->execute();
            
            // DEBUG            
            //ob_start();
            //$stmt->debugDumpParams();
            //$r = ob_get_contents();
            //ob_end_clean();
    
            //echo explode("\n",$r)[1]."\n";
    
        }

        //parameters for each row will be bound to this query
        $query_str = "INSERT INTO progLanguage(fName, lName, dateOfBirth, language)
                      VALUES (:fName,:lName,:dateOfBirth,:language)";
        foreach ($data->progLanguage as $row) {
            $stmt = $connection->prepare($query_str);
            
            $stmt->bindParam(":language", $row->language, PDO::PARAM_STR);
            $stmt->bindParam(":fName", $row->dFName, PDO::PARAM_STR);
            $stmt->bindParam(":lName", $row->dLName, PDO::PARAM_STR);
    
            $stmt->execute();
            
            // DEBUG            
            //ob_start();
            //$stmt->debugDumpParams();
            //$r = ob_get_contents();
            //ob_end_clean();
    
            //echo explode("\n",$r)[1]."\n";
    
        }

        //parameters for each row will be bound to this query
        
        
        $query_str = "INSERT INTO avatar (fName, lName, dateOfBirth, height, gender, species)
                      VALUES (:fName, :lName, :dateOfBirth, :height, :gender, :species)";
        foreach($data->avatar as $row){
            $stmt = $connection->prepare($query_str);

            $stmt->bindParam(":fName", $row->fName, PDO::PARAM_STR);
            $stmt->bindParam(":lName", $row->lName, PDO::PARAM_STR);
            $stmt->bindParam(":dateOfBirth", $row->dateOfBirth, PDO::PARAM_STR);
            //$stmt->bindParam(":height", $row->height, PDO::PARAM_STR);
            //$stmt->bindParam(":gender", $row->gender, PDO::PARAM_STR);
            //$stmt->bindParam(":species", $row->species, PDO::PARAM_STR);
    
            $stmt->execute();

        }
        echo"Data successfully inserted";
    } catch(PDOException $error) {
        //if exception, print error and exit;
        echo "Database error: " . $error->getMessage() . "<BR>";
        die;
    }
?>
Data successfully inserted.
</pre>