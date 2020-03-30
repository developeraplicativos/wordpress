<?php get_header(); ?>  
<main class="home-main">
    <div class="container"> 
        <ul class="imoveis-listagem">

        <?php
            $args = array('post_type' => 'imovel');
            $result = new WP_Query( $args );
            if( $result->have_posts() ) {
                while( $result->have_posts() ) {
                    $result->the_post();
        ?>

            <li class="imoveis-listagem-item">
                <?php the_post_thumbnail(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </article>
            </li>

        <?php
            }
        }
        ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>
