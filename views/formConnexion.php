  <div class="mx-auto text-center">
      <form class="form-signin" action="index.php" method="post">
          <div class="flex-grow-1 d-flex flex-column align-items-center">
              <img class="mb-4" src="http://gestock/component/img/favicon/logo.jpeg" alt="logo" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Veuillez remplir les champs</h1>
              <label for="inputEmail" class="sr-only">Email </label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email " required autofocus>
              <label for="inputPassword" class="sr-only">Mot de Passe</label>
              <!-- <input type="password" id="inputPassword" name="password" class="form-control" value="" placeholder="Mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Doit contenir au moins un chiffre, une lettre majuscule, une lettre minuscule et au moins 8 charactères"> -->
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Mot de Passe" required>
              <div class="checkbox mb-3">
                  <label>
                      <input type="checkbox" value="remember-me"> Se souvenir de moi
                  </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
              <!-- <p class="mt-5 mb-3 text-muted">&copy; 2020</p> -->
          </div>
          <input type="hidden" name="action" value="auth">
      </form>
  </div>