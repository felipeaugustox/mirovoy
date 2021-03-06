
<?php
/*Template Name: Home page*/
get_header(); ?>

<div id="element">
  <img src="<?php the_field('slider_image_1')?>" alt="">
  <img src="<?php the_field('slider_image_2')?>" alt="">
  <img src="<?php the_field('slider_image_3')?>" alt="">
  <img src="<?php the_field('slider_image_4')?>" alt="">
</div>
<section class="premix-welcome-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="premix-welcome-element text-center">
          <div class="premix-table">
            <div class="premix-table-cell">
              <div class="premix-welcome-section-element">
                <h2><?php echo get_bloginfo( 'name' ); ?></h2>
                <h1><?php echo get_bloginfo( 'description' ); ?></h1>
                <!--<h3>A new dimension of entertainment</h3>-->
                <!--<a href="#" class="premix-btn light-red-btn">Buy Tickets</a>-->
              </div>
              <div id="homepage-player-container">
                <button class="premix_player_prev"><img src="<?php echo get_bloginfo('template_url')?>/img/premix-music-planer-prev-btn.png" alt="" /></button>
                <button class="premix_player_next"><img src="<?php echo get_bloginfo('template_url')?>/img/premix-music-planer-next-btn.png" alt="" /></button>
                <div id="premix-player-index" class="aplayer"
                file1 ="<?php
                $file1 = get_field('music_1');
                echo $file1['url'];
                ?>"
                title1="<?php
                $file1 = get_field('music_1');
                echo $file1['title'];
                ?>"
                artist1="<?php
                $file1 = get_field('music_1');
                echo $file1['caption'];
                ?>"
                file2 ="<?php
                $file2 = get_field('music_2');
                echo $file2['url'];
                ?>"
                title2="<?php
                $file2 = get_field('music_2');
                echo $file2['title'];
                ?>"
                artist2="<?php
                $file2 = get_field('music_2');
                echo $file2['caption'];
                ?>"
                file3 ="<?php
                $file3 = get_field('music_3');
                echo $file3['url'];
                ?>"
                title3="<?php
                $file3 = get_field('music_3');
                echo $file3['title'];
                ?>"
                artist3="<?php
                $file3 = get_field('music_3');
                echo $file3['caption'];
                ?>">
              </div>
              </div>
            </div>
          </div>
        </div><!-- .premix-welcome-element End -->
      </div>
    </div>
  </div>
</section>
<!-- Premix Our Artist Section Start -->
<!-- <section class="premix-our-artist-section section-padding">
  <div class="container">
    <div class="premix-section-heading text-center">
      <h2 data-titles="OUR ARTISTS">OUR ARTISTS</h2>
    </div>
    <div class="row content-margin-top">
      <div class="premix-all-artist" id="premix-slider">
        <div class="item">
          <div class="premix-single-artist">
            <a href="artist-single.html">
              <img src="<?php echo get_bloginfo('template_url')?>/img/artist-1.png" alt="">
            </a>
            <div class="premix-single-artist-details">
              <h4>Kim Taylor</h4>
              <p>GUITARIST</p>
            </div>
            <div class="premix-artist-social-details">
              <ul>
                <li class="premix-social-h-1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-single-artist">
            <a href="artist-single.html">
              <img src="<?php echo get_bloginfo('template_url')?>/img/artist-2.png" alt="">
            </a>
            <div class="premix-single-artist-details">
              <h4>JHON DOE</h4>
              <p>VOCAL ARTIST</p>
            </div>
            <div class="premix-artist-social-details">
              <ul>
                <li class="premix-social-h-1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-single-artist">
            <a href="artist-single.html">
              <img src="<?php echo get_bloginfo('template_url')?>/img/artist-3.png" alt="">
            </a>
            <div class="premix-single-artist-details">
              <h4>Justin Tiber</h4>
              <p>VOCAL ARTIST</p>
            </div>
            <div class="premix-artist-social-details">
              <ul>
                <li class="premix-social-h-1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-single-artist">
            <a href="artist-single.html">
              <img src="<?php echo get_bloginfo('template_url')?>/img/artist-4.png" alt="">
            </a>
            <div class="premix-single-artist-details">
              <h4>Justin Tiber</h4>
              <p>VOCAL ARTIST</p>
            </div>
            <div class="premix-artist-social-details">
              <ul>
                <li class="premix-social-h-1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-single-artist">
            <a href="artist-single.html">
              <img src="<?php echo get_bloginfo('template_url')?>/img/artist-5.png" alt="">
            </a>
            <div class="premix-single-artist-details">
              <h4>Justin Tiber</h4>
              <p>VOCAL ARTIST</p>
            </div>
            <div class="premix-artist-social-details">
              <ul>
                <li class="premix-social-h-1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-single-artist">
            <a href="artist-single.html">
              <img src="<?php echo get_bloginfo('template_url')?>/img/artist-6.png" alt="">
            </a>
            <div class="premix-single-artist-details">
              <h4>Justin Tiber</h4>
              <p>VOCAL ARTIST</p>
            </div>
            <div class="premix-artist-social-details">
              <ul>
                <li class="premix-social-h-1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="premix-social-h-2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="premix-social-h-3"><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Premix Our Album Section Start -->
<!-- <section class="premix-our-album-section section-padding" style="background-image: url(img/latest-albums-bg.png);">
  <div class="container">
    <div class="premix-section-heading text-center">
      <h2 data-titles="LATEST ALBUMS">LATEST ALBUMS</h2>
    </div>
    <div class="row content-margin-top">
      <div class="col-md-3 col-sm-6 col-xs-6 premix-latest-album-single-item">
        <div class="premix-single-album">
          <div class="premix--hover-wraper">
            <img src="<?php echo get_bloginfo('template_url')?>/img/album-1.png" alt="">

            <div class="premix--hover-wraper-content">
              <a href="album-single.html">
                <i class="fa fa-play-circle-o"></i>
              </a>
            </div>
          </div>
          <div class="premix-album-details text-center">
            <h4>HEARTBEAT</h4>
            <p>15 Aug, 2014</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 premix-latest-album-single-item">
        <div class="premix-single-album">
          <div class="premix--hover-wraper">
            <img src="<?php echo get_bloginfo('template_url')?>/img/album-2.png" alt="">
            <div class="premix--hover-wraper-content">
              <a href="album-single.html">
                <i class="fa fa-play-circle-o"></i>
              </a>
            </div>
          </div>
          <div class="premix-album-details text-center">
            <h4>FORBIDDEN SOUND</h4>
            <p>10 May, 2015</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 premix-latest-album-single-item">
        <div class="premix-single-album">
          <div class="premix--hover-wraper">
            <img src="<?php echo get_bloginfo('template_url')?>/img/album-3.png" alt="">

            <div class="premix--hover-wraper-content">
              <a href="album-single.html">
                <i class="fa fa-play-circle-o"></i>
              </a>
            </div>
          </div>
          <div class="premix-album-details text-center">
            <h4>LILY ALLEN</h4>
            <p>15 Aug, 2014</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6 premix-latest-album-single-item">
        <div class="premix-single-album">
          <div class="premix--hover-wraper">
            <img src="<?php echo get_bloginfo('template_url')?>/img/album-4.png" alt="">

            <div class="premix--hover-wraper-content">
              <a href="album-single.html">
                <i class="fa fa-play-circle-o"></i>
              </a>
            </div>
          </div>
          <div class="premix-album-details text-center">
            <h4>SECRIFICE</h4>
            <p>15 Aug, 2014</p>
          </div>
        </div>
      </div>
    </div>
    <div class="premix-album-more-btn text-center">
      <a href="album-single.html" class="premix-btn border-btn">MORE MUSIC</a>
    </div>
  </div>
</section> -->

<!-- Premix Next Event Section Start -->
<section class="premix-next-event-section section-padding">
  <div class="container">
    <div class="premix-section-heading text-center">
      <h2 data-titles="NEXT EVENTS">NEXT EVENTS</h2>
    </div> <!-- .premix-section-heading End -->
    <div class="content-margin-top">
      <?php
				$args =  array(
					'post_type' => 'event-post',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				 $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post();

            $month = substr(get_field('event_date'), 4 ,-2);
            //echo $month;
            $year = substr(get_field('event_date'),0 ,-4);?>

            <div class="premix-next-event">

              <ul id="premix-event-1">
                <li class="clear-both">
                  <div class="premix-event-column">
                    <div class="premix-event-time">
                      <h3>
                        <?php echo substr(get_field('event_date'), 6);?>
                        <span>
                          <?php
                          $month = substr(get_field('event_date'), 4 ,-2);
                          //echo $month;
                          $year = substr(get_field('event_date'),0 ,-4);
                          switch ($month) {
                            case 1:
                            echo "Janeiro, " . $year;
                            break;
                            case 2:
                            echo "Fevereiro, ". $year;
                            break;
                            case 3:
                            echo "Março, ". $year;
                            break;
                            case 4:
                            echo "Abril, ". $year;
                            break;
                            case 5:
                            echo "Maio, " .$year;
                            break;
                            case 6:
                            echo "Junho, ". $year;
                            break;
                            case 7:
                            echo "Julho, ". $year;
                            break;
                            case 8:
                            echo "Agosto, ". $year;
                            break;
                            case 9:
                            echo "Setembro, ". $year;
                            break;
                            case 10:
                            echo "Outubro, ".$year;
                            break;
                            case 11:
                            echo "Novembro, ". $year;
                            break;
                            case 12:
                            echo "Dezembro, ". $year;
                            break;
                          }

                          ?>
                        </span>
                      </h3>
                    </div> <!-- .premix-event-time END -->
                  </div>
                  <div class="premix-event-column">
                    <?php the_post_thumbnail(); ?>
                  </div> <!-- Event Image END -->
                  <div class="premix-event-column">
                    <div class="premix-event-title">
                      <h4><?php the_title(); ?></h4>
                      <p><?php the_field('event_location'); ?></p>
                    </div>
                  </div> <!-- .premix-event-title END -->
                  <div class="premix-event-column">
                    <a href="<?php the_permalink(); ?>" class="premix-btn details-btn">detalhes</a>
                  </div> <!-- .details-btn END -->
                </li> <!-- Premix Single Event li END -->
              </ul>
            </div>
          <?php endwhile;?>
    </div>
  </div>
</section>

<?php get_footer();?>
