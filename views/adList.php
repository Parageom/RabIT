<?php
foreach ($ads as $ad) {
    //megjeleniti a hirdetés címét és a hozzá tartozó felhasználót
    echo "<p>{$ad['title']} (Felhasználó: {$ad['user_name']})</p>";
}
?>