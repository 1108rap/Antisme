<!-- Stat -->
	<div class="row justify-content-center">
		<div class="col-lg-3 col-md-6 col-sm-6 text-center">
			<div class="card card-stat">
				<div class="card-body">
					<h5 class="card-title">Waiting for Payment</h5>
					<p class="description"><?=$CounContNeedPayment->CountPayment?> Contract</p>
				</div>
				<div class="card-footer text-center">
					<a href="" class="btn btn-danger btn-sm btn-round">Message</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 text-center">
			<div class="card card-stat">
				<div class="card-body">
					<h5 class="card-title">Waiting for Approval</h5>
					<p class="description"><?=$CounContNeedApproval->CountApproval?> Contract</p>
				</div>
				<div class="card-footer">
					<a href="<?=site_url('Dashboard/#ApprovalContract')?>" class="btn btn-warning btn-sm btn-round">Manage</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-6 text-center">
			<div class="card card-stat">
				<div class="card-body">
					<h5 class="card-title">Contract On Progress</h5>
					<p class="description"><?=$CounContOnProgress->CountProgress?> Contract</p>
				</div>
				<div class="card-footer">
					<a href="" class="btn btn-primary btn-sm btn-round">look</a>
				</div>
			</div>
		</div>
	</div>
<!-- End of Stat -->

<!-- Contract List -->
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">Contract list</h5>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<?php foreach($datcont->result() as $key => $data) {?>
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
												<form action="<?=site_url('Details/contract')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
													<button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Details">
														<i class="nc-icon nc-single-copy-04"></i>
														Details
													</button>
												</form>
												<form action="<?=site_url('Contract/ContractDelt')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
													<input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
													<button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Delete">
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
<!-- End of Contract List -->

<!-- History Contract -->
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
				<h5 class="card-title">History Contract</h5>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<?php foreach($histcont->result() as $key => $data) {?>
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
												<form action="<?=site_url('Details/contract')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
													<button type="submit" class="btn btn-sm btn-outline-success btn-round mr-1" title="Details">
														<i class="nc-icon nc-single-copy-04"></i>
														Details
													</button>
												</form>
												<form action="<?=site_url('Contract/ContractDelt')?>" method="post">
													<input type="hidden" name="identity" value="<?=$data->Contract_ID?>">
													<input type="hidden" name="identityemp" value="<?=$data->Employee_ID?>">
													<button type="submit" class="btn btn-sm btn-outline-danger btn-round btn-icon mr-1" title="Delete">
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
<!-- End of History Contract -->