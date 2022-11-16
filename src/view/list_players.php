<?php
/**
 * @var PAFPlayer[] $players
 * @var string $emptyMessage
 */

use Simonsator\PartyAndFriends\PAFPlayer;

if (sizeof($players) > 0) {
    ?>
    <div class="list-group w-auto">
        <?php foreach ($players as $player) { ?>
            <a href="?name=<?php echo $player->getName(); ?>"
               class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <img src="https://crafatar.com/avatars/<?php echo $player->getUniqueID(); ?>.jpg"
                     alt="<?php echo $player->getName(); ?>"
                     class="rounded-circle flex-shrink-0" width="32"
                     height="32">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0"><?php echo $player->getName(); ?></h6>
                        <p class="mb-0 opacity-75"></p>
                    </div>
                    <small class="opacity-50 text-nowrap">Last
                        seen: <?php echo $player->getLastOnline()->format("d.m.Y"); ?></small>
                </div>
            </a>
        <?php } ?>
    </div>
    <?php
} else {
    echo $emptyMessage;
}