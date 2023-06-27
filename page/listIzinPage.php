<?php  
include '../component/sidebar.php' 
?>  
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >          
    <div class="body d-flex justify-content-between">         
        <h4>LIST IZIN</h4>                                  
        <a href="./listIzinBPage.php"> 
            <i style="color: red" class="fa fa-envelope-open"></i>
        </a>      
    </div>     
        <hr>         
            <table class="table ">         
            <thead>             
                <tr>                               
                    <th scope="col">Sesi</th>                 
                    <th scope="col">Id Instruktur</th>                 
                    <th scope="col">Id Instruktur Pengganti</th>                 
                    <th scope="col">Nama Intruktur</th> 
                    <th scope="col">Nama Instruktur Pengganti</th>     
                    <th scope="col">Status konfirmasi</th>            
                    <th scope="col"></th>             
                </tr>         
            </thead>         
            <tbody>             
                <?php             
                $query = mysqli_query($con, "SELECT * FROM izin") or die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) {                 
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';             
                }else{                 
                    $no = 1;                 
                    while($data = mysqli_fetch_assoc($query)){                 
                    echo'                 
                    <tr>                
                        <td>'.$data['sesi'].'</td>                     
                        <td>'.$data['id_instruktur'].'</td>                     
                        <td>'.$data['id_instruktur_ganti'].'</td>                     
                        <td>'.$data['nama_instruktur'].'</td>                     
                        <td>'.$data['nama_instruktur_ganti'].'</td> 
                        <td>'.$data['status_konfirmasi'].'</td>                                    
                        <td>   
                        
                    </td>                 
                </tr>';                 
                $no++;                 
                }             
            }             
            ?>         
        </tbody>     
    </table>  
</div>  
</aside>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script> 
</body> 
</html> 