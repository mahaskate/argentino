<div class="noticias-main">
    <div class="alert">
        <h2>Novidades da ilha</h2>
    </div>    
    <?php 
    for($i=1;$i<=3;$i++)
    {
        if($i == 3)
        $margin = 0;
        else
        $margin="13px";   
        echo"
            <div class='container-noticias-main' style='margin-right:".$margin."'>
              <img src='img/pic1.jpg' alt=''>
              <h4>Thumbnail label</h4>
              <h6>Thumbnail caption right here</h6>
              <a href='' class='btn btn-inverse'><i class='icon-white icon-file'></i> LEIA MAIS</a>
            </div>";
    
    }
    ?>
</div>