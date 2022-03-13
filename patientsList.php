<html>

<head>
    <?php include 'header.php' ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Genre</th>
                <th scope="col">Profession</th>
                <th scope="col">Portable</th>
                <th scope="col">Fixe</th>
                <th scope="col">Professionel</th>
                <th scope="col">Mail</th>
                <th scope="col">Envoye par</th>
                <th scope="col">Médecin traitant</th>
                <th scope="col">Mutuelle</th>
            </tr>
        </thead>
        <tbody>
            <?php
            try {
                $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }

            $sqlPrepStat = $db->prepare('SELECT * FROM patient WHERE id_user = :userId');
            $sqlPrepStat->execute(array(
                'userId' => $_SESSION['id']
            ));
            $results = $sqlPrepStat->fetchAll();

            foreach ($results as $result) {

                $sqlPrepStatMedecin = $db->prepare('SELECT nom_medecin FROM medecin WHERE id_medecin = :medecinId');
                $sqlPrepStatMedecin->execute(array(
                    'medecinId' => $result['id_medecin']
                ));
                $resultMedecin = $sqlPrepStatMedecin->fetch();

                $sqlPrepStatMutuelle = $db->prepare('SELECT nom_mutuelle FROM mutuelle WHERE id_mutuelle = :mutuelleId');
                $sqlPrepStatMutuelle->execute(array(
                    'mutuelleId' => $result['id_mutuelle']
                ));
                $resultMutuelle = $sqlPrepStatMutuelle->fetch();

                echo ("<tr id=\"" . $result['id'] . "\" onclick=\"openPatientDetail(" . $result['id'] . ")\">" .
                    "<th scope=\"row\">" . $result['id'] . "</th>" .
                    "<td>" . $result['name'] . "</td>" .
                    "<td>" . $result['firstname'] . "</td>" .
                    "<td>" . $result['gender'] . "</td>" .
                    "<td>" . $result['job'] . "</td>" .
                    "<td>" . $result['cellphone'] . "</td>" .
                    "<td>" . $result['homephone'] . "</td>" .
                    "<td>" . $result['prophone'] . "</td>" .
                    "<td>" . $result['mail'] . "</td>" .
                    "<td>" . $result['sentby'] . "</td>" .
                    "<td>" . $resultMedecin['nom_medecin'] . "</td>" .
                    "<td>" . $resultMutuelle['nom_mutuelle'] . "</td>" .

                    "</tr>"
                );
            }

            ?>
        </tbody>
    </table>

    <script>
        function openPatientDetail(idRow) {
            console.log("CLICK " + idRow);


            var form = document.createElement("form");
            var element1 = document.createElement("input");

            form.method = "POST";
            form.action = "detailPatient.php";

            element1.value = idRow;
            element1.name = "idPatient";
            form.appendChild(element1);

            document.body.appendChild(form);

            form.submit();

        }
    </script>

</body>

</html>