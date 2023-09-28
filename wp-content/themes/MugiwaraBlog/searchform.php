<form method="GET" action="<?php echo site_url(); ?>">
    <input class="search_input" type="text" name="s" placeholder="Faça sua pesquisa" value="<?php the_search_query(); ?>" />
    <input class="search_submit" type="submit" value="Pesquisar" />
</form>
