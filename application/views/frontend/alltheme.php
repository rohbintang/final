<div class="container">

    <div class="marketing">

<div class="row">
        <div class="portfolio-navigator span12">
            <h4 class="filter-portfolio">
                <a class="all" id="active-imgs" href="#">All Theme</a>
            </h4>
            
        </div>
    </div>
</hr>
    <div class="row">
        <ul class="portfolio-img">    
            <?php foreach ($themes->result() as $value) : ?>  
            <li data-id="p-5" data-type="logo-design" class="span3">
                <div class="work">
                    <a href="<?php echo base_url('theme/detail/'.$value->theme_id); ?>" rel="prettyPhoto">
                        <img src="https://api.thumbalizr.com/?url=<?php echo $value->theme_demo_url; ?>&width=270" alt="">
                    </a>
                    
                    <p><?php echo $value->theme_name; ?></p>
                </div>
            </li>
        <?php endforeach; ?>
        </ul>
     </div>
</div>
 </div>

</div>
 </div>