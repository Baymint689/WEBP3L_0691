<?php     
    if(isset($_POST['submit']) and isset($_GET['id'])){ 
           
        include('../db.php'); 

        // tampung nilai yang ada di from ke variabel         
        
        $id = $_GET['id'];
        $name = $_POST['name'];   
        $genre = $_POST['genre'];      
        $realese = $_POST['realese'];        
        $season = $_POST['season']; 
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,             
            "UPDATE `movies` SET `name` = '$name', `genre` = '$genre', `realese` = '$realese', `season` = '$season', 
            `synopsis` = '$synopsis' WHERE `movies`.`id` = $id;")                 
                    or die(mysqli_error($con));  
 
            if($query){             
                echo                 
                '<script>                     
                alert("Movie Editing Success"); 
                window.location = "../page/listMoviesPage.php" 
                </script>';        
            }else{             
                echo                 
                '<script>                 
                alert("Movie Editing Failed");                 
                </script>';         
            } 
    
        }else{         
            echo             
            '<script>             
            window.history.back()             
            </script>';     
        } 
?> 