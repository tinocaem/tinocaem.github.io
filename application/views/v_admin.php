<!DOCTYPE html>
<html>
<head>
	<title>Membuat login dengan Codeigniter</title>
</head>
<body>

	<h1>Login Berhasil !!!</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url('login/logout');?>">LOGOUT</a>
	<br><br>

<?php foreach($user as $u) { ?>
<table>
	<tr>
		<td>nama</td>
		<td>
			<?php echo $u->id ?>
		</td>
	<td>
			<?php echo $u->nama ?>
		</td>
	</tr>

</table>
<?php } ?>
	<?php echo anchor('admin/edit/'.$u->id,'Edit'); ?>
	<?php echo anchor('admin/hapus/'.$u->id,'Hapus'); ?>>
</body>
</html>