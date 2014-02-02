<h1>Instellingen</h1>
<form>
    <div>
        <label for="birthdate">Geboortedatum</label>
        <input name="birthdate" id="birthdate" value="<?= $user['birthday'] ?>" type="text" placeholder="DD-MM-YYYY">
    </div>
    <div>
        <label for="telephone">Telefoonnummer</label>
        <input name="telephone" id="telephone" value="<?= $user['phonenumber'] ?>" type="text" placeholder="+31612345678">
    </div>
    <div>
        <label for="gender">Geslacht</label>
        <select name="gender" id="gender" data-role="slider">
            <option value="m" <?= ($user['gender'] == 'M'?'selected':'') ?>>Man</option>
            <option value="f" <?= ($user['gender'] == 'F'?'selected':'') ?>>Vrouw</option>
        </select>
    </div>
    <div>
        <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
            <legend>Ge&iuml;nteresseerd in</legend>
            <input name="gender_wanted_female" id="gender_wanted_female" type="checkbox" <?= ($user['gender_wanted_female']?'checked':'') ?>>
            <label for="gender_wanted_female">vrouwen</label>
            <input name="gender_wanted_male" id="gender_wanted_male" type="checkbox" <?= ($user['gender_wanted_male']?'checked':'') ?>>
            <label for="gender_wanted_male">mannen</label>
        </fieldset>
    </div>
    <div>
        <label for="organisation" class="select">Lid van vereniging</label>
        <select name="organisation" id="organisation" data-native-menu="false">
<?php
foreach($organisations as $id => $org)
{
?>
            <option value="<?= $id ?>" <?= ($user['organisation'] == $id?'selected':'') ?>><?= $org['html'] ?></option>
<?php
}
?>
        </select>
    </div>
    <div>
        <fieldset data-role="controlgroup">
            <legend>Match me met leden van deze verenigingen</legend>
<?php
foreach($organisations as $id => $org)
{
?>
            <input name="orgwanted_<?= $id ?>" id="orgwanted_<?= $id ?>" <?= (in_array($id, $wanted)?'checked':'') ?> type="checkbox">
            <label for="orgwanted_<?= $id ?>"><?= $org['html'] ?></label>
<?php
}
?>
        </fieldset>
    </div>
</form>
<h2>Profiel verwijderen</h2>
<p>
    Weet je zeker dat je je profiel wilt verwijderen? Alle data (je foto's, likes, matches) wordt onmiddelijk verwijderd en kan niet meer worden teruggehaald. Je kan deze stap niet ongedaan maken.
</p>
<p>
    <input data-icon="delete" value="Ja, verwijder mijn profiel" type="button" data-theme="b">
</p>
