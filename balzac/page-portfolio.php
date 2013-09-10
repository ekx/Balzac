<?php

  $allowCat = array(2);

?>

<div id='bump'>
<?php theme_include('headerDark'); ?>
        <section class="article archive">
          <article class="archive-wrap">
              <ol class="post-list">
                 <lh><h2><span class="bb">Case Studies</span></h2></lh>
        <?php while(portf_list()): ?>
            <?php foreach($allowCat as $cat): ?>
                <?php if(article_category_id() == $cat): ?>
                  <li>
                    <div class="deets left-slide"><h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
                    <p class="date"><time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></p>
                    </div>
                    <p class=""><?php echo article_description(); ?></p>
                  </li>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endwhile; ?>
              </ol>
          </article>
        </section>
    </div>
<?php theme_include('footer'); ?>