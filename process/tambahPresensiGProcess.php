<?php     
    // untuk ngecek tombol yang namenya 'submit' sudah di pencet atau belum     
    // $_POST itu method di formnya     
    if(isset($_POST['submit'])){ 
    
        // untuk mengoneksikan dengan database dengan memanggil file db.php         
        include('../db.php'); 

        // tampung nilai yang ada di from ke variabel         
        // sesuaikan variabel name yang ada di tambahPage.php disetiap input  
            
        $nomor_struk_gym = $_POST['nomor_struk_gym']; 
        $id_member = $_POST['id_member'];   
        $tanggal = $_POST['tanggal'];      
        $member = $_POST['member'];         
        $slot_waktu = $_POST['slot_waktu']; 

        $query = mysqli_query($con,             
            "INSERT INTO presensi_gym(nomor_struk_gym, id_member, tanggal, member, slot_waktu)                  
                VALUES
                ('$nomor_struk_gym', '$id_member', '$tanggal', '$member', '$slot_waktu')")                 
                    or die(mysqli_error($con));  
 
            if($query){             
                echo                 
                '<script>                     
                alert("Berhasil"); 
                window.location = "../page/listPresensiGPage.php" 
                </script>';        
            }else{             
                echo                 
                '<script>                 
                alert("Gagal");                 
                </script>';         
            } 
    
        }else{         
            echo             
            '<script>             
            window.history.back()             
            </script>';     
        } 
    ?> 