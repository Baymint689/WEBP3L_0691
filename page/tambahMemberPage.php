<?php  
include '../component/sidebar.php' 
?> 
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >          
    <div class="body d-flex justify-content-between">         
        <h4>TAMBAH MEMBER</h4>                                  
    </div>
    <form action="../process/tambahMemberProcess.php" method="post">   
    <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Id Member</label>                                         
            <input class="form-control" id="id" name="id" aria-describedby="memberInput">                                     
        </div>                                     
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Nama </label>                                         
            <input class="form-control" id="nama" name="nama" aria-describedby="memberInput">                                     
        </div>              
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Alamat Member</label>                                         
            <input class="form-control" id="alamat" name="alamat" aria-describedby="memberInput">                                     
        </div>
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Nomor telepon Member</label>                                         
            <input class="form-control" id="telepon" name="telepon" aria-describedby="memberInput">                                     
        </div>                                                                                               
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Email Member</label>                                         
            <input class="form-control" id="email" name="email" aria-describedby="memberInput">                                     
        </div>   
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Username Member</label>                                         
            <input class="form-control" id="username" name="username" aria-describedby="memberInput">                                     
        </div>         
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Password</label>                                         
            <input class="form-control" id="password" name="password" aria-describedby="memberInput">                                     
        </div>
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Sisa deposit Member</label>                                         
            <input class="form-control" id="sisa_deposit" name="sisa_deposit" aria-describedby="memberInput">                                     
        </div>
        <div class="mb-3">                                         
            <label for="exampleInputMember1" class="form-label">Sisa sesi kelas member</label>                                         
            <input class="form-control" id="sisa_sesi_kelas" name="sisa_sesi_kelas" aria-describedby="memberInput">                                     
        </div>                      

        <div class="d-grid gap-2">                                         
            <button type="submit" style="background-color: green" class="btn btn-primary" name="submit">Submit</button>                                     
        </div>                                 
    </form>
</div>