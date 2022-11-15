<?php require_once 'src/view/html/header.html'; ?>
<form method='get'>
    <label>
        Find player by player name:
        <input type='text' max='16' placeholder='Player name' name='name'>
    </label>
    <input type='submit' name='submit'>
</form>
<form method='get'>
    <label>
        Find player by UUID:
        <input type='text' minlength='36' maxlength='36' name='uuid'
               placeholder='Player UUID'>
    </label>
    <input type='submit' name='submit'>
</form>
<form method='get'>
    <label>
        Find player by ID:
        <input type='number' name='id' placeholder='Player id'>
    </label>
    <input type='submit' name='submit'>
</form>
<?php require_once 'src/view/html/body_end.html'; ?>
