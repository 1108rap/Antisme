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
                    <div class="col-md-4">
                        <div class="card card-stats text-center">
                            <div class="card-body">
                                <a class="card-category">Cost For Employee Salary</a>
                                <br>
                                <small class="description">(Total Income)</small>
                                <hr>
                            </div>
                            <div class="card-footer">
                            <div class="stats">
                            <i class="fa fa-money"></i>
                            Rp. <?=$Report != null ? number_format($Report->TotalIncome) : 'No Income'?>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Summary Report -->


</div>