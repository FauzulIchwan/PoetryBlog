<center><a href="">All    </a><a href="">Tag</a></center>
 <div class="container-fluid content-row">
        <div class="row m-4 masonry" data-target=.item data-col-sm="12" data-col-md="6" data-col-lg="3">

            <?php foreach ($post as $post):?>
            <div class="col-sm-12 col-md-6 col-lg-3 customPadding">
                <div class="card item flex-fill">
                    <div class="card-header bg-card">
                        <a href="#" class="text-white"><?=$post['name']?></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?=$post['caption']?></h5>
                        <p class="card-text text-center"><?=$post['post_content']?></p>
                        <div class="d-flex justify-content-start">
                            <a href="">#<?=$post['tagname']?></a>
                        </div>
                        <a class="d-flex justify-content-end" href="#"><img src="icons8-love-50.png" alt="" class="fav"></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

            
        </div>
    </div>
