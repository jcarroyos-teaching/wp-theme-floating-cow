<?php
get_header();
?>
<main class="container">
    <section>
        <h2>Welcome to the Home Page</h2>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </section>
</main>
<?php
get_footer();
?>
