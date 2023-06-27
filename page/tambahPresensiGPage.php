<?php  
include '../component/sidebar.php' 
?> 
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >          
    <div class="body d-flex justify-content-between">         
        <h4>TAMBAH PRESENSI GYM</h4>                                  
    </div>
    <form action="../process/tambahPresensiGProcess.php" method="post">   
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Nomor Struk Gym</label>                                         
            <input class="form-control" id="nomor_struk_gym" name="nomor_struk_gym" aria-describedby="presensiGInput">                                     
        </div>                                     
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">ID Member</label>                                         
            <input class="form-control" id="id_member" name="id_member" aria-describedby="presensiGInput">                                     
        </div>                                                                                                             
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Tanggal & Waktu</label>                                         
            <input class="form-control" id="tanggal" name="tanggal" aria-describedby="presensiGInput">                                     
        </div>   
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Nama Member</label>                                         
            <input class="form-control" id="member" name="member" aria-describedby="presensiGInput">                                     
        </div>         
        <div class="mb-3">                                         
            <label for="exampleInputInstruktur1" class="form-label">Slot Waktu</label>                                         
            <input class="form-control" id="slot_waktu" name="slot_waktu" aria-describedby="presensiGInput">                                     
        </div>
      
        <div class="d-grid gap-2">                                         
            <button type="submit" style="background-color: green" class="btn btn-primary" name="submit">Submit</button>                                     
        </div>                                 
    </form>
</div>