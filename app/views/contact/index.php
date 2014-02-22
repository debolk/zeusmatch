<p>
    Heb je een vraag, opmerking, feature request of bug report? Je kunt ons mailen op <a href="mailto:zeusmatch@debolk.nl">zeusmatch@debolk.nl</a> of gebruik het onderstaande formulier.
</p>

<h2>Contactformulier</h2>
<form action="/contact/send" method="post">
    <p>
        <label for="name">Naam</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="contact">Contactmethode (e-mailadres, telefoonnummer, etc)</label>
        <input type="text" name="contact" id="contact">
    </p>
    <p>
        <label for="message_type">Onderwerp</label>
        <select name="message_type" id="message_type" data-native-menu="false">
            <option value="">Selecteer onderwerp</option>
            <option value="featurerequest">Idee voor een nieuwe feature</option>
            <option value="bugreport">Bug, foutmelding, etc</option>
            <option value="overig">Overig</option>
        </select>
    </p>
    <p>
        <label for="message">Bericht</label>
        <textarea name="message" id="message"></textarea>
    </p>
    <p>
        <input type="submit" value="Verzenden" data-theme="d">
    </p>
</form>

<h2>Credits</h2>
<p>
    ZeusMatch is een product van <a href="https://www.facebook.com/max.maton">Max Maton</a> en <a href="https://www.facebook.com/jakobbuis">Jakob Buis</a>.
</p>
