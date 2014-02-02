<h1>Instellingen</h1>
<form>
    <div>
        <label for="birthdate">Geboortedatum</label>
        <input name="birthdate" id="birthdate" value="" type="text" placeholder="DD-MM-YYYY">
    </div>
    <div>
        <label for="telephone">Telefoonnummer</label>
        <input name="telephone" id="telephone" value="" type="text" placeholder="+31612345678">
    </div>
    <div>
        <label for="gender">Geslacht</label>
        <select name="gender" id="gender" data-role="slider">
            <option value="m">Man</option>
            <option value="f">Vrouw</option>
        </select>
    </div>
    <div>
        <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true">
            <legend>Ge&iuml;nteresseerd in</legend>
            <input name="gender_wanted_female" id="gender_wanted_female" type="checkbox">
            <label for="gender_wanted_female">vrouwen</label>
            <input name="gender_wanted_male" id="gender_wanted_male" type="checkbox">
            <label for="gender_wanted_male">mannen</label>
        </fieldset>
    </div>
    <div>
        <label for="organisation" class="select">Lid van vereniging</label>
        <select name="organisation" id="organisation" data-native-menu="false">
            <option value="biton">B.I.T.O.N.</option>
            <option value="debolk">De Bolk</option>
            <option value="catena">Catena</option>
            <option value="cleopatra">Cleopatra</option>
            <option value="karpenoktem">Karpe Noktem</option>
            <option value="liber">Liber</option>
            <option value="wolweze">Wolw&ecirc;ze</option>
        </select>
    </div>
    <div>
        <fieldset data-role="controlgroup">
            <legend>Match me met leden van deze verenigingen</legend>

            <input name="orgwanted_biton" id="orgwanted_biton" checked="checked" type="checkbox">
            <label for="orgwanted_biton">B.I.T.O.N.</label>
            <input name="orgwanted_debolk" id="orgwanted_debolk" checked="checked" type="checkbox">
            <label for="orgwanted_debolk">De Bolk</label>
            <input name="orgwanted_catena" id="orgwanted_catena" checked="checked" type="checkbox">
            <label for="orgwanted_catena">Catena</label>
            <input name="orgwanted_cleopatra" id="orgwanted_cleopatra" checked="checked" type="checkbox">
            <label for="orgwanted_cleopatra">Cleopatra</label>
            <input name="orgwanted_karpenoktem" id="orgwanted_karpenoktem" checked="checked" type="checkbox">
            <label for="orgwanted_karpenoktem">Karpe Noktem</label>
            <input name="orgwanted_liber" id="orgwanted_liber" checked="checked" type="checkbox">
            <label for="orgwanted_liber">Liber</label>
            <input name="orgwanted_wolweze" id="orgwanted_wolweze" checked="checked" type="checkbox">
            <label for="orgwanted_wolweze">Wolw&ecirc;ze</label>
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
    <input data-icon="delete" value="Ja, verwijder mijn profiel" type="button" data-theme="b">
</p>