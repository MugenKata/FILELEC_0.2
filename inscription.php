<center>
    <h2> inscription </h2>
    <form method="post" action="index.PHP?page=3">
        <table border=0>
            <tr><td> nom </td>
                <td> <input type='text' name='nom_client'></td></tr>
            <tr><td> prenom </td>
                <td><input type='text' name='prenom_client'></td></tr>
            <tr><td>Telephone</td>
                <td><input type='text' name='telephone'</td>        
                </td></tr>
            <tr><td>sexe</td>
                <td><input type='text' name='sexe'></td></tr>
            <tr><td> email </td>
                <td> <input type='text' name='email'></td></tr>
            <tr><td>login</td>
                <td> <input type='text' name='login'></td></tr>
            <tr><td> mot de passe </td>
                <td><input type='password' name='mot_de_passe'></td>
            <tr><td><input type='submit' value='valider' name='valider'>
                <td><input type='reset' value='annuler' name='annuler'>
</table>
</form>
            <?php

    


           if (isset($_POST['valider']))
    {
        insertclient($_POST);
    }
            ?>  