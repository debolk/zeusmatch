<html>
    <body>
        <p>
            Contactformulier van ZeusMatch is ingevuld en verzonden. 
        </p>

        <table>
            <tbody>
                <tr>
                    <th>Naam</th>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <th>Contact methode</th>
                    <td><?php echo $contact_method; ?></td>
                </tr>
                <tr>
                    <th>Type bericht</th>
                    <td><?php echo $message_type; ?></td>
                </tr>
                <tr>
                    <th>Bericht</th>
                    <td><?php echo $content; ?></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
