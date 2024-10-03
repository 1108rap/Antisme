<div class="row">

    <!-- Summary Report -->
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header text-center">
                <h4 class="card-title">Summary of Income</h4>
                <p class="description">Your Summary Income will Show in This section</p>
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card card-stats text-center">
                            <div class="card-body">
                                <p class="card-category">Revenue of Contract</p>
                                <hr>
                            </div>
                            <div class="card-footer">
                                <a class="description">Rp. <?=number_format($TotalRevenue->Revenue)?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats text-center">
                            <div class="card-body">
                                <p class="card-category">Cost For Employee Salary</p>
                                <hr>
                            </div>
                            <div class="card-footer">
                                <a class="description">Rp. <?=number_format($SalaryEmp->CostEmployee)?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-stats text-center">
                            <div class="card-body">
                                <p class="card-category">Administrative Cost</p>
                                <hr>
                            </div>
                            <div class="card-footer">
                                <a class="description">Rp. <?=number_format($AdmCost->Administrative)?></a>
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
                                <th>
                                    Contract ID
                                </th>
                                <th>
                                    Bills
                                </th>
                                <th>
                                    Employee Salary
                                </th>
                                <th>
                                    Administrative Cost
                                </th>
                                <th class="text-right">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if($Report->num_rows() > 0) {?>
                        <?php foreach($Report->result() as $key => $data) {?>
                            <tr class="description">
                                <td><?=$data->Contract_ID?></td>
                                <td>Rp. <?=number_format($data->Bills)?></td>
                                <td>Rp. <?=number_format($data->Employee_Cost)?></td>
                                <td>Rp. <?=number_format($data->Administrative_Cost)?></td>
                                <td class="text-right">
                                    <button class="btn btn-sm btn-round btn-icon btn-outline-success" title="Details">
                                        <i class="nc-icon nc-single-copy-04"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php }?>
                        <?php } else {?>
                            <tr class="description text-center">
                                <td colspan="5"><p>No Entries Data</p></td>
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