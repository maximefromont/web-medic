<html>

<head>
    <?php include 'header.php' ?>
    <?php include 'DAOPatient.php' ?>
    <?php include 'DAOMedecin.php' ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
    <div class="col-12 my-auto">
        <div class="row">
            <div class="col-7 p-4">
                <div class="row">
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Id</span>
                            </div>
                            <input id="id-input" type="text" class="form-control" aria-label="Nom" aria-describedby="basic-addon1" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nom</span>
                            </div>
                            <input id="nom-input" type="text" class="form-control" aria-label="Nom" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Prénom</span>
                            </div>
                            <input id="prenom-input" type="text" class="form-control" aria-label="Prénom" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-7">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Profession</span>
                            </div>
                            <input id="profession-input" type="text" class="form-control" aria-label="Profession" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date de naissance</span>
                            </div>
                            <input id="date-input" type="text" class="form-control" aria-label="Date de naissance" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-5">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="situation-input">Situation maritale</label>
                            <select class="form-select" id="situation-input">
                                <option selected>Non renseigné...</option>
                                <option value="Marié">Marié</option>
                                <option value="En couple">En couple</option>
                                <option value="Célibataire">Célibataire</option>
                                <option value="Divorcé">Divorcé</option>
                                <option value="Veuf">Veuf</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Enfants</span>
                            </div>
                            <input id="enfants-input" type="text" class="form-control" aria-label="Enfants" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="genre-input">Genre</label>
                            <select class="form-select" id="genre-input">
                                <option selected>Non renseigné...</option>
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Numéro portable</span>
                            </div>
                            <input id="num-input" type="text" class="form-control" aria-label="Numéro portable" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Numéro pro</span>
                            </div>
                            <input id="pro-input" type="text" class="form-control" aria-label="Numéro pro" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Numéro fixe</span>
                            </div>
                            <input id="fixe-input" type="text" class="form-control" aria-label="Numéro fixe" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Adresse e-mail</span>
                            </div>
                            <input id="mail-input" type="text" class="form-control" aria-label="Adresse e-mail" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Adresse postale</span>
                            </div>
                            <input id="adresse-input" type="text" class="form-control" aria-label="Adresse postale" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

                <div id="medMutRow" class="row">
                    <div id="medMutCol" class="col-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="medecin-input">Médecin</label>
                            <select class="form-select" id="medecin-input">
                                <option selected>Non renseigné...</option>
                                <?php

                                try {
                                    $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
                                } catch (Exception $e) {
                                    die('Erreur : ' . $e->getMessage());
                                }

                                $resultsMedecin = $db->query("SELECT * FROM medecin")->fetchAll();


                                foreach ($resultsMedecin as $result) {
                                    echo "<option value=\"" . $result['Id_medecin'] . "\">" . $result['Nom_medecin'] . "</option>";
                                }

                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="mutuelle-input">Mutuelle</label>
                            <select class="form-select" id="mutuelle-input">
                                <option selected>Non renseigné...</option>
                                <?php

                                try {
                                    $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
                                } catch (Exception $e) {
                                    die('Erreur : ' . $e->getMessage());
                                }

                                $resultsMutuelle = $db->query("SELECT * FROM mutuelle")->fetchAll();


                                foreach ($resultsMutuelle as $result) {
                                    echo "<option value=\"" . $result['Id_mutuelle'] . "\">" . $result['Nom_mutuelle'] . "</option>";
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input id="nomMedecin" name="nomMedecin" type="text" class="form-control" placeholder="Ajouter un médecin..." aria-label="Ajouter un médecin..." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" onclick="insertMedecinInit()" type="button">Enregistrer</button>
                            </div>
                        </div>
                        <script>
                            //Récupère les données du champ mutuelle et les envoie dans un formulaire post via ajax 
                            //au fichier insertMedecin.php puis actualise la zone mutuelle/medecin de la page pour recharger les noms dans le
                            //menu déroulant
                            function insertMedecinInit() {
                                var nomMedecin = document.getElementById('nomMedecin').value;

                                $.ajax({
                                    type: "post",
                                    url: "insertMedecin.php",
                                    data: "name=" + nomMedecin,
                                    success: function(data) {}
                                });

                                setTimeout(() => {
                                    document.getElementById('nomMedecin').value = "";
                                    $("#medMutRow").load(window.location.href + " #medMutRow");
                                }, 250);
                            }
                        </script>
                        <div class="input-group mb-3">
                            <input id="nomMutuelle" name="nomMutuelle" type="text" class="form-control" placeholder="Ajouter une mutuelle..." aria-label="Ajouter une mutuelle..." aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" onclick="insertMutuelleInit()" type="button">Enregistrer</button>
                            </div>
                        </div>
                        <script>
                            //Récupère les données du champ mutuelle et les envoie dans un formulaire post via ajax 
                            //au fichier insertMutuelle.php puis actualise la zone mutuelle/medecin de la page pour recharger les noms dans le
                            //menu déroulant
                            function insertMutuelleInit() {
                                var nomMutuelle = document.getElementById('nomMutuelle').value;

                                $.ajax({
                                    type: "post",
                                    url: "insertMutuelle.php",
                                    data: "name=" + nomMutuelle,
                                    success: function(data) {}
                                });

                                setTimeout(() => {
                                    document.getElementById('nomMutuelle').value = "";
                                    $("#medMutRow").load(window.location.href + " #medMutRow");
                                }, 250);
                            }
                        </script>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Numéro de mutuelle</span>
                            </div>
                            <input id="nummut-input" type="text" class="form-control" aria-label="Numéro de mutuelle" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Envoyé par</span>
                            </div>
                            <input id="envoye-input" type="text" class="form-control" aria-label="Envoyé par" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>

            </div>
            <div id="col-droite" class="col-5 p-4 text-center">
                <div class="input-group mb-3" style="height: 30%;">
                    <span class="input-group-text">Remarque</span>
                    <textarea id="remarque-input" class="form-control" rows="15" style="height: 100%;" aria-label="Remarque"></textarea>
                </div>
                <div id="ligneTab" class="row">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">Date</th>
                            <th scope="col">Motif</th>
                            <th scope="col">Traitement</th>
                        </tr>
                    </thead>
                    <tbody id="tabConsultation">
                        <?php
                        try {
                            $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
                        } catch (Exception $e) {
                            die('Erreur : ' . $e->getMessage());
                        }

                        $sqlPrepStat = $db->prepare('SELECT * FROM consultation WHERE id_patient = :idPatient');
                        $sqlPrepStat->execute(array(
                            'idPatient' => $_POST['idPatient']
                        ));
                        $results = $sqlPrepStat->fetchAll();

                        foreach ($results as $result) {

                            echo ("<tr id=\"" . $result['id'] . "\">" .
                                "<th scope=\"row\">" . $result['id'] . "</th>" .
                                "<td>" . $result['date'] . "</td>" .
                                "<td>" . $result['motif'] . "</td>" .
                                "<td>" . $result['traitement'] . "</td>" .
                                "</tr>"
                            );
                        }

                        ?>
                    </tbody>
                </table>
                </div>
                <div class="input-group mb-3">
                    <div class="col-12">
                        <input id="dateConsultation" name="dateConsultation" type="text" class="form-control mb-1" placeholder="Date..." aria-label="Date..." aria-describedby="basic-addon2">
                        <input id="motifConsultation" name="motifConsultation" type="text" class="form-control mb-1" placeholder="Motif..." aria-label="Motif..." aria-describedby="basic-addon2">
                        <input id="traitementConsultation" name="traitementConsultation" type="text" class="form-control mb-2" placeholder="Traitement..." aria-label="Traitement..." aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" onclick="createConsultation()" type="button">Ajouter une consultation</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <button id="edit-button" type="button" class="btn btn-secondary btn-lg btn-block" onclick="editPatient()">Modifier patient</button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-secondary btn-lg btn-block" style="background-color: red;" onclick="deletePatient()">Supprimer patient</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function createConsultation() {

            var date = checkValue(document.getElementById('dateConsultation').value);
            var motif = checkValue(document.getElementById('motifConsultation').value);
            var traitement = checkValue(document.getElementById('traitementConsultation').value);
            var idPatient = document.getElementById('id-input').value;

            if (motif == "") {
                alert("Erreur, la consultation doit au moins posséder un motif.")
                document.getElementById('motifConsultation').style = "background-color: red";
                return;
            } else {
                document.getElementById('motifConsultation').style = "background-color: #fff";
            }

            $.ajax({
                type: "post",
                url: "insertConsultation.php",
                data: {
                    date: date,
                    motif: motif,
                    traitement: traitement,
                    idPatient: idPatient
                },
                success: function(data) {

                    //alert(data)

                    window.location.reload();

                    document.getElementById('dateConsultation').value = "";
                    document.getElementById('motifConsultation').value = "";
                    document.getElementById('traitementConsultation').value = "";;
                }
            });

        }

        function editPatient() {
            setReadOnly(false);
            document.getElementById('edit-button').innerHTML = "Sauvegarder modification";
            document.getElementById('edit-button').setAttribute('onclick', "saveEdit()");
        }

        function saveEdit() {
            setReadOnly(true);
            document.getElementById('edit-button').innerHTML = "Modifier patient";
            document.getElementById('edit-button').setAttribute('onclick', "editPatient()");
            sauvegarderPatient();
        }

        function deletePatient() {
            if (confirm('Êtes vous sur de vouloir supprimer ce patient ?')) {

                var idPatient = document.getElementById('id-input').value;

                $.ajax({
                    type: "post",
                    url: "deletePatient.php",
                    data: {
                        idPatient: idPatient,
                    },
                    success: function(data) {
                        //alert(data)
                    }
                }).done(function(msg) {
                    window.location.href = 'patientsList.php' // redirects the page when finished.
                });
            } else {
                //Do nothing
            }
        }

        function initValue(idPatient, nom, prenom, profession, date, situation, enfants, genre, num, pro, fixe, mail, adresse, medecin, mutuelle, nummut, envoye, remarque) {

            document.getElementById('id-input').value = idPatient;
            document.getElementById('nom-input').value = nom;
            document.getElementById('prenom-input').value = prenom;
            document.getElementById('profession-input').value = profession;
            document.getElementById('date-input').value = date;

            document.getElementById('situation-input').value = situation;
            document.getElementById('enfants-input').value = enfants;
            document.getElementById('genre-input').value = genre;

            document.getElementById('num-input').value = num;
            document.getElementById('pro-input').value = pro;
            document.getElementById('fixe-input').value = fixe;
            document.getElementById('mail-input').value = mail;
            document.getElementById('adresse-input').value = adresse;

            document.getElementById('medecin-input').value = medecin;
            document.getElementById('mutuelle-input').value = mutuelle;

            document.getElementById('nummut-input').value = nummut;
            document.getElementById('envoye-input').value = envoye;

            document.getElementById('remarque-input').value = remarque;

            setReadOnly(true);
        }

        function setReadOnly(bool) {
            document.getElementById('nom-input').readOnly = bool;
            document.getElementById('prenom-input').readOnly = bool;
            document.getElementById('profession-input').readOnly = bool;
            document.getElementById('date-input').readOnly = bool;

            document.getElementById('situation-input').disabled = bool;
            document.getElementById('enfants-input').readOnly = bool;
            document.getElementById('genre-input').disabled = bool;

            document.getElementById('num-input').readOnly = bool;
            document.getElementById('pro-input').readOnly = bool;
            document.getElementById('fixe-input').readOnly = bool;
            document.getElementById('mail-input').readOnly = bool;
            document.getElementById('adresse-input').readOnly = bool;

            document.getElementById('medecin-input').disabled = bool;
            document.getElementById('mutuelle-input').disabled = bool;

            document.getElementById('nummut-input').readOnly = bool;
            document.getElementById('envoye-input').readOnly = bool;

            document.getElementById('remarque-input').readOnly = bool;
        }

        function checkValue(value) {
            if (value == null || value == "Non renseigné...") {
                return "";
            } else {
                return value;
            }
        }

        function sauvegarderPatient() {

            var nom = checkValue(document.getElementById('nom-input').value);
            if (nom == "") {
                alert("Erreur, le patient doit au moins posséder un nom.")
                document.getElementById('nom-input').style.cssText == "background-color: red";
                return;
            } else {
                document.getElementById('nom-input').style.cssText == "background-color: #fff";
            }

            var idPatient = document.getElementById('id-input').value;
            var prenom = checkValue(document.getElementById('prenom-input').value);
            var profession = checkValue(document.getElementById('profession-input').value);
            var date = checkValue(document.getElementById('date-input').value);

            var situation = checkValue(document.getElementById('situation-input').value);
            var enfants = checkValue(document.getElementById('enfants-input').value);
            var genre = checkValue(document.getElementById('genre-input').value);

            var num = checkValue(document.getElementById('num-input').value);
            var pro = checkValue(document.getElementById('pro-input').value);
            var fixe = checkValue(document.getElementById('fixe-input').value);
            var mail = checkValue(document.getElementById('mail-input').value);
            var adresse = checkValue(document.getElementById('adresse-input').value);

            var idMedecin = checkValue(document.getElementById('medecin-input').value);
            var idMutuelle = checkValue(document.getElementById('mutuelle-input').value);
            var nummut = checkValue(document.getElementById('nummut-input').value);
            var envoye = checkValue(document.getElementById('envoye-input').value);

            var remarque = checkValue(document.getElementById('remarque-input').value);

            $.ajax({
                type: "post",
                url: "updatePatient.php",
                data: {
                    idPatient: idPatient,
                    nom: nom,
                    prenom: prenom,
                    profession: profession,
                    date: date,
                    situation: situation,
                    enfants: enfants,
                    genre: genre,
                    num: num,
                    pro: pro,
                    fixe: fixe,
                    mail: mail,
                    adresse: adresse,
                    idMedecin: idMedecin,
                    idMutuelle: idMutuelle,
                    nummut: nummut,
                    envoye: envoye,
                    remarque: remarque,
                    idUser: 1
                },
                success: function(data) {

                    //alert(data)

                    alert("Modification enregistré avec succès !")
                }
            });
        }
    </script>
    <?php
    try {
        $db = new PDO('mysql:host=localhost;dbname=osteoBDD;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $sqlPrepStat = $db->prepare('SELECT * FROM patient WHERE id = :idPatient');
    $sqlPrepStat->execute(array(
        'idPatient' => $_POST['idPatient']
    ));
    $result = $sqlPrepStat->fetch();

    echo "<script> initValue(\"" . $_POST['idPatient'] . "\",\"" . $result['name'] . "\",\"" . $result['firstname'] . "\",\"" . $result['job'] . "\",\""
        . $result['birthdate'] . "\",\"" . $result['situation'] . "\",\"" . $result['childrens'] . "\",\"" . $result['gender'] . "\",\""
        . $result['cellphone'] . "\",\"" . $result['prophone'] . "\",\"" . $result['housephone'] . "\",\"" . $result['mail'] . "\",\""
        . $result['adresse'] . "\",\"" . $result['id_medecin'] . "\",\"" . $result['id_mutuelle'] . "\",\"" . $result['nummut'] . "\",\""
        . $result['sentby'] . "\",\"" . $result['note'] . "\") </script>\n";
    ?>
</body>

</html>