<?php
    include "config.php";
	
    //fetch table rows from mysql db
    $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category ';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/faskes.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// rs =====================================================================================================

    //fetch table rows from mysql db
    $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category 
			and f.id_category = 3';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/rs.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// puskesmas =============================================================================================

    //fetch table rows from mysql db
	$sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category 
			and f.id_category = 4';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/puskesmas.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// dokter =============================================================================================

    //fetch table rows from mysql db
     $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category
			and f.id_category = 1';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/dr.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// dokter gigi =============================================================================================
	
    //fetch table rows from mysql db
    $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category
			and f.id_category = 2';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/drg.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// klinik utama =============================================================================================

    //fetch table rows from mysql db
    $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category
			and f.id_category = 5';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/ku.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// klinik pratama =============================================================================================

    //fetch table rows from mysql db
    $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category
			and f.id_category = 6';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/kp.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// apotik =============================================================================================

    //fetch table rows from mysql db
    $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category
			and f.id_category = 7';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/apotik.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
	// optik =============================================================================================

    //fetch table rows from mysql db
    $sql = 'select  concat(kode_faskes, " - ",faskes) as faskes, lat, lng, telp, alamat, keterangan, category 
			from faskes f, category c
			where f.id_category = c.id_category
			and f.id_category = 8';
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    //echo json_encode($emparray);
    
	 //write to json file
    $fp = fopen('data/optik.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);
	
    //close the db connection
    mysqli_close($connection);
?>