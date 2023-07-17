<head>
    <?php include 'header.php' ?>
</head>

<body>
    <div class="container vertical-center horizontal-center">
        <div class="row horizontal-center p-3 my-3 border border-3" id="loginBlock">
            <form action="loginProcess.php" method="post">
                <?php if (isset($_SESSION['boolPass']) and $_SESSION['boolPass']) { ?><p class="sRed text-center row-6">
                        Ce mot de passe est erroné.</p><?php } ?>
                <?php if (isset($_SESSION['boolLog']) and $_SESSION['boolLog']) { ?><p class="sRed text-center row-6">
                        Cet identifiant n'est pas raconnu.</p><?php } ?>
                <div class="row horizontal-center">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">👤</span>
                        <input type="text" class="form-control marginB10" placeholder="Identifiant" aria-label="Username" aria-describedby="basic-addon1" name="login" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">🔒</span>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="password" required>
                    </div>
                </div>
                <div class="row horizontal-center marginT10">
                    <button type="submit" name="validation" class="btn btn-light">Connexion</button>
                </div>
            </form>
        </div>
    </div>
</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>