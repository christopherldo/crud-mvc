<?php $render('header'); ?>

<a href="<?= $base . '/novo' ?>" style="display: inline-block; height: 48px; line-height: 48px;">Novo Usuário</a>

<table border="1" width="100%">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>AÇÕES</th>
  </tr>
  <?php foreach ($usuarios as $usuario) : ?>
    <tr>
      <td><?= $usuario['id'] ?></td>
      <td><?= $usuario['nome'] ?></td>
      <td><?= $usuario['email'] ?></td>
      <td>
        <a href="<?= $base . '/usuario/' . $usuario['id'] . '/editar' ?>" style="display: inline-block; height: 48px; line-height: 48px">
          [EDITAR]
        </a>
        <a href="<?= $base . '/usuario/' . $usuario['id'] . '/excluir' ?>" style="display: inline-block; height: 48px; line-height: 48px" onclick="return confirm('Tem certeza que deseja excluir?')">
          [EXCLUIR]
        </a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php $render('footer'); ?>