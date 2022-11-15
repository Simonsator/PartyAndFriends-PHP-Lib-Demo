<?php
/**
 * @var PAFPlayer[] $players
 * @var string $emptyMessage
 */

use Simonsator\PartyAndFriends\PAFPlayer;

if (sizeof($players) > 0) {
    ?>
    <ul>
        <?php
        foreach ($players as $player) {
            ?>
            <li><?php echo $player->getName(); ?></li>
            <?php
        }
        ?>
    </ul>
    <?php
} else {
    echo $emptyMessage;
}