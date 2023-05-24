<?php
/*
Plugin Name: Custom Button
Description: Affiche un bouton sur les pages du site Wordpress.
Au clic de ce bouton, afficher dans une alerte le texte "Cross Media Consulting".
Version: 1
Author: Ali
*/

function customButtonDisplay() {
    echo '<button id="custom-btn" style="background-color: blue; color: white;">Afficher le contenu</button>';
}
    
function customButtonAlert() {
    echo '<script>
            document.getElementById("custom-btn").addEventListener("click", function() {
                alert("Cross Media Consulting");
            });
        </script>';
}

add_action( 'init', 'customButtonDisplay' );
add_action( 'init', 'customButtonAlert' );