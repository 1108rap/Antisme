<div class="row">

    <!-- Summary Report -->
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header text-center">
                <h4 class="card-title">Summary of Outcome</h4>
                <p class="description">Your Summary Income will Show in This section</p>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card card-stats text-center">
                            <div class="card-body">
                                <a class="card-category">Principal Repayment</a>
                                <br>
                                <small class="description">(Need Payment)</small>
                                <hr>
                            </div>
                            <div class="card-footer">
                                <a class="description">Rp. 0</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-stats text-center">
                            <div class="card-body">
                                <a class="card-category">Cost For Employee Salary</a>
                                <br>
                                <small class="description">(Total Cost)</small>
                                <hr>
                            </div>
                            <div class="card-footer">
                                <a class="description">Rp. 0</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Summary Report -->

    <!-- Report -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h4 class="card-title">Finance Report</h4>
                <a class="description">Reported Your Income From Bills</a>
            </div>
            <div class="card-body">
                <div class="table-hover ">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Contract ID</th>
                                <th>Employee Name</th>
                                <th>Bills</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if($Report->num_rows() > 0) {?>
                            <?php foreach($Report->result() as $key => $data) {?>
                             <tr class="description">
                                <td><?=$data->Contract_ID?></td>
                                <td><?=$data->EmployeeName?></td>
                                <td>Rp. <?=number_format($data->Bills != null ? $data->Bills : 0)?></td>
                                <td><?=$data->Status?></td>
                                <td class="text-center">
                                    <button class="btn btn-sm btn-round btn-icon btn-outline-success" title="Details">
                                        <i class="nc-icon nc-single-copy-04"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php }?>
                        <?php } else {?>
                            <tr class="description text-center">
                                <td colspan="5"><p>No Data Reported</p></td>
                            </tr>
                        <?php }?>

                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Report -->

</div>