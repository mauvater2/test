<?php

if(isset($_GET["get_rows"]))
{
    if($_GET["get_rows"] == "json")
    {
		include ("includes/db.php");
		global $conn;

        $sql = "SELECT * FROM items ORDER BY id";

        $jsonData = array();

        if ($result = mysql_query($sql,$conn)) {

            while ($row = mysql_fetch_array($result)) {
                $jsonData[] = $row;
            }

            mysql_free_result($result);

            echo "{\"rows\":". json_encode($jsonData) . "}";
        }
        else {

            echo "{\"rows\":". json_encode($jsonData) . "}";
        }

        mysql_close($conn);
    }
    else
    {
        header("HTTP/1.0 404 Not Found");
    }
}
else
{
    header("HTTP/1.0 404 Not Found");
}
?>