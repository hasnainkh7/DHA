<?php

function getLocationsSelect(){

    include("connection.php");
    $gLSQuery = "SELECT * FROM location";
    $gLSData = mysqli_query($conn,$gLSQuery);
    while($gLSResult = mysqli_fetch_assoc($gLSData)){
        echo "<option value=".$gLSResult['location_id'].">".$gLSResult['location_name']."</option>";
    }
}

function getLocationsTable(){

    include("connection.php");
    $gLTQuery = "SELECT * FROM location";
    $gLTData = mysqli_query($conn,$gLTQuery);
    while($gLTResult = mysqli_fetch_assoc($gLTData)){
        echo "
        <tr>
        <td>".$gLTResult['location_name']."</td>
        <td>
            <div class='d-flex'>
                <a href='#' class='btn btn-primary shadow btn-xs sharp mr-1'><i class='fa fa-pencil'></i></a>
                <a href='#' class='btn btn-danger shadow btn-xs sharp'><i class='fa fa-trash'></i></a>
            </div>
        </td>
        </tr>";
    }
}

function getSectorsForAddProject(){

    include("connection.php");
    $gSFAPQuery = "SELECT * FROM sector";
    $gSFAPData = mysqli_query($conn,$gSFAPQuery);
    while($gSFAPResult = mysqli_fetch_assoc($gSFAPData)){
        echo "
        <div class='col-sm-2 col-6'>
            <div class='card avtivity-card bg-light'>
                <input type='checkbox' name='sectorName_".$gSFAPResult['sector_name']."' id='sectorId_".$gSFAPResult['sector_id']."'/>
                <div class='card-body'>
                    <div class='media align-items-center'>
                         <div class='media-body text-center'>
                            <span class='title text-black font-w600'>".$gSFAPResult['sector_name']."</span>
                        </div>
                    </div>
                </div>
                <div class='effect bg-success'></div>
            </div>
        </div>
        ";
    }
}

?>