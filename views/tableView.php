        <div class="flex-grow-1 d-flex flex-column align-items-center">
            <h1 class="mt-2">Liste des Produits</h1>
            <style>
                .bd-placeholder-img {
                    font-size: 1.125rem;
                    text-anchor: middle;
                    -webkit-user-select: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                }

                @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }
                }
            </style>
            <!-- Custom styles for this template -->
            <link href="signin.css" rel="stylesheet">
            </head>


            <form class="form-signin">
                <div class="flex-grow-1 d-flex flex-column align-items-center">
                    <img class="mb-4" src="./gestock/views/asset/logo.jpeg" alt="logo" width="72" height="72">
                    <h1 class="h3 mb-3 font-weight-normal">Veuillez remplir les champs</h1>
                    <label for="inputEmail" class="sr-only">Email </label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email " required autofocus>
                    <label for="inputPassword" class="sr-only">Mot de Passe</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Se souvenir de moi
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
                </div>
            </form>

            <!-- TODO TableView -->
            <div><i class="far fa-edit"></i><i class="far fa-times-circle"></i></div>
        </div>