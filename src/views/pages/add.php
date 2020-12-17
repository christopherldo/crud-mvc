<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base . '/novo'?>">
  <label for="name">
    Nome:<br>
    <input type="text" name="name" id="name">
  </label>

  <br>
  <br>

  <label for="email">
    Email:<br>
    <input type="email" name="email" id="email">
  </label>

  <br>
  <br>

  <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>