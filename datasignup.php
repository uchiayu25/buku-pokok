<?php
    include "config.php";

    
    if(isset($_GET['aksi'])){
        if($_GET['aksi']=='get_desa'){Generate_Desa();}
        else if($_GET['aksi']=='get_dusun'){Generate_Dusun();}
        else if($_GET['aksi']=='get_lapo'){viewlap();}
        else if($_GET['aksi']=='get_lapo2'){viewlap2();}
        else if($_GET['aksi']=='del_lapo'){hapuslap();}
        else if($_GET['aksi']=='get_lapotolak'){viewlaptolak();}
        else if($_GET['aksi']=='get_lapotolak2'){viewlaptolak2();}
        else if($_GET['aksi']=='get_lapobaru'){viewlapobaru();}
        else if($_GET['aksi']=='get_lapobaru2'){viewlapobaru2();}
        else if($_GET['aksi']=='del_lapotolak'){hapuslaptolak();}
        else if($_GET['aksi']=='get_agredusun'){viewagredusun();}

        else if($_GET['aksi']=='get_lapo3'){viewlapdesa();}
        else if($_GET['aksi']=='get_lapo4'){viewlapdesa2();}
        else if($_GET['aksi']=='get_dusun_2'){viewlapdesa3();}
        else if($_GET['aksi']=='get_lapo5'){viewlapdesa4();}
        else if($_GET['aksi']=='get_lapo6'){viewlapdesa5();}
        else if($_GET['aksi']=='get_dusun_3'){viewlapdesa6();}
        else if($_GET['aksi']=='tolak_lapo'){updatelapdesa();}
        else if($_GET['aksi']=='get_list_dusun'){listdusun();}
        else if($_GET['aksi']=='get_list_dusun2'){listdusun2();}
        else if($_GET['aksi']=='get_peng'){viewadmd();}
        else if($_GET['aksi']=='get_peng2'){viewadmd2();}
        else if($_GET['aksi']=='get_peng3'){viewadmd3();}
        else if($_GET['aksi']=='get_peng4'){viewadmd4();}
        else if($_GET['aksi']=='get_agredesa'){viewagredesa();}
        else if($_GET['aksi']=='get_agredesa2'){viewagredesa2();}

        else if($_GET['aksi']=='get_lapokecamatan'){viewlapkecamatan();}
        else if($_GET['aksi']=='get_lapokecamatan2'){viewlapkecamatan2();}
        else if($_GET['aksi']=='get_agrekecamatan'){viewagrekecamatan();}
        else if($_GET['aksi']=='get_agrekecamatan2'){viewagrekecamatan2();}

        else if($_GET['aksi']=='get_lapokabupaten'){viewlapkabupaten();}
        else if($_GET['aksi']=='get_agrekabupaten'){viewagrekabupaten();}
        else if($_GET['aksi']=='get_agrekabupaten2'){viewagrekabupaten2();}
        else if($_GET['aksi']=='get_pengkab'){viewpenggunakab();}
        else if($_GET['aksi']=='get_pengkab2'){viewpenggunakab2();}
    }

    if ( !empty($_POST['action']) ) {
        if ($_POST['action'] == "signup_user") return SignUp();
        if ($_POST['action'] == "signin_user") return SignIn();
        if ($_POST['action'] == "gantipass") return gantipass();
        if ($_POST['action'] == "tambah_laporan") return tambahlap();
        if ($_POST['action'] == "update_laporan") return updatelap();
        if ($_POST['action'] == "update_laporan_tolak") return updatelaptolak();
        if ($_POST['action'] == "verifikasi_laporan") return veriflap();
        if ($_POST['action'] == "verifikasi_adm_dusun") return verifadmdusun();
        if ($_POST['action'] == "tambah_dusun") return tambahdusun();
        if ($_POST['action'] == "update_pengguna") return updatepeng();
        if ($_POST['action'] == "tambah_adm_kecamatan") return tambah_adm_kecamatan();
        if ($_POST['action'] == "tambah_adm_desa") return tambah_adm_desa();
    }

    function hapuslap(){
        global $conn;
        $id = $_GET['id_laporan'];
        $sql = "DELETE FROM `laporan` WHERE id_laporan='$id';";
        mysqli_query($conn, $sql);

        viewlap();
    }

    function hapuslaptolak(){
        global $conn;
        $id = $_GET['id_laporan'];
        $sql = "DELETE FROM `laporan` WHERE id_laporan='$id';";
        mysqli_query($conn, $sql);

        viewlaptolak();
    }

    function updatelapdesa(){
        global $conn;
        $id = $_GET['id_laporan'];

        $sql = "UPDATE `laporan` SET `status` = 'Ditolak' WHERE `id_laporan`='$id'";
        echo $sql;
        mysqli_query($conn, $sql);
    }

    function viewlap(){
        global $conn;
        $id = $_GET['id_dusun'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_dusun = $id && lap.status = 'Sudah Terverifikasi' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlap2(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $pilihakta   = "";
        $tanggal     = " WHERE date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = "";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['pilihakta']) && $_GET['pilihakta'] != "" ){
            $pilihakta        = " AND kode_akta = '".$_GET['pilihakta']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_m LIKE '%".$_GET['search']."%' OR NIK_m LIKE '".$_GET['search']."%')";
        }

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " WHERE date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        $sql = "SELECT * FROM `lap_terverikasi`".$tanggal.$search.$kecamatan.$desa.$dusun.$pilihakta;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlaptolak(){
        global $conn;
        $id = $_GET['id_dusun'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_dusun = $id && lap.status = 'Ditolak' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlaptolak2(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $pilihakta   = "";
        $tanggal     = " WHERE date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = "";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['pilihakta']) && $_GET['pilihakta'] != "" ){
            $pilihakta        = " AND kode_akta = '".$_GET['pilihakta']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_m LIKE '%".$_GET['search']."%' OR NIK_m LIKE '".$_GET['search']."%')";
        }

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " WHERE date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        $sql = "SELECT * FROM `lap_ditolak`".$tanggal.$search.$kecamatan.$desa.$dusun.$pilihakta;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapobaru(){
        global $conn;
        $id = $_GET['id_dusun'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_dusun = $id && lap.status = 'Belum Terverifikasi' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapobaru2(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $pilihakta   = "";
        $tanggal     = " WHERE date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = "";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['pilihakta']) && $_GET['pilihakta'] != "" ){
            $pilihakta        = " AND kode_akta = '".$_GET['pilihakta']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_m LIKE '%".$_GET['search']."%' OR NIK_m LIKE '".$_GET['search']."%')";
        }

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " WHERE date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        $sql = "SELECT * FROM `lap_baru`".$tanggal.$search.$kecamatan.$desa.$dusun.$pilihakta;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapdesa(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_desa = $id && lap.status = 'Sudah Terverifikasi' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapdesa2(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $pilihakta   = "";
        $tanggal     = " WHERE date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = "";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['pilihakta']) && $_GET['pilihakta'] != "" ){
            $pilihakta        = " AND kode_akta = '".$_GET['pilihakta']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_m LIKE '%".$_GET['search']."%' OR NIK_m LIKE '".$_GET['search']."%')";
        }

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " WHERE date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        $sql = "SELECT * FROM `lap_terverikasi`".$tanggal.$search.$kecamatan.$desa.$dusun.$pilihakta;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapdesa3(){
        global $conn;
        $id = $_GET['id_dusun'];
        $kode_akta = $_GET['kode_akta'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_dusun = $id && lap.kode_akta = $kode_akta && lap.status = 'Sudah Terverifikasi' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapdesa4(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_desa = $id && lap.status = 'Belum Terverifikasi' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapdesa5(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $pilihakta   = "";
        $tanggal     = " WHERE date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = "";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['pilihakta']) && $_GET['pilihakta'] != "" ){
            $pilihakta        = " AND kode_akta = '".$_GET['pilihakta']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_m LIKE '%".$_GET['search']."%' OR NIK_m LIKE '".$_GET['search']."%')";
        }

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " WHERE date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        $sql = "SELECT * FROM `lap_baru`".$tanggal.$search.$kecamatan.$desa.$dusun.$pilihakta;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapdesa6(){
        global $conn;
        $id = $_GET['id_dusun'];
        $kode_akta = $_GET['kode_akta'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_dusun = $id && lap.kode_akta = $kode_akta && lap.status = 'Belum Terverifikasi' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapkecamatan(){
        global $conn;
        $id = $_GET['id_kecamatan'];
        $sql = "SELECT lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE lap.kode_kecamatan = $id && lap.status = 'Sudah Terverifikasi' ORDER BY lap.date_lapor;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapkecamatan2(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $pilihakta   = "";
        $tanggal     = " WHERE date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = "";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['pilihakta']) && $_GET['pilihakta'] != "" ){
            $pilihakta        = " AND kode_akta = '".$_GET['pilihakta']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_m LIKE '%".$_GET['search']."%' OR NIK_m LIKE '".$_GET['search']."%')";
        }

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " WHERE date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        $sql = "SELECT * FROM `lap_terverikasi`".$tanggal.$search.$kecamatan.$desa.$dusun.$pilihakta;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewlapkabupaten(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $pilihakta   = "";
        $tanggal     = " WHERE date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = "";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['pilihakta']) && $_GET['pilihakta'] != "" ){
            $pilihakta        = " AND kode_akta = '".$_GET['pilihakta']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_m LIKE '%".$_GET['search']."%' OR NIK_m LIKE '".$_GET['search']."%')";
        }

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " WHERE date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        $sql = "SELECT * FROM `lap_terverikasi`".$tanggal.$search.$kecamatan.$desa.$dusun.$pilihakta;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewagredusun(){
        global $conn;
        $id = $_GET['id_dusun'];
        $sql = "SELECT  lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun, COUNT(CASE WHEN jenis_kelamin='perempuan' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS perempuan, 
        COUNT(CASE WHEN jenis_kelamin='laki-laki' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS laki_laki, COUNT(CASE WHEN lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS total FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) GROUP BY lap.`id_laporan` HAVING lap.`kode_dusun` = '$id' AND lap.`status`='Sudah Terverifikasi'";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewagredesa(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $tanggal     = " lap.date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = " nama_dusun HAVING lap.`status`='Sudah Terverifikasi'";

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " AND lap.date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
            $search = " nama_desa HAVING lap.`status`='Sudah Terverifikasi'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
            $search = "nama_dusun HAVING lap.`status`='Sudah Terverifikasi'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
            $search = "lap.id_laporan HAVING lap.`status`='Sudah Terverifikasi'";
        }
        $sql = "SELECT  lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun, COUNT(CASE WHEN jenis_kelamin='perempuan' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS perempuan, 
            COUNT(CASE WHEN jenis_kelamin='laki-laki' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS laki_laki, COUNT(CASE WHEN lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS total FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
            LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) GROUP BY ".$search.$tanggal.$kecamatan.$desa.$dusun;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewagredesa2(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT  lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun, COUNT(CASE WHEN jenis_kelamin='perempuan' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS perempuan, 
        COUNT(CASE WHEN jenis_kelamin='laki-laki' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS laki_laki, COUNT(CASE WHEN lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS total FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) GROUP BY nama_dusun HAVING lap.`kode_desa` = '$id' AND lap.`status`='Sudah Terverifikasi'";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewagrekecamatan(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $tanggal     = " lap.date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = " nama_desa HAVING lap.`status`='Sudah Terverifikasi'";

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " AND lap.date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
            $search = " nama_desa HAVING lap.`status`='Sudah Terverifikasi'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
            $search = "nama_dusun HAVING lap.`status`='Sudah Terverifikasi'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
            $search = "lap.id_laporan HAVING lap.`status`='Sudah Terverifikasi'";
        }
        $sql = "SELECT  lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun, COUNT(CASE WHEN jenis_kelamin='perempuan' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS perempuan, 
            COUNT(CASE WHEN jenis_kelamin='laki-laki' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS laki_laki, COUNT(CASE WHEN lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS total FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
            LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) GROUP BY ".$search.$tanggal.$kecamatan.$desa.$dusun;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewagrekecamatan2(){
        global $conn;
        $id = $_GET['id_kecamatan'];
        $sql = "SELECT  lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun, COUNT(CASE WHEN jenis_kelamin='perempuan' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS perempuan, 
        COUNT(CASE WHEN jenis_kelamin='laki-laki' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS laki_laki, COUNT(CASE WHEN lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS total FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) GROUP BY nama_desa HAVING lap.`kode_kecamatan` = '$id' AND lap.`status`='Sudah Terverifikasi'";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewagrekabupaten(){
        global $conn;
        $kecamatan   = "";
        $desa        = "";
        $dusun       = "";
        $tanggal     = " lap.date_lapor BETWEEN '0000-00-00' AND '".date("Y-m-d")."'";
        $search      = " nama_kecamatan HAVING lap.`status`='Sudah Terverifikasi'";

        if(isset($_GET['awal']) && isset($_GET['akhir'])){
            $awal = "0000-00-00";
            $akhir = date("Y-m-d");
            if($_GET['awal']!=""){
                $awal     = $_GET['awal'];
            }
            if($_GET['akhir']!=""){
                $akhir     = $_GET['akhir'];
            }
            $tanggal     = " AND lap.date_lapor BETWEEN '".$awal."' AND '".$akhir."'";
        }

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND kode_kecamatan = '".$_GET['kecamatan']."'";
            $search = " nama_desa HAVING lap.`status`='Sudah Terverifikasi'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND kode_desa = '".$_GET['desa']."'";
            $search = "nama_dusun HAVING lap.`status`='Sudah Terverifikasi'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
            $search = "lap.id_laporan HAVING lap.`status`='Sudah Terverifikasi'";
        }
        $sql = "SELECT  lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun, COUNT(CASE WHEN jenis_kelamin='perempuan' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS perempuan, 
            COUNT(CASE WHEN jenis_kelamin='laki-laki' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS laki_laki, COUNT(CASE WHEN lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS total FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
            LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) GROUP BY ".$search.$tanggal.$kecamatan.$desa.$dusun;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewagrekabupaten2(){
        global $conn;
        $sql = "SELECT  lap.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun, COUNT(CASE WHEN jenis_kelamin='perempuan' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS perempuan, 
        COUNT(CASE WHEN jenis_kelamin='laki-laki' AND lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS laki_laki, COUNT(CASE WHEN lap.`status`='Sudah Terverifikasi' THEN 1 ELSE NULL END) AS total FROM `laporan` AS lap LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) GROUP BY nama_kecamatan HAVING lap.`status`='Sudah Terverifikasi'";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewadmd(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT peng.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `pengguna` AS peng LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE peng.kode_desa = $id && peng.status = '1' && peng.kode_dusun IS NOT NULL && peng.kode_dusun!='' ORDER BY dus.nama_dusun";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewadmd2(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT peng.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `pengguna` AS peng LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE peng.kode_desa = $id && peng.status = '0' && peng.kode_dusun IS NOT NULL && peng.kode_dusun!='' ORDER BY dus.nama_dusun";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewadmd3(){
        global $conn;
        $desa        = " WHERE peng.kode_desa = '".$_GET['desa']."' AND peng.status = '1' AND peng.`kode_dusun` IS NOT NULL AND peng.`kode_dusun`!=''";
        $dusun       = "";
        $search      = "";
        $urutan      = " ORDER BY nama_dusun";

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (nama_lengkap LIKE '%".$_GET['search']."%' OR NIK LIKE '".$_GET['search']."%')";
        }

        $sql = "SELECT peng.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `pengguna` AS peng LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun)".$desa.$search.$dusun.$urutan;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewadmd4(){
        global $conn;
        $desa        = " WHERE peng.kode_desa = '".$_GET['desa']."'AND peng.status = '0' AND peng.`kode_dusun` IS NOT NULL AND peng.`kode_dusun`!=''";
        $dusun       = "";
        $search      = "";
        $urutan      = " ORDER BY nama_dusun";

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND peng.kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $search      = " AND (peng.nama_lengkap LIKE '%".$_GET['search']."%' OR peng.NIK LIKE '%".$_GET['search']."%')";
        }

        $sql = "SELECT peng.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `pengguna` AS peng LEFT JOIN kecamatan AS kec USING (kode_kecamatan) 
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun)".$desa.$search.$dusun.$urutan;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewpenggunakab(){
        global $conn;
        $sql = "SELECT peng.NIK, peng.username, peng.nama_lengkap, peng.role, peng.kabupaten, peng.status, peng.password, CASE WHEN peng.status = '1' THEN 'Aktif' WHEN peng.status = '0' THEN 'Belum Aktif' ELSE 'Tidak Aktif' END AS status_akun, COALESCE(peng.Email,'') as Email, COALESCE(peng.kode_kecamatan,'') as kode_kecamatan, COALESCE(kec.nama_kecamatan,'') AS nama_kecamatan, 
        COALESCE(peng.kode_desa,'') AS kode_desa, COALESCE(des.nama_desa,'') AS nama_desa, COALESCE(peng.kode_dusun,'') AS kode_dusun, COALESCE(dus.nama_dusun,'') AS nama_dusun FROM `pengguna` AS peng 
        LEFT JOIN kecamatan AS kec USING (kode_kecamatan) LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) 
        WHERE peng.kode_kecamatan IS NOT NULL && peng.status !='0' ORDER BY peng.role";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function viewpenggunakab2(){
        global $conn;
        $kecamatan          = "";
        $desa               = "";
        $dusun              = "";
        $search             = " WHERE peng.status !='0' AND peng.role !='1'";
        $cari               = "";
        $urutan             = " ORDER BY peng.role";

        if( isset($_GET['kecamatan']) && $_GET['kecamatan'] != "" ){
            $kecamatan   = " AND peng.kode_kecamatan = '".$_GET['kecamatan']."'";
        }

        if( isset($_GET['desa']) && $_GET['desa'] != "" ){
            $desa        = " AND peng.kode_desa = '".$_GET['desa']."'";
        }

        if( isset($_GET['dusun']) && $_GET['dusun'] != "" ){
            $dusun        = " AND peng.kode_dusun = '".$_GET['dusun']."'";
        }

        if( isset($_GET['search']) && $_GET['search'] != "" ){
            $cari      = " AND (peng.nama_lengkap LIKE '%".$_GET['search']."%' OR peng.NIK LIKE '".$_GET['search']."%')";
        }
        
        $sql = "SELECT peng.NIK, peng.username, peng.nama_lengkap, peng.role, peng.kabupaten, peng.status, peng.password, CASE WHEN peng.status = '1' THEN 'Aktif' WHEN peng.status = '0' THEN 'Belum Aktif' ELSE 'Tidak Aktif' END AS status_akun, COALESCE(peng.Email,'') as Email, COALESCE(peng.kode_kecamatan,'') as kode_kecamatan, COALESCE(kec.nama_kecamatan,'') AS nama_kecamatan, 
        COALESCE(peng.kode_desa,'') AS kode_desa, COALESCE(des.nama_desa,'') AS nama_desa, COALESCE(peng.kode_dusun,'') AS kode_dusun, COALESCE(dus.nama_dusun,'') AS nama_dusun FROM `pengguna` AS peng 
        LEFT JOIN kecamatan AS kec USING (kode_kecamatan) LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun)".$search.$cari.$kecamatan.$desa.$dusun.$urutan;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function tambahlap(){
        global $conn;
        $tanggal_lapor          = $_POST['tanggal_lapor'];
        $NIK_m                  = $_POST['NIK_m'];
        $nama_lengkap_m         = $_POST['nama_lengkap_m'];
        $kecamatan              = $_POST['kecamatan'];
        $desa                   = $_POST['desa'];
        $dusun                  = $_POST['dusun'];
        $tempat                 = $_POST['tempat'];
        $jenis_kelamin          = $_POST['jenis_kelamin'];
        $date_m                 = $_POST['date_m'];
        $date_p                 = $_POST['date_p'];
        $data_akta              = $_POST['data_akta'];
        $no_akta                = $_POST['no_akta'];
        $NIK_p                  = $_POST['NIK_p'];
        $nama_lengkap_p         = $_POST['nama_lengkap_p'];
        $hub_p                  = $_POST['hub_p'];
        $nama_lengkap_kepdusun  = $_POST['nama_lengkap_kepdusun'];
        $alamat                 = $_POST['alamat'];
        $no_hp                  = $_POST['no_hp'];
        $no_anak                = $_POST['no_anak'];
        $no_kk                  = $_POST['no_kk'];

        $sql = "INSERT INTO `laporan`(`date_lapor`, `kode_dusun`, `kode_desa`, `kode_kecamatan`, `NIK_m`, `nama_m`, `tempat_m`, `tanggal_m`, `tanggal_p`, `kode_akta`, `no_akta`, `NIK_p`, `nama_p`, `hub_p`,`nama_lengkap_kepdusun`,`jenis_kelamin`,`status`,`alamat`,`no_hp`,`no_anak`,`no_kk`)
                VALUES ('$tanggal_lapor','$dusun','$desa','$kecamatan','$NIK_m','$nama_lengkap_m','$tempat','$date_m', '$date_p', '$data_akta', '$no_akta', '$NIK_p', '$nama_lengkap_p', '$hub_p', '$nama_lengkap_kepdusun', '$jenis_kelamin', 'Belum Terverifikasi','$alamat','$no_hp','$no_anak','$no_kk')";
        echo $sql;
        mysqli_query($conn, $sql);
    }

    function updatelap(){
        global $conn;
        $id                     = $_POST['id_laporan'];
        $tanggal_lapor          = $_POST['tanggal_lapor'];
        $NIK_m                  = $_POST['NIK_m'];
        $nama_lengkap_m         = $_POST['nama_lengkap_m'];
        $kecamatan              = $_POST['kecamatan'];
        $desa                   = $_POST['desa'];
        $dusun                  = $_POST['dusun'];
        $tempat                 = $_POST['tempat'];
        $jenis_kelamin          = $_POST['jenis_kelamin'];
        $date_m                 = $_POST['date_m'];
        $date_p                 = $_POST['date_p'];
        $data_akta              = $_POST['data_akta'];
        $no_akta                = $_POST['no_akta'];
        $NIK_p                  = $_POST['NIK_p'];
        $nama_lengkap_p         = $_POST['nama_lengkap_p'];
        $hub_p                  = $_POST['hub_p'];
        $alamat                 = $_POST['alamat'];
        $no_hp                  = $_POST['no_hp'];
        $no_anak                = $_POST['no_anak'];
        $no_kk                  = $_POST['no_kk'];

        $sql = "UPDATE `laporan` SET `date_lapor` = '$tanggal_lapor', `kode_dusun`= '$dusun', `kode_desa`='$desa', `kode_kecamatan`='$kecamatan', `NIK_m`='$NIK_m', `nama_m`='$nama_lengkap_m', `tempat_m`='$tempat', `tanggal_m`='$date_m', `tanggal_p`='$date_p', `kode_akta`='$data_akta', `no_akta`='$no_akta', `NIK_p`='$NIK_p', `nama_p`='$nama_lengkap_p', `hub_p`='$hub_p',`jenis_kelamin`='$jenis_kelamin', `alamat`='$alamat', `no_hp`='$no_hp', `status`='Belum Terverifikasi', `no_kk`='$no_kk', `no_anak`='$no_anak' WHERE `id_laporan`='$id'";
        echo $sql;
        mysqli_query($conn, $sql);
    }

    function updatelaptolak(){
        global $conn;
        $id                     = $_POST['id_laporan'];
        $tanggal_lapor          = $_POST['tanggal_lapor'];
        $NIK_m                  = $_POST['NIK_m'];
        $nama_lengkap_m         = $_POST['nama_lengkap_m'];
        $kecamatan              = $_POST['kecamatan'];
        $desa                   = $_POST['desa'];
        $dusun                  = $_POST['dusun'];
        $tempat                 = $_POST['tempat'];
        $jenis_kelamin          = $_POST['jenis_kelamin'];
        $date_m                 = $_POST['date_m'];
        $date_p                 = $_POST['date_p'];
        $data_akta              = $_POST['data_akta'];
        $no_akta                = $_POST['no_akta'];
        $NIK_p                  = $_POST['NIK_p'];
        $nama_lengkap_p         = $_POST['nama_lengkap_p'];
        $hub_p                  = $_POST['hub_p'];
        $alamat                 = $_POST['alamat'];
        $no_hp                  = $_POST['no_hp'];
        $no_anak                = $_POST['no_anak'];
        $no_kk                  = $_POST['no_kk'];

        $sql = "UPDATE `laporan` SET `date_lapor` = '$tanggal_lapor', `kode_dusun`= '$dusun', `kode_desa`='$desa', `kode_kecamatan`='$kecamatan', `NIK_m`='$NIK_m', `nama_m`='$nama_lengkap_m', `tempat_m`='$tempat', `tanggal_m`='$date_m', `tanggal_p`='$date_p', `kode_akta`='$data_akta', `no_akta`='$no_akta', `NIK_p`='$NIK_p', `nama_p`='$nama_lengkap_p', `hub_p`='$hub_p',`jenis_kelamin`='$jenis_kelamin', `alamat`='$alamat', `no_hp`='$no_hp', `status`='Belum Terverifikasi', `no_anak`='$no_anak', `no_kk`='$no_kk' WHERE `id_laporan`='$id'";
        echo $sql;
        mysqli_query($conn, $sql);
    }

    function tambahdusun(){
        global $conn;
        $desa                   = $_POST['desa'];
        $dusun                  = $_POST['dusun'];
        
        $max = "SELECT MAX(`kode_dusun`) as maxim FROM `dusun` WHERE `kode_desa` = '$desa'";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $max));
        $sql = "INSERT INTO `dusun`(`kode_dusun`, `nama_dusun`, `kode_desa`) VALUES (".($result['maxim']+1).",'$dusun','$desa')";
        echo $sql;
        mysqli_query($conn, $sql);
    }

    function veriflap(){
        global $conn;
        $id                     = $_POST['id_laporan'];
        $sql = "UPDATE `laporan` SET `status`='Sudah Terverifikasi' WHERE `id_laporan`='$id'";
        echo $sql;
        mysqli_query($conn, $sql);
    }

    function verifadmdusun(){
        global $conn;
        $id                     = $_POST['username'];
        $sql = "UPDATE `pengguna` SET `status`='1' WHERE `username`='$id'";
        echo $sql;
        mysqli_query($conn, $sql);
    }

    function SignUp(){
        global $conn;
        $NIK            = $_POST['NIK'];
        $nama_lengkap   = $_POST['nama_lengkap'];
        $password       = $_POST['password'];
        $email          = $_POST['email'];
        $kecamatan      = $_POST['kecamatan'];
        $desa           = $_POST['desa'];
        $dusun          = $_POST['dusun'];

        $sql = "INSERT INTO `pengguna`(`username`, `nama_lengkap`, `NIK`, `role`, `kode_kecamatan`, `kode_desa`, `kode_dusun`, `password`, `email`)
                VALUES ('$NIK','$nama_lengkap','$NIK','4','$kecamatan','$desa','$dusun','$password', '$email')";
        mysqli_query($conn, $sql);
    }

    function SignIn(){
        global $conn;
        $user = $_POST['user'];
        $pwd = $_POST['pwd'];

        $sql = "SELECT pe.*, kec.nama_kecamatan, des.nama_desa, dus.nama_dusun FROM `pengguna` AS pe LEFT JOIN kecamatan AS kec USING (kode_kecamatan)
        LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN dusun AS dus USING (kode_dusun) WHERE (`status` = '1') AND (`username` = '$user' OR `Email` = '$user')";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);
        if($data){
            if(password_verify($pwd,$data['password']) || $pwd == $data['password']){
                echo json_encode($data);
            }else{
                echo "1";
            }
        }else{
            echo "2";
        }
    }

    function gantipass(){
        global $conn;
        $NIK            = $_POST['name_user'];
        $password       = $_POST['newpwd'];

        $akun = "SELECT `username` FROM `pengguna` WHERE `username`='$NIK' ";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $akun));
        if(is_null($result)){
            echo "2";
        }else{
            $sql = "UPDATE `pengguna` SET `password` = '$password' WHERE `username`='$NIK'";
            mysqli_query($conn, $sql);
        }
    }

    function Generate_Desa(){
        global $conn;
        $id = $_GET['id_kecamatan'];
        $sql = "SELECT * FROM `desa` WHERE kode_kecamatan = $id ORDER BY nama_desa;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function Generate_Dusun(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT * FROM `dusun` WHERE kode_desa = $id ORDER BY nama_dusun;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function listdusun(){
        global $conn;
        $id = $_GET['id_desa'];
        $sql = "SELECT dus.*, kec.nama_kecamatan, des.nama_desa FROM `dusun` AS dus LEFT JOIN desa AS des USING (kode_desa) LEFT JOIN kecamatan AS kec USING (kode_kecamatan) WHERE kode_desa = $id ORDER BY nama_dusun;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function listdusun2(){
        global $conn;
        $search      = "";
        $desa        = " WHERE kode_desa = '".$_GET['desa']."'";

        if( isset($_GET['search']) && $_GET['search'] != ""){
            $search      = " AND nama_dusun LIKE '%".$_GET['search']."%'";
        }

        $sql = "SELECT dus.*, kec.nama_kecamatan, des.nama_desa FROM `dusun` AS dus LEFT JOIN desa AS des USING (kode_desa) 
        LEFT JOIN kecamatan AS kec USING (kode_kecamatan)".$desa.$search;
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function updatepeng(){
        global $conn;
        $id             = $_POST['username'];
        $nama_lengkap   = $_POST['nama_lengkap'];
        $email          = $_POST['email'];
        $status         = $_POST['status'];

        $sql = "UPDATE `pengguna` SET `nama_lengkap`='$nama_lengkap', `Email`='$email', `status`='$status' WHERE `username`='$id'";
        mysqli_query($conn, $sql);
    }

    function tambah_adm_kecamatan(){
        global $conn;
        $NIK            = $_POST['NIK1'];
        $nama_lengkap   = $_POST['nama_lengkap1'];
        $password       = $_POST['password1'];
        $email          = $_POST['email1'];
        $kecamatan      = $_POST['kecamatan1'];

        $sql = "INSERT INTO `pengguna`(`username`, `nama_lengkap`, `NIK`, `role`, `kode_kecamatan`, `status`, `password`, `email`)
                VALUES ('$NIK','$nama_lengkap','$NIK','2','$kecamatan', '1', '$password', '$email')";
        mysqli_query($conn, $sql);
    }

    function tambah_adm_desa(){
        global $conn;
        $NIK            = $_POST['NIK2'];
        $nama_lengkap   = $_POST['nama_lengkap2'];
        $password       = $_POST['password2'];
        $email          = $_POST['email2'];
        $kecamatan      = $_POST['kecamatan2'];
        $desa           = $_POST['desa2'];

        $sql = "INSERT INTO `pengguna`(`username`, `nama_lengkap`, `NIK`, `role`, `kode_kecamatan`, `kode_desa`, `status`, `password`, `email`)
                VALUES ('$NIK','$nama_lengkap','$NIK','3','$kecamatan', '$desa', '1', '$password', '$email')";
        mysqli_query($conn, $sql);
    }
 
?>