<div class="modal fade" id="academic-year-show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Academic Year</h4>
            </div>
            <form action="{{ route('postInsertAcademic') }}" method="POST" id="form_academic_year_create">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <input required type="text" name="academic" id="new_academic_year" class="form-control" placeholder="2017-2018 for example" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success btn-save-academic" type="submit">Save</button>
                </div>
            </form>
            <div class="errors alert alert-danger hidden"></div>
        </div>
    </div>
</div>