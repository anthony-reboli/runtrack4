<div class="container">
<form method="post">
  <div class="form-row">
        <div class="form-group col-md-6">
      <label for="inputEmail4">nom</label>
      <input type="text" class="form-control" id="inputEmail4"  name="nom">
    </div>
        <div class="form-group col-md-6">
      <label for="inputEmail4">Prenom</label>
      <input type="text" class="form-control" id="inputEmail4" name="prenom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input pattern=".+@laplateforme.io" type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="mdp1">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Password confirm</label>
    <input type="password" class="form-control" id="inputAddress" placeholder="confirmation" name="mdp2">
  </div>
  <div class="form-row">
  <button type="submit" name="inscription" class="btn btn-primary">Sign in</button>
</form>
</div>