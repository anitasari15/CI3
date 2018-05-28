<?php echo form_open('user/login'); ?>
			<br>
			<br>
			<h1 class="text-center">FORM LOGIN</h1>
			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="form-group">
			<label class="col-sm-2 col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
			<input type="text" name="username" class="form-control" placeholder="Masukkan Username" required autofocus>
			</div>
			</div>
			<br>
			<br>
			<br>
			<div class="form-group">
			<label class="col-sm-2 col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
			<input type="text" name="password" class="form-control" placeholder="Masukkan Password" required>
			</div>
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<button type="submit" class="btn btn-primary btn-block">Login</button>
		</div>
	</div>
<?php echo form_close(); ?>