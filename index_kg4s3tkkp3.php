<?php
//Tous les fichier requis ou à inclure
require('src/requied.php');
//Page d'accueil
include('templates/homepage.php');
require('templates/layout.php');

echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";