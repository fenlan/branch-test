<?php
/*  ------------------------------------------------------
    Author: fenlan
    Update: 2017.5.3
    function: Insert flight information into flight table
    ------------------------------------------------------
    Flight----------AirlineID       numeric(10)    PRIMARY KEY
                ----AirNum          char(10)
                ----Source          char(20)
                ----Destination     char(20)
                ----Source_Time     datetime
                ----Arr_Time        datetime
                ----Price           numeric(10,2)
    -------------------------------------------------------
*/

$Source_date = date("Y-m-d");
$ID = date("Ymd")*100;

$con = mysqli_connect("localhost", "fenlan", "1475307818");
mysqli_select_db($con, "reser_system");

mysqli_query($con, "DELETE FROM flight");

for ($date=0; $date < 10; $date++) {
    $Source_date = date("Y-m-d",strtotime("+$date day"));
    $ID = date("Ymd",strtotime("+$date day"))*100;

    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','SC4963','xian','guiyang','$Source_date','09:55:00','$Source_date','11:45:00','290')");
    echo $ID++, "\n";
    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','AQ1076','xian','guiyang','$Source_date','09:50:00','$Source_date','11:35:00','309')");
    echo $ID++, "\n";
    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','GS7585','xian','guiyang','$Source_date','09:25:00','$Source_date','14:05:00','330')");
    echo $ID++, "\n";
    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','SC4733','xian','guiyang','$Source_date','15:50:00','$Source_date','17:45:00','340')");
    echo $ID++, "\n";
    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','JD5707','xian','guiyang','$Source_date','12:50:00','$Source_date','14:45:00','345')");
    echo $ID++, "\n";
    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','SC1198','xian','guiyang','$Source_date','09:40:00','$Source_date','11:30:00','380')");
    echo $ID++, "\n";
    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','GS7929','xian','guiyang','$Source_date','10:40:00','$Source_date','12:30:00','380')");
    echo $ID++, "\n";
    mysqli_query($con, "INSERT INTO flight VALUES ('$ID','G51198','xian','guiyang','$Source_date','09:40:00','$Source_date','11:30:00','385')");
    echo $ID++, "\n";
}

echo $Source_date ,"is ok!\n";
mysqli_close($con);
?>
