<?php  
include '../component/sidebar.php' 
?>  
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >          
    <div class="body d-flex justify-content-between">         
        <h4>LIST PRESENSI KELAS</h4>                                  
    </div>     
        <hr>         
            <table class="table ">         
            <thead>             
                <tr>                               
                    <th scope="col">No Struk</th>                 
                    <th scope="col">Tanggal</th>                 
                    <th scope="col">Id Member</th>                 
                    <th scope="col">Member</th> 
                    <th scope="col">Instruktur</th>     
                    <th scope="col">Kelas</th>  
                    <th scope="col">Tarif</th>     
                    <th scope="col">Sisa Deposit</th>          
                    <th scope="col"></th>             
                </tr>         
            </thead>         
            <tbody>             
                <?php            
                $query = mysqli_query($con, "SELECT * FROM presensi_kelas") or die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) {                 
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';             
                }else{                 
                    $no = 1;                 
                    while($data = mysqli_fetch_assoc($query)){                 
                    echo'                 
                    <tr>                
                        <td>'.$data['nomor_struk_pk'].'</td>                     
                        <td>'.$data['tanggal'].'</td>                     
                        <td>'.$data['id_member'].'</td>                     
                        <td>'.$data['member'].'</td>                     
                        <td>'.$data['instruktur'].'</td> 
                        <td>'.$data['kelas'].'</td>    
                        <td>'.$data['tarif'].'</td> 
                        <td>'.$data['sisa_deposit'].'</td>                                 
                        <td>   
                        
                    </td>                 
                </tr>';                 
                $no++;                 
                }             
            }             
            ?>         
        </tbody>     
    </table>
    
    <div class="body d-flex justify-content-between">         
        <h4>LIST PRESENSI KELAS PAKET</h4>                                  
    </div>     
        <hr>         
            <table class="table ">         
            <thead>             
                <tr>                               
                    <th scope="col">No Struk</th>                 
                    <th scope="col">Tanggal</th>                 
                    <th scope="col">Id Member</th>                 
                    <th scope="col">Member</th> 
                    <th scope="col">Instruktur</th>     
                    <th scope="col">Kelas</th>  
                    <th scope="col">Sisa Deposit</th>     
                    <th scope="col">Berlaku Sampai</th>          
                    <th scope="col"></th>             
                </tr>         
            </thead>         
            <tbody>             
                <?php            
                $query = mysqli_query($con, "SELECT * FROM presensi_kelasp") or die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) {                 
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';             
                }else{                 
                    $no = 1;                 
                    while($data = mysqli_fetch_assoc($query)){                 
                    echo'                 
                    <tr>                
                        <td>'.$data['nomor_struk_pp'].'</td>                     
                        <td>'.$data['tanggal'].'</td>                     
                        <td>'.$data['id_member'].'</td>                     
                        <td>'.$data['member'].'</td>                     
                        <td>'.$data['instruktur'].'</td> 
                        <td>'.$data['kelas'].'</td>     
                        <td>'.$data['sisa_deposit'].'</td>  
                        <td>'.$data['akhir_berlaku'].'</td>                               
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