<?php
require_once 'src/view/html/header.html';

/**
 * @var PAFPlayer $givenPlayer
 */

use Simonsator\PartyAndFriends\PAFPlayer;

?>
    <label class="data-show-label">The UUID of the given player is: <input class="form-control" type="text"
                                                                           value="<?php echo $givenPlayer->getUniqueID(); ?>"
                                                                           readonly></label>
    <label class="data-show-label">The name of the given player is: <input class="form-control" type="text"
                                                                           value="<?php echo $givenPlayer->getName(); ?>"
                                                                           readonly></label>
    <label class="data-show-label">The id of the given player is: <input class="form-control" type="text"
                                                                         value="<?php echo $givenPlayer->getID(); ?>"
                                                                         readonly></label>
    <div class="card top-distance-keeper">
        <div class="card-body">
            <h5 class="card-title">Friends:</h5>
            <?php
            $players = $givenPlayer->getFriends();
            $emptyMessage = "The player does not have added friends yet.";
            require 'src/view/list_players.php';
            ?>
        </div>
    </div>
    <div class="card top-distance-keeper">
        <div class="card-body">
            <h5 class="card-title">Received friend requests:</h5>
            <?php
            $players = $givenPlayer->getFriendRequests();
            $emptyMessage = "The player did not receive any friends requests.";
            require 'src/view/list_players.php';
            ?>
        </div>
    </div>
    <div class="card top-distance-keeper">
        <div class="card-body">
            <h5 class="card-title">Sent friend requests:</h5>
            <?php
            $players = $givenPlayer->getSentFriendRequests();
            $emptyMessage = "The player did not send any friends requests.";
            require 'src/view/list_players.php';
            ?>
        </div>
    </div>
<?php require_once 'src/view/html/body_end.html';