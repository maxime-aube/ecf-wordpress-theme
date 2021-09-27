<?php get_header(); ?>

<main id="main-content">
    <div class="container">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
        <h1>Nous contacter</h1>

        <form action="" class="contact-form">
            <label for="name" class="field">
                <span class="label-content">Votre nom</span>
                <input type="text" placeholder="Entrez votre nom" required>
            </label>
            <label for="email" class="field">
                <span class="label-content">Votre e-mail</span>
                <input type="email" placeholder="Entrez votre adresse e-mail" required>
            </label>
            <label for="msg" class="field">
                <span class="label-content">Votre message</span>
                <textarea id="msg" placeholder="Tapez votre message" required></textarea>
            </label>
            <button type="submit">Envoyer <img loading="lazy"  src="img/icon-arrow-right.svg" alt="" aria-hidden="true"></button>
        </form>

        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    </div>
</main>

<?php get_footer(); ?>