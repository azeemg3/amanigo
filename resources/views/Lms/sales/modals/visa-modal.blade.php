<div class="modal" id="visa-modal">
    <div class="modal-dialog modal-xl">
        <form id="visa-form">
            <input type="hidden" name="SID" value="0">
            <input type="hidden" name="id" value="0">
            <input type="hidden" name="leadID" value="{{ $result[0]->id }}">
            <input type="hidden" name="account_code" value="{{ $result[0]->ledger }}">
            <div class="modal-content rounded-0">
                <!-- Modal Header -->
                <div class="modal-header rounded-0 bg-gradient-warning">
                    <h5 class="modal-title">Visa Details</h5>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Inv Date*</label>
                            <input name="inv_date" class="form-control form-control-sm date" placeholder="Invice Date" value="{{ \App\Helpers\CommonHelper::current_date() }}">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Due Date*</label>
                            <input name="due_date" class="form-control form-control-sm date" placeholder="Due Date" value="{{ \App\Helpers\CommonHelper::current_date() }}">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Payment Type</label>
                            <select name="payment_type" class="form-control form-control-sm">
                                {!! App\Helpers\Account::payment_type() !!}
                            </select>
                        </div>
                        <!--col-->
                        <div class="form-group col-md-6">
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
                            <label for="exampleInputEmail1">Visa Type</label>
                            <select name="visa_type" class="form-control form-control-sm select2">
                                {!! App\Helpers\CommonHelper::visa_type() !!}
                            </select>
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label>Visa No.</label>
                            <input name="visa_no" type="text" class="form-control form-control-sm" placeholder="Visa Number">
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Visa Country</label>
                            <select name="visa_country" class="form-control form-control-sm select2">
                                {!! App\Models\Country::dropdown() !!}
                            </select>
                        </div>
                        <!--col-->
                        <div class="form-group col-md-2">
                            <label>Visa Rate</label>
                            <input type="text" name="receiveable" class="form-control form-control-sm" placeholder="Visa Rate">
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
                    </div>
                    <!-- Modal footer -->
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-xs" onclick="save_rec('{{ route('lead_visa.store') }}','visa-form','visa')">Submit</button>
                        <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal" onclick="close_form(3)">Close</button>
                    </div>
                    <div class="modal-footer">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="table-active">
                                    <th>#</th>
                                    <th>passport</th>
                                    <th>Pax Name</th>
                                    <th>Visa No</th>
                                    <th>Visa Type</th>
                                    <th>Visa Country</th>
                                    <th>Receiveable</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="get_visa_invDetails"></tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>

</div>