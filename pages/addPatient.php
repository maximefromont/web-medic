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
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Nom</span>
                            </div>
                            <input id="nom-input" type="text" class="form-control" aria-label="Nom" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-6">
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
            <div class="col-5 p-4 text-center">
                <div class="input-group mb-3" style="height: 86%;">
                    <span class="input-group-text">Remarque</span>
                    <textarea id="remarque-input" class="form-control" rows="15" style="height: 100%;" aria-label="Remarque"></textarea>
                </div>
                <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="sauvegarderPatient()">Sauvegarder nouveau patient</button>
            </div>
        </div>
    </div>
    <script>
        function checkValue(value) {
            if (value == null || value == "Non renseigné...") {
                return "";
            } else {
                return value;
            }
        }

        function sauvegarderPatient(idUer) {

            var nom = checkValue(document.getElementById('nom-input').value);
            if (nom == "") {
                alert("Erreur, le patient doit au moins posséder un nom.")
                document.getElementById('nom-input').style.cssText == "background-color: red";
                return;
            } else {
                document.getElementById('nom-input').style.cssText == "background-color: #fff";
            }

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
                url: "insertPatient.php",
                data: {
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

                    alert("Le nouveau patient " + nom + " a été enregistré avec succès.")

                    document.getElementById('nom-input').value = "";
                    document.getElementById('prenom-input').value = "";
                    document.getElementById('profession-input').value = "";;
                    document.getElementById('date-input').value = "";

                    document.getElementById('situation-input').value = "Non renseigné...";
                    document.getElementById('enfants-input').value = "";
                    document.getElementById('genre-input').value = "Non renseigné...";

                    document.getElementById('num-input').value = "";
                    document.getElementById('pro-input').value = "";
                    document.getElementById('fixe-input').value = "";
                    document.getElementById('mail-input').value = "";
                    document.getElementById('adresse-input').value = "";

                    document.getElementById('medecin-input').value = "Non renseigné...";
                    document.getElementById('mutuelle-input').value = "Non renseigné...";

                    document.getElementById('nummut-input').value = "";
                    document.getElementById('envoye-input').value = "";

                    document.getElementById('remarque-input').value = "";
                }
            });
        }
    </script>
</body>

</html>