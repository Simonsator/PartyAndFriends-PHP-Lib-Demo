<?php
require_once 'src/view/html/header.html';

/**
 * @var PAFPlayer $givenPlayer
 */

use Simonsator\PartyAndFriends\PAFPlayer;

?>
    <p>The UUID of the given player is: <?php echo $givenPlayer->getUniqueID(); ?></p>
    <p>The name of the given player is: <?php echo $givenPlayer->getName(); ?></p>
    <p> The id of the given player is: <?php echo $givenPlayer->getID(); ?></p>
    <p>Friends:</p>
<?php
$players = $givenPlayer->getFriends();
$emptyMessage = "The player does not have added friends yet.";
require 'src/view/list_players.php';
?>
    <p>Received friend requests:</p>
<?php
$players = $givenPlayer->getFriendRequests();
$emptyMessage = "The player did not receive any friends requests.";
require 'src/view/list_players.php';
?>
    <p>Sent friend requests:</p>
<?php
$players = $givenPlayer->getSentFriendRequests();
$emptyMessage = "The player did not send any friends requests.";
require 'src/view/list_players.php';
?>
<?php require_once 'src/view/html/body_end.html';