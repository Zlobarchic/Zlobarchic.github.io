<?php get_header(); ?>
<section id="about_us" class="bg_light">
    <div class="info">
        <?php if ( have_posts() ) : query_posts('p=154');
                    while (have_posts()) : the_post(); ?>              
                    <?php the_content(); ?>
                <? endwhile; endif; wp_reset_query(); ?>
    </div>
</section>
<section id="resume" class="s_resume bg_dark"> <!-- Блок с двумя колонками по четыре карточки с описанием преимуществ-->
    <div class="section_header">
        <h2><?php echo get_cat_name(2) ?></h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(2) ?></div>
        </div>
    </div>  
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="resume_container">
                    <div class="col-md-6 col-sm-6 left">
                        <!-- <h3><?php echo get_cat_name(4) ?></h3> -->

                        <?php if ( have_posts() ) : query_posts('p=25');
                        while (have_posts()) : the_post(); ?>
                        <div class="resume_item">
                            <div class="person">
                                 <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                                </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                            <?php the_content(); ?>
                        </div>
                        <? endwhile; endif; wp_reset_query(); ?>


                        <?php if ( have_posts() ) : query_posts('p=44');
                        while (have_posts()) : the_post(); ?>    
                        <div class="resume_item">
                            <div class="person">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                        </div>
                                <? endwhile; endif; wp_reset_query(); ?>

                        <?php if ( have_posts() ) : query_posts('p=30');
                         while (have_posts()) : the_post(); ?>    
                        <div class="resume_item">
                            <div class="person">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                        </div>
                        <? endwhile; endif; wp_reset_query(); ?>


                        <?php if ( have_posts() ) : query_posts('p=33');
                        while (have_posts()) : the_post(); ?>    
                        <div class="resume_item">
                            <div class="person">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                        </div>
                        <? endwhile; endif; wp_reset_query(); ?>   

                    </div>



                    <div class="col-md-6 col-sm-6 right">
                        <!-- <h3><?php echo get_cat_name(5) ?></h3> -->

                        <?php if ( have_posts() ) : query_posts('p=46');
                        while (have_posts()) : the_post(); ?>    
                        <div class="resume_item">
                            <div class="person">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                        </div>                     
                        <? endwhile; endif; wp_reset_query(); ?> 

                        <?php if ( have_posts() ) : query_posts('p=48');
                        while (have_posts()) : the_post(); ?>    
                        <div class="resume_item">
                            <div class="person">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                        </div>
                        <? endwhile; endif; wp_reset_query(); ?> 

                        <?php if ( have_posts() ) : query_posts('p=41');
                        while (have_posts()) : the_post(); ?>    
                        <div class="resume_item">
                            <div class="person">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                        </div>
                        <? endwhile; endif; wp_reset_query(); ?> 

                        <?php if ( have_posts() ) : query_posts('p=50');
                        while (have_posts()) : the_post(); ?>    
                        <div class="resume_item">
                            <div class="person">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                                    title="<?php the_title_attribute(); ?>">
                                    <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="resume_description"><strong><?php the_title(); ?></strong></div>
                                <?php the_content(); ?>
                        </div>
                        <? endwhile; endif; wp_reset_query(); ?> 

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="about" class="s_about bg_light">  <!-- Блок с 4 видами номеров-->
    <div class="section_header">
        <h2><?php echo get_cat_name(3) ?> </h2>
        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(3) ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                    <?php if ( have_posts() ) : query_posts('p=52');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-3 col-md-3" > <!-- animation_2 -->
                    <h3><?php the_title(); ?></h3>
                    <div class="person">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                        title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                        </a>
                    <?php endif; ?>
                    </div>  
                    <?php the_content(); ?>
                </div>
                <? endwhile; endif; wp_reset_query(); ?>

                <?php if ( have_posts() ) : query_posts('p=56');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-3 col-md-3 "><!-- animation_1 -->

                    <h3><?php the_title(); ?></h3>

                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                        title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                        </a>
                    <?php endif; ?>
                    </div>
                     <?php the_content(); ?>
                </div>
                 <? endwhile; endif; wp_reset_query(); ?>

                 <?php if ( have_posts() ) : query_posts('p=54');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-3 col-md-3 "><!-- animation_1 -->
                    <h3><?php the_title(); ?></h3>

                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                        title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                        </a>
                    <?php endif; ?>
                    </div>
                    <?php the_content(); ?>
                </div>
                 <? endwhile; endif; wp_reset_query(); ?>

                 <?php if ( have_posts() ) : query_posts('p=59');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-3 col-md-3 "><!-- animation_3 -->
                    <h3><?php the_title(); ?></h3>

                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                        title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                        </a>
                    <?php endif; ?>
                    </div>
                     <?php the_content(); ?>
                </div>
                <? endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
        <div class="long_booking">
            <?php if ( have_posts() ) : query_posts('p=154');
                    while (have_posts()) : the_post(); ?>              
                    <?php the_content(); ?>
                <? endwhile; endif; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section id="price" class="s_about bg_light"> <!-- Блок с акциями-->
    <div class="section_header">
        <h2><?php echo get_cat_name(6) ?></h2>

        <div class="s_descr_wrap">
            <div class="s_descr"></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : query_posts('p=82');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-4">
                    <h3><strong><?php the_title(); ?></strong></h3>

                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                        title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                        </a>
                    <?php endif; ?>
                    </div>
                     <?php the_content(); ?>
                </div>
                <? endwhile; endif; wp_reset_query(); ?>

                <?php if ( have_posts() ) : query_posts('p=79');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-4">
                   <h3><strong><?php the_title(); ?></strong></h3>

                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                        title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                        </a>
                    <?php endif; ?>
                    </div>
                     <?php the_content(); ?>
                </div>
                <? endwhile; endif; wp_reset_query(); ?>

                 <?php if ( have_posts() ) : query_posts('p=85');
                    while (have_posts()) : the_post(); ?>
                <div class="col-md-4 col-md-4">
                    <div class="person">
                        <h3><strong><?php the_title(); ?></strong></h3>

                    <div class="person">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <a class="popup" href="<?php the_post_thumbnail_url('large'); ?>" 
                        title="<?php the_title_attribute(); ?>">
                        <img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/>
                        </a>
                    <?php endif; ?>
                    </div>
                     <?php the_content(); ?>
                </div>
                <? endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<!-- Форма обратной связи
<section id="s_order" class="s_order order_color">
    <div class="form">
        <h1>Отправить заявку на УВРК-50М</h1>
        <form action= "mail.php" method= "POST" id="form">
            <input type="text" name="name" placeholder="Имя" id="name" required/>
            <label for="name" ></label>
            <input type="tel" name="phone" placeholder="Телефон" id="phone" required/>
            <label for="phone"></label>
            <input type="email" name="mail" placeholder="e-mail" id="mail" required/>
            <label for="mail"></label>
            <button> Отправить заявку</button>
        </form>
    </div>
</section>-->
<!-- <section id="review" class="s_review bg_light"> 
    <div class="comment bg_dark">
        <div id="vk_comments"></div>
        <script type="text/javascript">
        VK.Widgets.Comments("vk_comments", {limit: 10, attach: "*"});
        </script>
    </div>
</section> -->

<section id="portfolio" class="s_portfolio bg_dark"> <!-- Галерея-->
    <div class="section_header">
        <h2><?php echo get_cat_name(7) ?></h2>

        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(7) ?></div>
        </div>
    </div>
    <div class="section_content">   
        <div class="container">
            <div class="row">

                <div class="filter_div controls">
                    <ul>
                       <!-- <li class="filter active" data-filter="all">Все номера</li> -->
                        <li class="filter" data-filter=".num1">Семейные</li>
                        <li class="filter" data-filter=".num2">4-х Местные</li>
                        <li class="filter" data-filter=".num3">2-х местные</li>
                        <li class="filter" data-filter=".num4">1 местный</li>
                        <li class="filter" data-filter=".num5">Общие зоны</li>

                    </ul>
                </div>
                <div id="portfolio_grid">
                <?php if ( have_posts() ) : query_posts('cat=7');
                while (have_posts()) : the_post(); ?>
                    <div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item <?php
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) {
                        foreach($tags as $tag) {
                        echo ' ' . $tag->name;
                        }
                    }
                    ?> ">
                        <?php the_post_thumbnail(array(292.5, 390)); ?>

                        <div class="port_item_cont">
                            <h3><?php the_title(); ?></h3>

                            <?php the_excerpt(); ?>
                            <a href="#" class="popup_content">Посмотреть</a>
                        </div>
                        <div class="hidden">
                            <div class="podrt_descr">
                                <div class="modal-box-content">
                                    <button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
                                    <h3><?php the_title(); ?></h3>

                                    <p><?php the_content(); ?></p>
                                    <img src="<?php
                                    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                    echo $large_image_url[0]; 
                                    ?>" alt="<?php the_title(); ?>"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? endwhile; endif; wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="map" class="s_map bg_light">
    <div class="section_header">
        <h2><?php echo get_cat_name(12) ?></h2>
         <div class="s_descr_wrap">
            <div class="s_descr"></div>
        </div>
    </div>  
    <div class="s_descr_wrap">
    </div>
    <div class="section_content">  
       <div class="map" id="map_ya">
        </div>
    </div>
</section>

<section id="contacts" class="s_contacts bg_light"> <!-- Контакты-->
    <div class="section_header">
        <h2><?php echo get_cat_name(8) ?></h2>

        <div class="s_descr_wrap">
            <div class="s_descr"><?php echo category_description(8) ?></div>
        </div>
    </div>
    <div class="section_content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact_box">
                        <div class="contacts_icon icon-basic-geolocalize-05"></div>
                        <h3>Адрес:</h3>

                        <p><?php
                        $options = get_option('sample_theme_options');
                        echo $options['adresstext']; ?></p>
                    </div>
                    <div class="contact_box">
                        <div class="contacts_icon icon-basic-smartphone"></div>
                        <h3>Телефон:</h3>

                        <p><?php
                        $options = get_option('sample_theme_options');
                        echo $options['phonetext']; ?></p>
                    </div>
                    <div class="contact_box">
                        <div class="contacts_icon icon-basic-webpage-img-txt"></div>
                        <h3>E-mail:</h3>

                        <p><a href="//<?php
                        $options = get_option('sample_theme_options');
                        echo $options['sitetext']; ?>" target="_blank"><?php
                        $options = get_option('sample_theme_options');
                        echo $options['sitetext']; ?></a></p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="main_form">
                        <h1><?php
                            $options = get_option('sample_theme_options');
                            echo $options['sendtext']; ?></h1>
                        <form action= "send.php" method= "POST" id="form">
                            <input type="text" name="name" placeholder="Имя" id="name" required/>
                            <label for="name" ></label>
                            <input type="tel" name="phone" placeholder="Телефон" id="phone" required/>
                            <label for="phone"></label>
                            <input type="email" name="email" placeholder="e-mail" id="mail" required/>
                            <label for="mail"></label>
                            <input type="text" name="message" placeholder="Ваше сообщение" id="message" required>
                            <input type="submit" value="Отправить" id="button"><!--<button> Отправить заявку</button>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>