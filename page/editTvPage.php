<?php  
include '../component/sidebar.php' 
// Ini file tugas 
?> 
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >          
    <div class="body d-flex justify-content-between">         
        <h4>EDIT TV SHOW</h4>                                  
    </div>
    <form action="../process/editTvProcess.php" method="post">                                     
        <div class="mb-3">                                         
            <label for="exampleInputTv1" class="form-label">Name</label>                                         
            <input class="form-control" id="name" name="name" aria-describedby="tvInput">                                     
        </div>                                                                                                             
        <div class="mb-3">                                         
            <label for="exampleInputTv1" class="form-label">Genre</label>                                         
            <select class="form-select" aria-label="Default select example" name="genre" id="genre"> 
            <option value="Comedy">Comedy</option>                                             
            <option value="Horror">Horror</option>                                             
            <option value="Action">Action</option>   
            <option value="Thriller">Thriller</option>
            <option value="Romance">Romance</option>
            <option value="Crimes">Crimes</option>
            <option value="Drama">Drama</option>
            <option value="Slice of Life">Slice of Life</option>                                      
            </select>                                     
        </div>                                     
        <div class="mb-3">                                         
            <label for="exampleInputTv1" class="form-label">Realese</label>                                         
            <input class="form-control" id="realese" name="realese" aria-describedby="tvInput">                                     
        </div>
        <div class="mb-3">                                         
            <label for="exampleInputTv1" class="form-label">Episode</label>                                         
            <input class="form-control" id="episode" name="episode" aria-describedby="tvInput">                                     
        </div>   
        <div class="mb-3">                                         
            <label for="exampleInputTv1" class="form-label">Season</label>                                         
            <input class="form-control" id="season" name="season" aria-describedby="tvInput">                                     
        </div>   
        <div class="mb-3">                                         
            <label for="exampleInputTv1" class="form-label">Synopsis</label>                                         
            <input class="form-control" id="synopsis" name="synopsis" aria-describedby="tvInput">                                     
        </div>                               

        <div class="d-grid gap-2">                                         
            <button type="submit" style="background-color: green" class="btn btn-primary" name="submit">Submit</button>                                     
        </div>                                 
    </form>
</div>