<?php require_once 'src/view/html/header.html'; ?>
<form method='get'>
    <div class="card top-distance-keeper">
        <div class="card-body">
            <h5 class="card-title"><label for="name">
                    Find player by player name
                </label>
            </h5>
            <div class="form-group">
                <input type='text' max='16' placeholder='Player name' name='name' id="name" class="form-control">
                <input type='submit' name='submit' class="btn btn-primary submit-card-button">
            </div>
        </div>
    </div>
</form>
<form method='get'>
    <div class="card top-distance-keeper">
        <div class="card-body">
            <h5 class="card-title"><label for="uuid">
                    Find player by UUID
                </label>
            </h5>
            <div class="form-group">
                <input type='text' minlength='36' maxlength='36' placeholder='Player UUID' name='uuid' id="uuid" class="form-control">
                <input type='submit' name='submit' class="btn btn-primary submit-card-button">
            </div>
        </div>
    </div>
</form>
<form method='get'>
    <div class="card top-distance-keeper">
        <div class="card-body">
            <h5 class="card-title"><label for="id">
                    Find player by ID
                </label>
            </h5>
            <div class="form-group">
                <input type='number' placeholder='Player ID' name='id' id="id" class="form-control">
                <input type='submit' name='submit' class="btn btn-primary submit-card-button">
            </div>
        </div>
    </div>
</form>
<?php require_once 'src/view/html/body_end.html'; ?>
