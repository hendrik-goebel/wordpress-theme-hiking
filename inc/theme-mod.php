<?php

/**
 * Container width
 */
switch (get_theme_mod('layout_width')) {
    case 'full':
        $container_class = 'container-fluid';
        break;
    case 'narrow':
        $container_class = 'container-xl';
        break;
    case 'default':
        $container_class = 'container-xl';
        break;

}
/**
 * Navigation position
 */
switch (get_theme_mod('nav_position')) {
    case 'center':
        $nav_position_class = 'mx-auto';
        break;
    case 'left':
        $nav_position_class = 'mr-auto';
        break;
    case 'default':
        $nav_position_class = 'mx-auto';
        break;

}