<?php 

/* DBZ FRONTAL CONTROLLER
** MVC CMS for database management */

// configuration
require_once("Config/config.script.php");

// connexion db
require_once("Classes/pdo.connexion.class.php");
$PDO = new Pdo_Connexion ($CONFIG['DB_INI_FILE']);

// model class
require_once("Classes/model.class.php");
$MODEL = new Model ($PDO->CNX);
    //select attribute +test GET
$test = $MODEL->test_get($_GET['T']);

    
// view class
require_once("Classes/view.class.php");




// html output increment
$OUTPUT = NULL;

// set the menu based on tables
$OUTPUT .= View::MenuTable ($MODEL->Name_DB(), $MODEL->List_Table());
$OUTPUT .= View::Contenu ($MODEL->List_attribute($test));




// output echo screen rendering 
View::HTML($CONFIG['MODULE_NAME'], $OUTPUT);

?>
