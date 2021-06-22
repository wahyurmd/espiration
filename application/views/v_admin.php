<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>E-Spiration</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/sticky.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="http://fonts.cdnfonts.com/css/cosmic-blaster" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css">
		.font-color {
			font-family: 'Cosmic Blaster';
			text-align: center;
			font-style: bold;
			margin: 0;
			padding: 0;
			transform: translateY(30%);
			font-weight: 900;
			background: linear-gradient(to top, #FFA500, #FFFFFF);
			-webkit-text-fill-color: transparent;
			-webkit-background-clip: text;
			margin-bottom: 10px;
		}

		.iconify {
			color: #FFFFFF;
		}

		.big-icon .iconify {
		   font-size: 20px;
		   line-height: 1em;
		}

		.big-icon1 .iconify {
		   font-size: 20px;
		   line-height: 1em;
		}

		.sizeee {
			font-size: 20px;
		}

		#test {
		    border: 4px solid #7ac0da;
		    height: 85%;margin: 0px;
		}

		.container {
			background: #FFFFFF;

		}
	</style>
</head>
<body>
	<div class="container-full">
		<!-- Menu Navbar -->
		<nav class="navbar navbar-expand-md navbar-dark bg-primary">
			<a href="#" class="navbar-brand" style="margin-left: 30px"><b>E-Spiration</b></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
				<div class="navbar-nav">
					<div class="nav sizeee">
						<?php if($this->session->userdata('akses') == 'Admin'): ?>
							<li class="navbar nav-item">
								<a class="nav-link" aria-current="page" href="<?= base_url() ?>home" style="color: #D3D3D3">Home</a>
							</li>
							<li class="navbar nav-item" style="margin-left: 5px;">
								<a class="nav-link" aria-current="page" href="<?= base_url() ?>home/admin" style="color: #FFFFFF">Admin</a>
							</li>
						<?php elseif($this->session->userdata('akses') == 'Mahasiswa'): ?>
							<li class="navbar nav-item">
								<a class="nav-link" aria-current="page" href="<?= base_url() ?>home" style="color: #FFFFFF">Home</a>
							</li>
						<?php endif; ?>
					</div>
				</div>
				<div class="navbar-nav" style="margin-right: 30px">
					<li class="navbar nav-item">
						<div class="big-icon">
							<a class="nav-link iconify" href="<?= base_url() ?>login/logout" style="color: #FFFFFF"><span class="iconify" data-icon="wpf:shutdown" data-inline="false"></span> </a>
						</div>
					</li>
				</div>
			</div>
		</nav>

		<!-- Body -->
		<div class="wee">
			<div class="header" style="margin-bottom: 50px;">
				<h1 class="font-color">ASPIRATION WEEK</h1>
				<h3 class="font-color">E-Spiration</h3>
			</div>
				<div class="container" style=" width: 80%;">
					<div class="body" style="padding-top: 25px; padding-left: 10px; padding-right: 10px">
						<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" style="width:100%;">
					        <thead>
					            <tr>
					                <th>No</th>
					                <th>NIM</th>
					                <th>Aspiration</th>
					                <th>Created At</th>
					                <th>Action</th>
					            </tr>
					        </thead>
					        <?php $no=1; foreach ($tampil as $key) { ?>
					        <tbody>
					            <tr>
					                <td><?= $no++ ?></td>
					                <td><?= $key->id_user ?></td>
					                <td><?= $key->aspirasi ?></td>
					                <td><?= $key->created_at ?></td>
					                <td>61</td>
					            </tr>
					        </tbody>
					        <?php } ?>
					    </table>
					</div>
				</div>
		</div>
	</div>

	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
	<!-- Remember to include jQuery :) -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

	<!-- jQuery Modal -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
		    $('#example').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'excel'
		        ]
		    } );
		} );
	</script>

</body>
</html>