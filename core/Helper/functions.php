<?php

/**
 * Affiche les variables et protège des failles XSS
 * @param string $variable
 */
function html_safe($variable){
    echo htmlspecialchars($variable);
}