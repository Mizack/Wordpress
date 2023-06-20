<!-- A função wp_footer() no WordPress é usada para exibir a seção <footer> do código HTML, permitindo a inclusão de scripts e conteúdo personalizado no final da página. -->
<footer>
    <p class="container-alura">&copy; <?= date("Y") ?> Todos os direitos reservados</p>
</footer>
<?php wp_footer(); ?>
</body>
</html>