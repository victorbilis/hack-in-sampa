<?php


    function menu($caminho)
    {
        echo "<nav class=\"light-blue lighten-1\" role=\"navigation\">
          <div class=\"nav-wrapper container\"><a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
            <ul class=\"right hide-on-med-and-down\">
              <li><a href=\"#\">Navbar Link</a></li>
            </ul>

            <ul id=\"nav-mobile\" class=\"sidenav\">
              <li><a href=\"".$caminho."\">API</a></li>
              <li><a href=\"".$caminho."\">Pesquisar</a></li>
            </ul>
            <a href=\"".$caminho."\" data-target=\"nav-mobile\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
          </div>
        </nav>";
    }
    
?>
