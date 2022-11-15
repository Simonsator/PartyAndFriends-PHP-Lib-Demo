<?php require_once 'src/view/html/header.html'; ?>
<form method='get' class="form-inline">
    <label>
        Find player by player name:
        <input type='text' max='16' placeholder='Player name' name='name' class="form-control">
    </label>
    <input type='submit' name='submit' class="btn btn-primary mb-2">
</form>
<form method='get' class="form-inline">
    <label>
        Find player by UUID:
        <input type='text' minlength='36' maxlength='36' name='uuid'
               placeholder='Player UUID' class="form-control">
    </label>
    <input type='submit' name='submit' class="btn btn-primary mb-2">
</form>
<form method='get' class="form-inline">
    <label>
        Find player by ID:
        <input type='number' name='id' placeholder='Player id' class="form-control">
    </label>
    <input type='submit' name='submit' class="btn btn-primary mb-2">
</form>
<?php require_once 'src/view/html/body_end.html'; ?>
