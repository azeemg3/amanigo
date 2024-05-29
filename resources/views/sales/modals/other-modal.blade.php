<div class="modal" id="other-modal">
    <div class="modal-dialog modal-xl">
        <form id="other-form">
            <input type="hidden" name="SID" value="0">
            <input type="hidden" name="id" value="0">
            <div class="modal-content rounded-0">
                <!-- Modal Header -->
                <div class="modal-header rounded-0 bg-gradient-warning">
                    <h5 class="modal-title">Other Details</h5>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Inv Date*</label>
                            <input name="inv_date" class="form-control form-control-sm date" placeholder="Invice Date">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Due Date*</label>
                            <input name="due_date" class="form-control form-control-sm date" placeholder="Due Date">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Payment Type</label>
                            <select name="payment_type" class="form-control form-control-sm">
                                {!! App\Helpers\Account::payment_type() !!}
                            </select>
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label>Receiveable/client</label>
                            <select name="ledger" class="form-control form-control-sm select2">
                                <option value="">Select Receiveable</option>
                                {!! App\Models\Accounts\TransactionAccount::client_dd() !!}
                            </select>
                        </div>
                        <!--col-->
                        <div class="form-group col-md-4">
                            <label>Remarks</label>
                            <input type="text" name="remarks" class="form-control form-control-sm" placeholder="Remarks">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Passport*</label>
                            <input name="passport" class="form-control form-control-sm" placeholder="Passport">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Pax Name</label>
                            <input name="pax_name" class="form-control form-control-sm" placeholder="Passenger Name">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Pax Type</label>
                            <select name="pax_type" class="form-control form-control-sm">
                                {!! App\Helpers\CommonHelper::pax_type() !!}
                            </select>
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label>Group No.</label>
                            <input type="text" name="group_no" class="form-control form-control-sm" placeholder="Group No.">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label>Package Details</label>
                            <input type="text" name="pkg_details" class="form-control form-control-sm" placeholder="Package Details">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label>Rate</label>
                            <input type="text" name="rate" onkeyup="other_cal(this)" class="form-control form-control-sm bf" placeholder="Rate">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Currency</label>
                            <select name="currency" class="form-control form-control-sm">
                                <option value="">Pkr</option>
                            </select>
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Currency Rate</label>
                            <input type="text" name="currency_rate" class="form-control form-control-sm" placeholder="Currency Rate">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label>Payable/Vendor</label>
                            <select name="payable_id" class="form-control form-control-sm select2">
                                <option value="">Select Vendor</option>
                                {!! App\Models\Accounts\TransactionAccount::vendor_dd() !!}
                            </select>
                        </div>
                        <!--col-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-dark rounded-0">
                                <div class="card-header rounded-0" style="padding: 5px;">
                                    <h3 class="card-title">Receiveable/Customer:</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" style="padding: 0.5rem;">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Psf</label>
                                                <input type="text" onkeyup="other_cal(this)" name="psf" class="form-control form-control-sm psf" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label>Discount</label>
                                                <input type="text" onkeyup="other_cal(this)" name="discount" class="form-control form-control-sm dis" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Agent Amount</label>
                                                <input type="text" onkeyup="other_cal(this)" name="agent_amount" class="form-control form-control-sm agent_amount" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-sm-3">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Agent:</label>
                                                <select class="form-control form-control-sm" name="agent_id">
                                                    <option value="">Select Agent</option>
                                                    {!! App\Models\Accounts\TransactionAccount::client_dd() !!}
                                                </select>
                                            </div>
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--col-->
                        <div class="col-md-6">
                            <div class="card card-dark rounded-0">
                                <div class="card-header rounded-0" style="padding: 5px;">
                                    <h3 class="card-title">Net Sale:</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body" style="padding: 0.5rem;">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Payable</label>
                                                <input type="text" name="payable" class="form-control form-control-sm payable" placeholder="0.00 %">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label>Receiveable</label>
                                                <input type="text" name="receiveable" class="form-control form-control-sm receiveable" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <!--col-->
                                        <div class="col-sm-4">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <label>Profit</label>
                                                <input type="text" name="profit" class="form-control form-control-sm profit" placeholder="Enter ...">
                                            </div>
                                        </div>
                                        <!--col-->
                                    </div>
                                    <!--row-->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--col-->
                    </div>
                    <!--row-->
                    <!-- Modal footer -->
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-xs" onclick="save_rec('{{ route('acc_other.store') }}','other-form','other')">Submit</button>
                        <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal" onclick="close_form(6)">Close</button>
                    </div>
                    <div class="modal-footer">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="table-active">
                                    <th>#</th>
                                    <th>passport</th>
                                    <th>Pax Name</th>
                                    <th>Pax Type</th>
                                    <th>Details</th>
                                    <th>Receiveable</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="get_other_invDetails"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>