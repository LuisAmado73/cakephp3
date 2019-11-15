<?= $this->Html->css('aplication') ?>

<h2>
	<hr class="aplication">
    Pacientes Psicología JÚCAR/MOLIÈRE
    <hr class="aplication">
</h2>

Por

<?= $this->Html->link($current_user['first_name'] . ' ' . $current_user['last_name'], ['controller' => 'Users', 'action' => 'view', $current_user['id']])?>

<span>@</span>
