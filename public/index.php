<?php
chdir(__DIR__ . '/../');

if (!file_exists('vendor/autoload.php')) {
    die("vendor/autoload.php does not exist. Please run 'composer install' in the root directory of the project.");
}
require_once 'vendor/autoload.php';

if (!file_exists('config.php')) {
    die("Please copy the config.template.php file to config.php and fill in the correct values");
}
/**
 * @var string $host
 * @var string $db
 * @var string $user
 * @var string $password
 * @var $tablePrefix
 */
require_once('config.php');

use Simonsator\PartyAndFriends\PAFPlayerManager;

if (empty($_GET['name']) && empty($_GET['uuid']) && empty($_GET['id'])) {
    require_once "src/view/no_request_send.php";
    return;
}
$pod = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $password);
$manager = new PAFPlayerManager($pod, $tablePrefix);
if (!empty($_GET['name'])) {
    $givenPlayer = $manager->getPlayerByName($_GET['name']);
} elseif (!empty($_GET['uuid'])) {
    $givenPlayer = $manager->getPlayerByUUID($_GET['uuid']);
} elseif (!empty($_GET['id'])) {
    $givenPlayer = $manager->getPlayerByID($_GET['id']);
} else {
    $givenPlayer = NULL;
}
if (is_null($givenPlayer)) {
    // The player does not exist. Output the "player does not exist" message using the file player_does_not_exist.php
    require_once "src/view/player_does_not_exist.php";
    return;
}
// The player does exist. Use the file "player_data_show.php" to output the data of the player
require_once "src/view/player_data_show.php";
