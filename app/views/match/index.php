<img src="https://graph.facebook.com/<?php echo urlencode($user['facebook_id']) ?>/picture?width=600" alt="Foto van <?php echo htmlentities($user['name']) ?>" class="photo">
<p class="details">
<span class="name"><?php echo $user['name'] ?></span> 
<span class="age"><?php echo $age->format('%y') ?> jaar</span>
   <span class="organisation"><?php echo $user['organisation'] ?></span>
</p>
<form class="ui-grid-a">
    <div class="ui-block-a">
        <input data-icon="delete" value="Meh" type="button" data-theme="b">
    </div>
    <div class="ui-block-b">
        <input data-icon="check" value="Leuk!" type="button" data-theme="d">
    </div>
</form>
