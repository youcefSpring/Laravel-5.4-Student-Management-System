<div class="modal fade" id="shift-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">New Shift</h4>
            </div>
            <form action="{{ route('postInsertShift') }}" method="POST" id="form_shift_create">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <input required autocomplete="off" autofocus type="text" name="shift" id="shift" class="form-control" placeholder="Shift"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-save-shift" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>