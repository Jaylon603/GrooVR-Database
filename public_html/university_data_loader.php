<pre>
<?php
require("connection.php");

// data loader
// 1. read from json file into an array variable/structure
// 2. connect to the database
// 3. insert all data into respective rows in the correct order for all tables

// reading json file
try{
    $file_name = "data_dump.json";
    $json_contents = file_get_contents($file_name);
    $data = json_decode($json_contents);

    //print_r($data);
    //die;

}catch(Exception $e){
    echo "JSON Exception: " . $e->getMessage();
    die;
}

try{
        // DEBUG
        // emulate prepared statements so debugDumpParams show full query
        $connection->setAttribute( PDO::ATTR_EMULATE_PREPARES, true );

        // empty table before inserting
        $connection->query("DELETE FROM department;");
        $connection->query("DELETE FROM instructor;");
       
        //parameters for each row will be bound to this query
        $query_str = "INSERT INTO department (dept_name, building, budget)
                      VALUES (:dept_name,:building,:budget)";
        foreach ($data->department as $row) {
            $stmt = $connection->prepare($query_str);
            
            $stmt->bindParam(":dept_name", $row->dept_name, PDO::PARAM_STR);
            $stmt->bindParam(":building", $row->building, PDO::PARAM_STR);
            $stmt->bindParam(":budget", $row->budget, PDO::PARAM_INT);
    
            $stmt->execute();
            
            // DEBUG            
            // ob_start();
            // $stmt->debugDumpParams();
            // $r = ob_get_contents();
            // ob_end_clean();
    
            // echo explode("\n",$r)[1]."\n";
    
        }

        $query_str = "INSERT INTO instructor (id, name, dept_name, salary)
                      VALUES (:id,:name,:dept_name,:salary)";
        foreach($data->instructor as $row){
            $stmt = $connection->prepare($query_str);

            $stmt->bindParam(":id", $row->id, PDO::PARAM_STR);
            $stmt->bindParam(":name", $row->name, PDO::PARAM_STR);
            $stmt->bindParam(":dept_name", $row->dept_name, PDO::PARAM_STR);
            $stmt->bindParam(":salary", $row->salary, PDO::PARAM_INT);
    
            $stmt->execute();

        }
    } catch(PDOException $error) {
        //if exception, print error and exit;
        echo "Database error: " . $error->getMessage() . "<BR>";
        die;
    }
?>
Data successfully inserted.
</pre>