<?php
/**
 * @var string $host
 * @var string $db
 * @var string $user
 * @var string $password
 * @var $tablePrefix
 */
$pafPhpLibGlobal = "";
if (empty($_GET['name']) && empty($_GET['uuid']) && empty($_GET['id'])) {
	require_once "norequestsend.php";
	return;
}
require_once('../PAFPlayerManager.php');

use PartyAndFriends\Lib\PAFPlayer\PAFPlayerManager;

require_once('../config.php');
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
	// The player does not exist. Output the "player does not exist" message using the file playerdoesnotexist.php
	require_once "playerdoesnotexist.php";
	return;
}
// The player does exist. Use the file "playerdatashow.php" to output the data of the player
require_once "playerdatashow.php";
