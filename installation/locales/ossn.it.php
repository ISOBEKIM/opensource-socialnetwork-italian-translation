<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */


$italian = array(
	'site:settings' => 'Impostazioni Sito',
	'ossn:installed' => 'Installato',
	'ossn:installation' => 'Installazione',
	'ossn:check' => 'Verifica',
	'ossn:installed' => 'Installato',
	'ossn:installed:message' => 'Open Source Social Network è stato installato. Dopo che tu hai finito, per favore rimuovi la cartella installation.',
    'ossn:prerequisites' => 'Prerequisiti installazione',
    'ossn:settings' => 'Impostazioni Server',
    'ossn:dbsettings' => 'Database',
	'ossn:dbuser' => 'Utente Database',
	'ossn:dbpassword' => 'Password Database',
	'ossn:dbname' => 'Nome Database',
	'ossn:dbhost' => 'Host Database',
    'ossn:sitesettings' => 'Sito Web',
    'ossn:websitename' => 'Nome Sito Web',
    'ossn:mainsettings' => 'Paths',
	'ossn:weburl' => 'OssnSite Url',
	'installation:notes' => ' L elenco contiene i file dei dati degli utenti. La directory dei dati deve trovarsi al di fuori del percorso di installazione OSSN .',
	'ossn:datadir' => 'Directory Data',
	'owner_email' => 'Email proprietario sito',
	'notification_email' => 'Notification Email (noreply@domain.com)',
	'create:admin:account' => 'Crea account Admin',
	'ossn:setting:account' => 'Impostazioni Account',
	
	'data:directory:invalid' => 'Invalida directory data oppure non è scrivibile.',	
	'data:directory:outside' => 'La directory Data deve essere fuori dalla cartella di installazione.',
	'all:files:required' => 'Tutti i files sono richiesti! Per favore controlla i tuoi files.',
	
	'ossn:install:php' => 'PHP ',
	'ossn:install:old:php' => "Tu hai una vecchia versione di PHP " . PHP_VERSION . " Tu hai bisogno di PHP 5.4 o PHP 5.5",
	
	'ossn:install:mysqli' => 'MYSQLI ENABLED',
	'ossn:install:mysqli:required' => 'MYSQLI PHP EXTENSION RICHIESTA',
	
	'ossn:install:apache' => 'APACHE ENABLED',
	'ossn:install:apache:required' => 'APACHE è RICHIESTO',
	
	'ossn:install:modrewrite' => 'MOD_REWRITE',
	'ossn:install:modrewrite:required' => 'MOD_REWRITE RICHIESTO',
	
	'ossn:install:curl' => 'PHP CURL',
	'ossn:install:curl:required' => 'PHP CURL RICHIESTO',
	
	'ossn:install:gd' => 'PHP GD LIBRARY',
	'ossn:install:gd:required' => 'PHP GD LIBRARY RICHIESTO',
	
	'ossn:install:config' => 'CONFIGURATION DIRECTORY WRITEABLE',
	'ossn:install:config:error' => 'CONFIGURATION DIRECTORY IS NOT WRITEABLE',
	
	'ossn:install:next' => 'Avanti',
    'ossn:install:install' => 'Installa',
    'ossn:install:create' => 'Crea',
    'ossn:install:finish' => 'Finito',
	
	'fields:require' => 'Tutti i campi sono obbligatori!',
);

ossn_installation_register_languages($italian);
