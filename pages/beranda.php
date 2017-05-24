
    <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <?php foreach ($isi_berita as $ib) {?>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $ib ['judul'] ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><i class="fa fa-clock-o"></i><?php echo $ib ['tanggal'] ?></p>
                <hr>
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/900x300" alt="">
                </a>
                <hr>
                <p><?php echo $ib ['isi'] ?></p>
                <a class="btn btn-primary" href="#">Read More <i class="fa fa-angle-right"></i></a>

                <hr>
<?php } ?>
               

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>
