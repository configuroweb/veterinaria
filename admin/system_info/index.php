<?php if ($_settings->chk_flashdata('success')) : ?>
	<script>
		alert_toast("<?php echo $_settings->flashdata('success') ?>", 'success')
	</script>
<?php endif; ?>

<style>
	img#cimg {
		height: 15vh;
		width: 15vh;
		object-fit: scale-down;
		border-radius: 100% 100%;
	}

	img#cimg2 {
		height: 50vh;
		width: 100%;
		object-fit: contain;
		/* border-radius: 100% 100%; */
	}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-dark rounded-0 shadow">
		<div class="card-header">
			<h5 class="card-title">Configuraciones del Sistema</h5>
			<!-- <div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_department" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div> -->
		</div>
		<div class="card-body">
			<form action="" id="system-frm">
				<div id="msg" class="form-group"></div>
				<div class="form-group">
					<label for="name" class="control-label">Nombre del Sistema</label>
					<input type="text" class="form-control form-control-sm" name="name" id="name" value="<?php echo $_settings->info('name') ?>">
				</div>
				<div class="form-group">
					<label for="short_name" class="control-label">Nombre Corto</label>
					<input type="text" class="form-control form-control-sm" name="short_name" id="short_name" value="<?php echo  $_settings->info('short_name') ?>">
				</div>
				<div class="form-group">
					<label for="content[about_us]" class="control-label">Contenido de Bienvenida</label>
					<textarea type="text" class="form-control form-control-sm summernote" name="content[welcome]" id="welcome"><?php echo  is_file(base_app . 'welcome.html') ? file_get_contents(base_app . 'welcome.html') : '' ?></textarea>
				</div>
				<div class="form-group">
					<label for="content[about_us]" class="control-label">Acerca de</label>
					<textarea type="text" class="form-control form-control-sm summernote" name="content[about_us]" id="about_us"><?php echo  is_file(base_app . 'about_us.html') ? file_get_contents(base_app . 'about_us.html') : '' ?></textarea>
				</div>
				<div class="form-group">
					<label for="" class="control-label">Logo del Sistema</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="img" onchange="displayImg(this,$(this))">
						<label class="custom-file-label" for="customFile">Examinar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="" id="cimg" class="img-fluid img-thumbnail">
				</div>
				<div class="form-group">
					<label for="" class="control-label">Banner</label>
					<div class="custom-file">
						<input type="file" class="custom-file-input rounded-circle" id="customFile" name="cover" onchange="displayImg2(this,$(this))">
						<label class="custom-file-label" for="customFile">Examinar</label>
					</div>
				</div>
				<div class="form-group d-flex justify-content-center">
					<img src="<?php echo validate_image($_settings->info('cover')) ?>" alt="" id="cimg2" class="img-fluid img-thumbnail bg-gradient-dark border-dark">
				</div>
				<fieldset>
					<legend>Otra Información</legend>
					<div class="form-group">
						<label for="email" class="control-label">Correo</label>
						<input type="email" class="form-control form-control-sm" name="email" id="email" value="<?php echo $_settings->info('email') ?>">
					</div>
					<div class="form-group">
						<label for="contact" class="control-label">N Contacto</label>
						<input type="text" class="form-control form-control-sm" name="contact" id="contact" value="<?php echo $_settings->info('contact') ?>">
					</div>
					<div class="form-group">
						<label for="address" class="control-label">Dirección de la Oficina</label>
						<textarea rows="3" class="form-control form-control-sm" name="address" id="address" style="resize:none"><?php echo $_settings->info('address') ?></textarea>
					</div>
				</fieldset>
				<fieldset>
					<legend>Información de la cita</legend>
					<div class="form-group">
						<label for="max_appointment" class="control-label">Número de citas disponibles al día</label>
						<input type="number" class="form-control form-control-sm col-sm-3" name="max_appointment" id="max_appointment" value="<?php echo $_settings->info('max_appointment') ?>">
					</div>
					<div class="form-group">
						<label for="clinic_schedule" class="control-label">Horario diario de la clínica <small><em>i.e.(8:00 AM - 5:30 PM)</em></small></label>
						<input type="text" class="form-control form-control-sm col-sm-3" name="clinic_schedule" id="clinic_schedule" value="<?php echo $_settings->info('clinic_schedule') ?>">
					</div>
				</fieldset>
			</form>
		</div>
		<div class="card-footer">
			<div class="col-md-12">
				<div class="row">
					<button class="btn btn-sm btn-primary" form="system-frm">Actualizar</button>
				</div>
			</div>
		</div>

	</div>
</div>
<script>
	function displayImg(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#cimg').attr('src', e.target.result);
				_this.siblings('.custom-file-label').html(input.files[0].name)
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg2(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				_this.siblings('.custom-file-label').html(input.files[0].name)
				$('#cimg2').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}

	function displayImg3(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				_this.siblings('.custom-file-label').html(input.files[0].name)
				$('#cimg3').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
	$(document).ready(function() {
		$('.summernote').summernote({
			height: '60vh',
			toolbar: [
				['style', ['style']],
				['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
				['fontname', ['fontname']],
				['fontsize', ['fontsize']],
				['color', ['color']],
				['para', ['ol', 'ul', 'paragraph', 'height']],
				['table', ['table']],
				['insert', ['link', 'picture']],
				['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
			]
		})
	})
</script>