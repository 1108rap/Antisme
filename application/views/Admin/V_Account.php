<!-- Create Account Shortcut -->
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="padding-top:0px;">
					<div class="row">
						<div class="col-md-6">
							<h4 class="card-title">Create New Account</h4>
						</div>
						<div class="col-md-6 align-self-center">
							<a href="<?=site_url('Create')?>" class="btn btn-sm btn-success btn-round pull-right">Create</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of Create Account Shortcut -->

<!-- Client Account -->
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Client</h4>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<?php foreach($DataClient->result() as $key => $data) {?>
							<div class="col-md-4">
								<div class="card card-user">
									<div class="image">
										<img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
									</div>
									<div class="card-body">
										<div class="author">
											<a href="#">
												<img class="avatar border-gray" src="<?=base_url()?>assets/photo/<?=$data->Photo != null ? $data->Photo : 'mike.jpg' ?>" alt="...">
											<h5 class="title"><?=$data->Name?></h5>
											</a>
											<p class="description text-uppercase"><?=($data->Username)?></p>
										</div>
										<div class="row justify-content-center">
											<div class="col-md-11 px-1 text-center">
												<hr>
												<div class="row">
													<div class="col-md-12 pr-1">
														<a class="card-title">Office Area</a>
														<p class="description"><?=$data->Address?>. <?=$data->Telephone?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 pr-1">
														<a class="card-title">About Company</a>
														<p class="description"><?=$data->Description?></p>
													</div>
												</div>
											</div>
										</div>
										<div class="row justify-content-center">
											<div class="col-md-11 px-1 text-center">
												<hr>
												<div class="row">
													<div class="col-md-12 pr-1">
														<a class="card-title">Contact Center</a>
														<p class="description"><?=$data->Email?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<hr>
										<div class="button-container">
											<div class="row justify-content-center">
												<form action="<?=site_url('Details/account')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Client_ID?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Details">
														<i class="fa fa-id-card-o"></i>
														Details
													</button>
												</form>
												<form action="<?=site_url('Account/AccountDelt')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Client_ID?>">
													<input type="hidden" name="username" value="<?=$data->Username?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Cancel">
														<i class="fa fa-times"></i>
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of Client Account -->

<!-- Employee Account -->
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Employee</h4>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<?php foreach($DataEmployee->result() as $key => $data) {?>
							<div class="col-md-4">
								<div class="card card-user">
									<div class="image">
										<img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
									</div>
									<div class="card-body">
										<div class="author">
											<a href="#">
												<img class="avatar border-gray" src="<?=base_url()?>assets/photo/<?=$data->Photo != null ? $data->Photo : 'mike.jpg' ?>" alt="...">
												<h5 class="title"><?=$data->Name?></h5>
											</a>
											<p class="description text-uppercase"><?=ucfirst($data->Username)?></p>
										</div>
										<div class="row justify-content-center">
											<div class="col-md-11 px-1 text-justify">
												<hr>
												<p class="title text-center"><?=$data->Status?></p>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Phone</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Phone?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">E-mail</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Email?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Address</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Address?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Description</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Description?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<hr>
										<div class="button-container">
											<div class="row justify-content-center">
												<form action="<?=site_url('Details/account')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Employee_ID?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Details">
														<i class="fa fa-id-card-o"></i>
														Details
													</button>
												</form>
												<form action="<?=site_url('Account/AccountDelt')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Employee_ID?>">
													<input type="hidden" name="username" value="<?=$data->Username?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Cancel">
														<i class="fa fa-times"></i>
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of Employee Account -->

<!-- Admin Account -->
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Admin</h4>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<?php foreach($DataAdmin->result() as $key => $data) {?>
							<div class="col-md-4">
								<div class="card card-user">
									<div class="image">
										<img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
									</div>
									<div class="card-body">
										<div class="author">
											<a href="#">
												<img class="avatar border-gray" src="<?=base_url()?>assets/photo/<?=$data->Photo != null ? $data->Photo : 'mike.jpg' ?>" alt="...">
												<h5 class="title"><?=$data->Name?></h5>
											</a>
										</div>
										<p class="description text-center text-uppercase"><?=$data->Username?></p>
										<div class="row justify-content-center">
											<div class="col-md-11 px-1 text-justify">
												<hr>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Phone</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Phone?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">E-mail</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Email?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Address</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Address?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<hr>
										<div class="button-container">
											<div class="row justify-content-center">
												<form action="<?=site_url('Details/account')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Admin_ID?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Details">
														<i class="fa fa-id-card-o"></i>
														Details
													</button>
												</form>
												<form action="<?=site_url('Account/AccountDelt')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Admin_ID?>">
													<input type="hidden" name="username" value="<?=$data->Username?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Cancel">
														<i class="fa fa-times"></i>
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of Admin Account -->