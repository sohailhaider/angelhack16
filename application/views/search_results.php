<p xmlns="http://www.w3.org/1999/html"></p>
<div class="navbar navbar-invers menu-wrap">
    <div class="navbar-header text-center">
        <a class="navbar-brand logo-right" href="<?php echo base_url() ?>"><i class="mdi-image-timelapse"></i>Radiant</a>
    </div>
    <ul class="nav navbar-nav main-navigation">
        <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
        <li><a href="#features">Trending Searches</a></li>
        <li><a href="#why">Expanding Deceases</a></li>
        <li><a href="#screenshot">Cautions to Take this Summer</a></li>
        <li><a href="#testimonial">Get your Store Listed</a></li>
        <li><a href="#clients">Contact US</a></li>
    </ul>
</div>
<p></p>
<h2><?php echo count($results) ?> Results Found for "<?php echo $key ?>"
</h2>
<div class="col-md-12">
    <div class="bs-component">
        <div class="list-group">
            <?php
            foreach($results as $row) {
                ?>
                    <div class="list-group-item col-md-6">
                        <div class="row-picture">
                            <img class="circle" src="<?php echo base_url() ?>asserts/img/uploaded/<?php echo $row->featured_img ?>" alt="<?php echo $row->product_name ?>">
                        </div>
                        <div class="row-content">
                            <h4 class="list-group-item-heading"><a href="<?php echo base_url().'medicine/show/'.$row->product_id ?>"><?php echo $row->product_name ?></a></h4>
                            <p class="list-group-item-text"><i>Category: </i><?php
                                echo $row->category_name;
                                ?></p>
                        </div>
                        <div class="list-group-separator"></div>
                    </div>
                <?php
            }
            if($results == null)
                echo "No Match!";
            ?>
        </div>
    </div>
</div>

