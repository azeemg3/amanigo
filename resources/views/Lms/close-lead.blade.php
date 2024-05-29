<div class="modal" id="close-lead-modal">
    <div class="modal-dialog">
        <form id="close-lead-form">
            <input type="hidden" name="leadId" value="{{ $result[0]->id }}">
            <div class="modal-content rounded-0">
                <!-- Modal Header -->
                <div class="modal-header rounded-0 bg-dark">
                    <h5 class="modal-title">Close Lead</h5>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Close Status</label>
                            <select class="form-control form-control-sm" name="status" id="close-action">
                                <option value="4">Unsuccessfull</option>
                                <option value="3">Successfull</option>
                            </select>
                        </div>
                        <!--col-->
                    </div>
                    <!--r0w-->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="notes" id="lead_reason" placeholder="Unsuccessfull Reason...."></textarea>
                        </div>
                    </div>
                    <!--row-->
                    <!-- Modal footer -->
                    <div class="clearfix"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-xs" onclick="close_lead()">Submit</button>
                        <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</div>
