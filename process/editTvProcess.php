<?php     
    if(isset($_POST['submit']) and isset($_GET['id'])){ 
    
        // Ini file tugas         
        include('../db.php'); 

        // tampung nilai yang ada di from ke variabel         
        
        $id = $_GET['id'];
        $name = $_POST['name'];   
        $genre = $_POST['genre'];      
        $realese = $_POST['realese'];
        $episode = $_POST['episode'];         
        $season = $_POST['season']; 
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con,             
            "UPDATE `tvshow` SET `name` = '$name', `genre` = '$genre', `realese` = '$realese', `episode` = '$episode', `season` = '$season', 
            `synopsis` = '$synopsis' WHERE `tvshow`.`id` = $id;")                 
                    or die(mysqli_error($con));  
 
            if($query){             
                echo                 
                '<script>                     
                alert("Tv Show Editing Success"); 
                window.location = "../page/listTvPage.php" 
                </script>';        
            }else{             
                echo                 
                '<script>                 
                alert("Tv Show Editing Failed");                 
                </script>';         
            } 
    
        }else{         
            echo             
            '<script>             
            window.history.back()             
            </script>';     
        } 
?> 