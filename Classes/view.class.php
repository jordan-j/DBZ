<?php 

/* DBZ VIEW */

class View {
  
    public function __construct () { }
    
    // menu list of table link
    public static function MenuTable ($db_name, $array_table) {
      $menu = "<div>DB : ".$db_name;
      
      foreach ($array_table as $K => $TABLE) {
          
        $menu .= " <a href='?T=".$TABLE[0]."'>[ ".strtoupper($TABLE[0])." ]</a>";
      }
      
      $menu .= "</div>";
      
      return $menu;
    }
    
    public static function Contenu($array_contenu) {
     $contenu=" <table border='1'>" ;
        foreach ($array_contenu as $K => $TABLE) {
            $contenu .= "<tr>";
           for($i=0;$i<count($TABLE)/2;$i++){
             $contenu .= "<td>".strtoupper($TABLE[$i])."</td>";
           }
           $contenu .= "<td><a href='?id=".$TABLE[0]."'>Modifier</a></td><td><a href='?id=".$TABLE[0]."'>Supprimer</a></td></tr>";
      }
      
      $contenu .= "</div>";
      
      return $contenu;
        
    }
    
    
    // html final rendering
    public static function HTML ($title, $contener) {
      echo "<html>
      <head>
        <title>".$title."</title>
        <link rel='stylesheet' type='text/css' href='Fichiers/css/style.css' />
      </head>
      <body>
        <img src='Fichiers/images/logo.jpg' /><br /><hr />
        </hr>".$contener."
      </body>
      </html>";
    }
    
}

?>
