<?php
require_once('src/models/config.php');
require_once('src/lib/DBFactory-1.2.php');
require_once('src/models/managers/ProgressBar.manager.php');
require_once('src/models/repositories/ProgressBar.repository.php');
require_once('src/models/managers/Configuration.manager.php');
require_once('src/models/managers/Mail.manager.php');
require_once('src/models/repositories/MailConfiguration.repository.php');
require_once('src/models/managers/LegalNotice.manager.php');
require_once('src/models/repositories/LegalNotice.repository.php');
require_once('src/models/managers/Links.manager.php');
require_once('src/models/repositories/Links.repository.php');
require_once('src/models/managers/Presentation.manager.php');
require_once('src/models/repositories/Presentation.repository.php');
require_once('src/models/managers/Contact.manager.php');
require_once('src/models/repositories/Contact.repository.php');
require_once('src/models/managers/Expertise.manager.php');
require_once('src/models/repositories/Expersises.repository.php');
require_once('src/models/managers/Portfolio.manager.php');
require_once('src/models/repositories/Porfolio.repository.php');
require_once('src/models/managers/Card.manager.php');
require_once('src/models/repositories/Card.repository.php');
require_once('src/models/managers/Carousel.manager.php');
require_once('src/models/repositories/Carousels.repository.php');
require_once('src/controllers/general.functions.php');

//Connexion à la base de données
$factory = new DBFactory();
$dBCon = $factory->db();
//Objet de configuration
$config = new Configuration();

include('src/controllers/presentation.controller.php');
include('src/controllers/expertises.controller.php');
include('src/controllers/porfolio.controller.php');
include('src/controllers/contact.controller.php');
include('src/controllers/footer.controller.php');
