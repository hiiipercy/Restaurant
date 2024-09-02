<div id="store_or_update_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close shadow-none" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body">
                <form id="store_or_update_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_id" id="update_id">
                    <x-form.inputbox name="title" labelName="Title" required="required"/>
                    <x-form.textarea name="description" labelName="Description" required="required"/>

                    <div class="form-group">
                        <label for="image" class="required">Image</label>
                        <input name="image" id="image" type="file" class="form-control form-control-sm" >
                        <p class="optional_text mb-0">File Type: jpg,jpeg,png,pdf,docx</p>
                        <input type="hidden" name="old_image" id="old_image">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" id="save-btn"></button>
            </div>
        </div>
    </div>
</div>