<?php

    if (!isset($_POST['craftebalBoards']) || !isset($_POST['availableItems'])) {
        echo "there was an error :(";
        echo "<br><br> <button onclick=\"javascript:window.location.href='..'\">return</button>";
        die();
    } else {
        $availebalItems = json_decode($_POST['availableItems']); // TODO: chek for bad entries
        $craftebalBoards = json_decode($_POST['craftebalBoards']); // TODO: chek for bad entries
    }

    // print_r($availebalItems);
    // echo "<br>";
    // print_r($_POST['craftebalBoards']);

    // connect to db
    include("../configs/config.php");
    include("connect_db.php");

    // TRUNCATE table
    $sql = "TRUNCATE TABLE items;";
    // $sql .= "TRUNCATE TABLE boards;";

    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Syntax: " . $sql . "<br>";
        print_r($db->errorInfo());
        echo "<br><br>";
    }

    // add items
    foreach ($availebalItems as $component => $types) {
        echo "- " . $component . ": " . strlen($types) . " <br>";

        $sql = "INSERT INTO items (component, types) VALUES ('$component', '$types');";

        if ($db->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Syntax: " . $sql . "<br>";
            print_r($db->errorInfo());
            echo "<br><br>";
        }

    }


    echo "<br><br>---------------------------------<br><br>";


    // add boards


    foreach ($craftebalBoards as $board => $requirements) {
        echo  "<br>" . $board . ":";
        $requirements_arr_str = "{";
        foreach ($requirements as $requiredItem => $nbr_required) {
            if (strlen($requirements_arr_str) != 1) {
                $requirements_arr_str .= ",";
            }
            $requirements_arr_str .= "\"" . $requiredItem . "\":" . $nbr_required;
        }
        $requirements_arr_str .= "}";

        echo  $requirements_arr_str;
        echo "<br>";

        $sql = "INSERT INTO boards (bord, requirements) VALUES ('$board', '$requirements_arr_str');";

        // if ($db->query($sql) === TRUE) {
        //     echo "New record created successfully";
        // } else {
            echo "<br><br>Syntax: " . $sql . "<br>";
        //     print_r($db->errorInfo());
        //     echo "<br>";
        // }

    }

    $db = null;

    // return to index
    echo "<br><br> <button onclick=\"javascript:window.location.href='..'\">return</button>";
    header("Location: ".$SiteRoot);
?>
