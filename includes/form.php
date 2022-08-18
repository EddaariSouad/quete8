<!-- Formulaire -->
<section class="form">
<form action="index.php" method=POST>
<h2>Formulaire des données</h2>
<div class="form-group">
    <label>Prenom</label>
    <input type="text" name="prenom" class="form-control" required>
    <label>Nom</label>
    <input type="text" name="nom" class="form-control" required>
    <label>Age (10 à 60 ans)</label>
    <input type="text" name="age" class="form-control" required>
</div>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Taille (entre 1.5 et 2m)</span>
  </div>
    <input type="number" class="form-control" step="0.01" name="taille" required>
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">m</span>
  </div>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="radios" id="exampleRadios1" value="Apprenants" checked required>
  <label class="form-check-label" for="exampleRadios1">
    Apprenants
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="radios" id="exampleRadios2" value="Formateurs" required>
  <label class="form-check-label" for="exampleRadios2">
    Formateurs
  </label>
</div>
<div class=text-right>
<button type="submit" class="btn btn-primary" name="submit">Enregistrer les données</button>
</div>


</form>
</section>
<!--  -->
