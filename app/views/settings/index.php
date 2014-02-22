<form class="autosubmit" method="POST" action="/settings">
    <div>
        <label for="birthdate">Geboortedatum</label>
        <input name="birthdate" id="birthdate" value="<?php echo $user['birthday'] ?>" type="date" placeholder="DD-MM-YYYY" pattern="(20\d{2}|19\d{2})-(0\d|1[012])-\d{2}">
    </div>
    <div>
        <label for="telephone">Telefoonnummer</label>
        <input name="telephone" id="telephone" value="<?php echo $user['telephone'] ?>" type="tel" placeholder="0612345678" pattern="06\d{8}">
    </div>
    <div>
        <label for="gender">Geslacht</label>
        <select name="gender" id="gender" data-role="slider">
            <option value="m" <?php echo ($user['gender'] == 'M'?'selected':'') ?>>Man</option>
            <option value="f" <?php echo ($user['gender'] == 'F'?'selected':'') ?>>Vrouw</option>
        </select>
    </div>
    <div>
        <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
            <legend>Ge&iuml;nteresseerd in</legend>
            <input name="gender_wanted_female" id="gender_wanted_female" type="checkbox" <?php echo ($user['gender_wanted_female']?'checked':'') ?>>
            <label for="gender_wanted_female">vrouwen</label>
            <input name="gender_wanted_male" id="gender_wanted_male" type="checkbox" <?php echo ($user['gender_wanted_male']?'checked':'') ?>>
            <label for="gender_wanted_male">mannen</label>
        </fieldset>
    </div>
    <div>
        <label for="organisation" class="select">Lid van vereniging</label>
        <select name="organisation" id="organisation" data-native-menu="false">
        <?php foreach($organisations as $id => $org): ?>
            <option value="<?php echo $id ?>" <?php echo ($user['organisation'] == $id?'selected':'') ?>><?php echo $org['html'] ?></option>
        <?php endforeach; ?>
        </select>
    </div>
    <div>
        <fieldset data-role="controlgroup">
            <legend>Match me met leden van deze verenigingen</legend>
            <?php foreach($organisations as $id => $org): ?>
                <input name="orgwanted_<?php echo $id ?>" id="orgwanted_<?php echo $id ?>" <?php echo (in_array($id, $wanted)?'checked':'') ?> type="checkbox">
                <label for="orgwanted_<?php echo $id ?>"><?php echo $org['html'] ?></label>
            <?php endforeach; ?>
        </fieldset>
    </div>
</form>
<h2>Uitloggen</h2>
<p>
    Als je wilt, kun je hier uitloggen van de app. Dit heeft geen effect op de data die wordt bewaard. Je blijft ingelogd op Facebook. Normaal gesproken heb je deze optie niet nodig.
</p>
<form action="/logout" method="GET" data-ajax="false">
    <input data-icon="power" value="Uitloggen van ZeusMatch" type="submit" data-theme="c">
</form>
<h2>Profiel verwijderen</h2>
<p>
    Weet je zeker dat je je profiel wilt verwijderen? Alle data (je foto's, likes, matches) wordt onmiddelijk verwijderd en kan niet meer worden teruggehaald. Je kan deze stap niet ongedaan maken.
</p>
<p>
<form id="delete-settings" action="/delete" method="POST" data-ajax="false">
    <input data-icon="delete" value="Ja, verwijder mijn profiel" type="submit" data-theme="b">
</form>
</p>
