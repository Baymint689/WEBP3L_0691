<?php  
include '../component/sidebar.php' 
?> 
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >          
    <div class="body d-flex justify-content-between">         
        <h4>TAMBAH INSTRUKTUR</h4>                                  
    </div>
    <form action="../process/tambahInstrukturProcess.php" method="post">   
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Id Instruktur</label>                                         
            <input class="form-control" id="id" name="id" aria-describedby="instrukturInput">                                     
        </div>                                     
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Nama </label>                                         
            <input class="form-control" id="nama" name="nama" aria-describedby="instrukturInput">                                     
        </div>                                                                                                             
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Email Instruktur</label>                                         
            <input class="form-control" id="email" name="email" aria-describedby="instrukturInput">                                     
        </div>   
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Username instruktur</label>                                         
            <input class="form-control" id="username" name="username" aria-describedby="instrukturInput">                                     
        </div>         
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Password</label>                                         
            <input class="form-control" id="password" name="password" aria-describedby="instrukturInput">                                     
        </div>
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Alamat Instruktur</label>                                         
            <input class="form-control" id="alamat" name="alamat" aria-describedby="instrukturInput">                                     
        </div>
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Jumlah keterlambatan instruktur bulan ini</label>                                         
            <input class="form-control" id="keterlambatan" name="keterlambatan" aria-describedby="instrukturInput">                                     
        </div>                      

        <div class="d-grid gap-2">                                         
            <button type="submit" style="background-color: green" class="btn btn-primary" name="submit">Submit</button>                                     
        </div>                                 
    </form>
</div>