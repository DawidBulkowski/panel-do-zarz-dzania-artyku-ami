<?php

foreach ($articles as $key => $article) {
    echo "
        <h2>".$article['title']."</h2>
        ".$article['description']."
        <a href='/article/".$article['id']."/delete'>Usuń</a>
    ";
}
?>
