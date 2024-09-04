 
<div class="top-photo-box">
    <?php
        foreach ($resultados as $fila) {?>
        <div class="news-post image-post">
            <img src="images/home/<?=$fila['img_home']?>" alt="">
            <div class="hover-post overlay-bg">
                <div><a class="category-link" href="#">Lifestyle</a></div>
                <h2><a href="post/<?=$fila['url']?>"><?=$fila['titulo']?></a></h2>
                <ul class="post-tags">
                    <li><a href="#">3 comments</a></li>
                    <li><?=$fila['fecha_creacion']?></li>
                    <li>by <a href="autor/<?=$fila['autor']?>"><?=$fila['nombre_autor']?></a></li>
                </ul>
                <a class="white-button" href="post/<?=$fila['url']?>">View Post</a>
            </div>
        </div>
        <?php
        }
    ?>

    <!--<div class="news-post image-post">
        <img src="images/home/flores-amarillas.png" alt="">
        <div class="hover-post overlay-bg">
            <div><a class="category-link" href="#">Travel</a></div>
            <h2><a href="single-post.html">21 de septiembre: El Día de las Flores Amarillas en Perú</a></h2>
            <ul class="post-tags">
                <li><a href="#">3 comments</a></li>
                <li>3 days ago</li>
                <li>by <a href="#">John Smith</a></li>
            </ul>
            <a class="white-button" href="single-post.html">View Post</a>
        </div>
    </div>
    <div class="news-post image-post">
        <img src="images/home/diintec-tienda-online.png" alt="">
        <div class="hover-post overlay-bg">
            <div><a class="category-link" href="#">Travel</a></div>
            <h2><a href="single-post.html">Quisque volutpat mattis eros.</a></h2>
            <ul class="post-tags">
                <li><a href="#">3 comments</a></li>
                <li>3 days ago</li>
                <li>by <a href="#">John Smith</a></li>
            </ul>
            <a class="white-button" href="single-post.html">View Post</a>
        </div>
    </div>-->
</div>