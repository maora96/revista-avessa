<?php
/* Template Name: Contato */ 
get_header(); ?>

</header>


<section class="content">

    <section class="contato">

        <h1>Contato</h1>

        <form action="contactform.php" method="post">
            <label for="name">
                <input type="text" name="name" placeholder="Nome">
            </label>
            <label for="email">
                <input type="email" name="email" placeholder="E-mail">
            </label>
            <label for="subject">
                <input type="text" name="subject" placeholder="Assunto">
            </label>

            <label for="message"></label>
            <textarea name="message" placeholder="Mensagem"></textarea>
            <button type="submit">Enviar</button>

        </form>
    </section>





    <?php 
get_sidebar();

get_footer();
?>