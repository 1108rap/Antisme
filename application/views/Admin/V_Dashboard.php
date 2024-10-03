<!-- Notification Card -->
	<div class="row justify-content-center">
		<div class="col-lg-3 col-md-6 col-sm-6 ">
			<div class="card card-stats  bg-success">
				<div class="card-body">
					<div class="row">
					<div class="col-5 col-md-4">
						<div class="icon-big text-center icon-warning">
						<i class="nc-icon nc-badge"></i>
						</div>
					</div>
					<div class="col-7 col-md-8 align-self-center">
						<div class="numbers text-center">
						<p class="card-category text-white">Employee Available</p>
						</div>
					</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<hr>
					<div class="stats text-white">
					<i class="fa fa-check"></i>
					<?=$employeeavail->EmployeeAvailable?> Account
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 ">
			<div class="card card-stats  bg-danger">
				<div class="card-body">
					<div class="row">
					<div class="col-5 col-md-4">
						<div class="icon-big text-center icon-warning">
						<i class="nc-icon nc-briefcase-24"></i>
						</div>
					</div>
					<div class="col-7 col-md-8 align-self-center">
						<div class="numbers text-center">
						<p class="card-category text-white">Employee<br>On jobs</p>
						</div>
					</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<hr>
					<div class="stats text-white">
					<i class="fa fa-warning"></i>
					<?=$employeebusy->EmployeeBusy?> Account
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 ">
			<div class="card card-stats  bg-warning">
				<div class="card-body">
					<div class="row">
					<div class="col-5 col-md-4">
						<div class="icon-big text-center icon-warning">
						<i class="nc-icon nc-bank"></i>
						</div>
					</div>
					<div class="col-7 col-md-8 align-self-center">
						<div class="numbers text-center">
						<p class="card-category text-white">Client<br>With Us</p>
						</div>
					</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<hr>
					<div class="stats text-white">
					<i class="fa fa-building"></i>
					<?=$totalclient->TotalClient?> Account
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of Notification Card -->

<!-- Create Account Shortcut -->
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="padding-top:0px;">
					<div class="row">
						<div class="col-md-6">
							<h4 class="card-title">Create New Account</h4>
						</div>
						<div class="col-md-6 align-self-center">
							<a href="<?=site_url('Account')?>" class="btn btn-sm btn-warning btn-round pull-right ml-1">Manage</a>
							<a href="<?=site_url('Create')?>" class="btn btn-sm btn-success btn-round pull-right">Create</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of Create Account Shortcut -->

<!-- Request Account -->
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Request Account</h4>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">

					<!-- Request Client -->
						<?php foreach($ReqCln->result() as $key => $data) {?>
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
											<p class="description text-uppercase"><?=$data->Level?></p>
										</div>
										<div class="row justify-content-center text-center">
											<div class="col-md-11 px-1">
												<hr>
												<div class="row justify-content-center">
													<div class="col-md-11 px-1">
														<a class="card-title">Office Area</a>
														<p class="description"><?=$data->Address?></p>
													</div>
												</div>
												<hr>
											</div>
										</div>
										<div class="row justify-content-center">
											<div class="col-md-11 px-1 text-justify">
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Telephone</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Telephone?></p>
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
												<form action="<?=site_url('Dashboard/Approved')?>" method="post">
													<input type="hidden" name="username" value="<?=$data->Username?>">
													<button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Approve">
														<i class="fa fa-check"></i>
														Approve
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
												<form action="<?=site_url('Details/account')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Client_ID?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-warning btn-round btn-icon mr-1" title="Details">
														<i class="fa fa-id-card-o"></i>
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					<!-- End of Request Client -->

					<!-- Request Employee -->
						<?php foreach($ReqEmp->result() as $key => $data) {?>
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
											<p class="description text-uppercase"><?=$data->Level?></p>
										</div>
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
												<form action="<?=site_url('Dashboard/Approved')?>" method="post">
													<input type="hidden" name="username" value="<?=$data->Username?>">
													<button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Approve">
														<i class="fa fa-check"></i>
														Approve
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
												<form action="<?=site_url('Details/account')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Employee_ID?>">
													<input type="hidden" name="level" value="<?=$data->Level?>">
													<button type="submit" class="btn btn-sm btn-outline-warning btn-round btn-icon mr-1" title="Details">
														<i class="fa fa-id-card-o"></i>
													</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					<!-- End of Request Employee -->

					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End of Request Account -->

<!-- Request Contract -->
	<div class="row">
		<div class="col-md-12">
			<div class="card" id="ApprovalContract">
				<div class="card-header">
					<h4 class="card-title">Request Contract</h4>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<?php foreach($ReqCon->result() as $key => $data) {?>
							<div class="col-md-4">
								<div class="card card-user">
									<div class="image">
										<img src="<?=base_url()?>assets/img/damir-bosnjak.jpg" alt="...">
									</div>
									<div class="card-body text-center">
										<a href="">
											<h5 class="title"><?=$data->CompanyName?></h5>
										</a>
										<p class="title"><?=$data->Status?></p>
										<div class="row justify-content-center text-center">
											<div class="col-md-11 px-1">
												<hr>
												<div class="row">
													<div class="col-md-6 pr-1">
														<a class="card-title">Start Work</a>
														<p class="description"><?=$data->From?></p>
													</div>
													<div class="col-md-6 pl-1">
														<a class="card-title">End Work</a>
														<p class="description"><?=$data->To?></p>
													</div>
												</div>
												<hr>
											</div>
										</div>
										<div class="row justify-content-center">
											<div class="col-md-11 px-1 text-justify">
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Contract ID</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Contract_ID?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Employee</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->EmployeeName?></p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-4 pr-1">
														<a class="card-title">Jobs</a>
													</div>
													<div class="col-md-1 px-1">
														<a class="card-title">:</a>
													</div>
													<div class="col-md-7 pl-1">
														<p class="description"><?=$data->Contract_DESC?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<hr>
										<div class="button-container">
											<div class="row justify-content-center">
												<form action="<?=site_url('Dashboard/ChangeContStat')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
													<input type="hidden" name="stat" value="Progress">
													<button class="btn btn-sm btn-outline-success btn-round mr-1" title="Approve">
														<i class="fa fa-check"></i>
														Approve
													</button>
												</form>
												<form action="<?=site_url('Contract/ContractDelt')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
													<input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
													<button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Cancel">
														<i class="fa fa-times"></i>
													</button>
												</form>
												<form action="<?=site_url('Details/contract')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
													<button type="submit" class="btn btn-sm btn-outline-warning btn-round btn-icon mr-1" title="Details">
														<i class="nc-icon nc-single-copy-04"></i>
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
<!-- End of Request Contract -->