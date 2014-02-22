<img src="https://graph.facebook.com/<?php echo urlencode($user['facebook_id']) ?>/picture?width=600" alt="Foto van <?php echo htmlentities($user['name']) ?>" class="photo">
<p class="details">
<span class="name"><?php echo $user['name'] ?></span> 
<span class="age"><?php echo $age->format('%y') ?> jaar</span>
   <span class="organisation"><?php echo $user['organisation'] ?></span>
</p>
<form class="ui-grid-a" action="/match/<?php echo $user->id; ?>" method="post">
    <div class="ui-block-a">
        <input data-icon="delete" value="Meh" type="submit" data-theme="b" id="dislike-button" name="negative">
    </div>
    <div class="ui-block-b">
        <input data-icon="check" value="Leuk!" type="submit" data-theme="d" id="like-button" name="positive">
    </div>
</form>
