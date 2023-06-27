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
        $email = $_POST['email'];      
        $username = $_POST['username'];         
        $password = $_POST['password']; 
        $alamat = $_POST['alamat'];
        $keterlambatan = $_POST['keterlambatan'];

        $query = mysqli_query($con,             
            "INSERT INTO instruktur(id, nama, email, username, password, alamat, keterlambatan)                  
                VALUES
                ('$id', '$nama', '$email', '$username', '$password', '$alamat', '$keterlambatan')")                 
                    or die(mysqli_error($con));  
 
            if($query){             
                echo                 
                '<script>                     
                alert("Berhasil"); 
                window.location = "../page/listInstrukturPage.php" 
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