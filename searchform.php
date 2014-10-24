<form action="/" method="get">
    <fieldset>
        <label for="search">Search </label>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <button type="submit" alt="Search">Search</button>
    </fieldset>
</form>