<?php     
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum     
    // $_POST itu method di formnya     
    if(isset($_POST['register'])){ 
    
        // untuk mengoneksikan dengan database dengan memanggil file db.php         
        include('../db.php'); 

        // tampung nilai yang ada di from ke variabel         
        // sesuaikan variabel name yang ada di registerPage.php disetiap input  

        $email = $_POST['email'];         
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);         
        $name = $_POST['name'];         
        $phonenum = $_POST['phonenum'];         

        $select = mysqli_query($con, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
        if(mysqli_num_rows($select)) {
            echo                 
                '<script>                 
                alert("Register failed because the email address already exists");                  
                window.location = "../page/registerPage.php"
                </script>';         
        } else {
            $query = mysqli_query($con,             
            "INSERT INTO users(email, password, name, phonenum)                  
                VALUES
                ('$email', '$password', '$name', '$phonenum')")                 
                    or die(mysqli_error($con));  
        }
 
            if($query){             
                echo                 
                '<script>                 
                alert("Register Success");                  
                window.location = "../index.php"                 
                </script>';         
            }else{             
                echo                 
                '<script>                 
                alert("Register Failed");                 
                </script>';         
            } 
    
        }else{         
            echo             
            '<script>             
            window.history.back()             
            </script>';     
        } 
    ?> 