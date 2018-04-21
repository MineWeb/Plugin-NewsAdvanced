<?php

/*
 * Comment créer des routes ?
 * Router::connect('[1]', ['controller' => '[2]', 'action' => '[3]', 'plugin' => '[4]']);
 *
 * [1] Url ex : /galerievideo
 * [2] Contrôleur : Tutorial si le nom de votre contrôleur est TutorialController.php
 * [3] Fonction à l'intérieur du contrôleur
 * [4] Nom du plugin
 */
Router::connect('/admin/news', ['controller' => 'NewsAdvanced', 'action' => 'index', 'plugin' => 'NewsAdvanced', 'admin' => true]);
Router::connect('/admin/news/edit/*', ['controller' => 'NewsAdvanced', 'action' => 'edit', 'plugin' => 'NewsAdvanced', 'admin' => true]);
Router::connect('/admin/news/edit_ajax', ['controller' => 'NewsAdvanced', 'action' => 'edit_ajax', 'plugin' => 'NewsAdvanced', 'admin' => true]);
Router::connect('/admin/news/delete/*', ['controller' => 'NewsAdvanced', 'action' => 'delete', 'plugin' => 'NewsAdvanced', 'admin' => true]);
Router::connect('/admin/news/add', ['controller' => 'NewsAdvanced', 'action' => 'add', 'plugin' => 'NewsAdvanced', 'admin' => true]);
Router::connect('/admin/news/add_ajax', ['controller' => 'NewsAdvanced', 'action' => 'add_ajax', 'plugin' => 'NewsAdvanced', 'admin' => true]);
