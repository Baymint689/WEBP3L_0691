<?php     
    // untuk ngecek tombol yang namenya 'submit' sudah di pencet atau belum     
    // $_POST itu method di formnya     
    if(isset($_POST['submit'])){ 
    
        // untuk mengoneksikan dengan database dengan memanggil file db.php         
        include('../db.php'); 

        // tampung nilai yang ada di from ke variabel         
        // sesuaikan variabel name yang ada di tambahPage.php disetiap input  
            
        $id = $_POST['id']; 
        $nama = $_POST['nama'];   
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];      
        $username = $_POST['username'];         
        $password = $_POST['password']; 
        $sisa_deposit = $_POST['sisa_deposit'];
        $sisa_sesi_kelas = $_POST['sisa_sesi_kelas'];

        $query = mysqli_query($con,             
            "INSERT INTO member(id, nama, alamat, telepon, email, username, password, sisa_deposit, sisa_sesi_kelas)                  
                VALUES
                ('$id', '$nama', '$alamat', '$telepon', '$email', '$username', '$password', '$sisa_deposit', '$sisa_sesi_kelas')")                 
                    or die(mysqli_error($con));  
 
            if($query){             
                echo                 
                '<script>                     
                alert("Berhasil"); 
                window.location = "../page/listMemberPage.php" 
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