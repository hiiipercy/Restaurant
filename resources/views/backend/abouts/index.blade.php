@extends('backend.layouts.app')
@section('title', $siteTitle)
@push('styles')

@endpush
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h4 class="d-flex my-0 align-items-center justify-content-between">About
                    <a href="{{ route('app.index') }}" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Back</a>
                </h4>
            </div>
            <div class="box-body">
                <form id="store_or_update_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="update_id" id="update_id" value="{{ $about->id ?? '' }}" >
                    <x-form.inputbox name="title" labelName="Title" value="{{ $about->title ?? '' }}" required="required"/>
                    <x-form.textarea class="summernote form-control" name="description" labelName="Description" id="description_summernote" rows="4" cols="50" value="{!! $about->description ?? '' !!}" required="required"/>
                    <x-form.inputbox name="video_url" labelName="Video Url" value="{{ $about->video_url ?? '' }}" placeholder="https://example.com" required="required"/>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input name="image" id="image" type="file" class="form-control form-control-sm">
                        <p class="optional_text mb-2 bg-info">File Type: jpg,jpeg,png</p>
                        @isset($about)
                            <img src="{{ asset('uploads/'.ABOUT_AVATAR_PATH.$about->image) }}" style="height:40px; width:60px;" class="img-thumbnail" alt="">
                        @endisset
                        <input type="hidden" name="old_image" id="old_image" value="{{ $about->image ?? '' }}">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="save-btn">Save</button>
            </div>
        </div>
    </div>
</div>


{{-- @include('backend.abouts.update_or_store') --}}
@endsection
@push('scripts')
    <script>

        // save 
        $(document).on('click', '#save-btn', function () {
            var form_data = document.getElementById('store_or_update_form');
            var form = new FormData(form_data);
            let url = "{{ route('app.abouts.update-or-store') }}";
            let id = $('#update_id').val();
            let method;
            if (id) {
                method = 'update';
            } else {
                method = 'add';
            }
            $.ajax({
                url: url,
                type: "POST",
                data: form,
                dataType: "JSON",
                contentType: false,
                processData: false,
                cache: false,
                beforeSend: function(){
                    $('#save-btn span').addClass('spinner-border spinner-border-sm text-light');
                },
                complete: function(){
                    $('#save-btn span').removeClass('spinner-border spinner-border-sm text-light');
                },
                success: function (data) {
                    $('#store_or_update_form').find('.is-invalid').removeClass('is-invalid');
                    $('#store_or_update_form').find('.error').remove();
                    if (data.status == false) {
                        $.each(data.errors, function (key, value) {
                            $('#store_or_update_form #' + key).addClass('is-invalid');
                            $('#store_or_update_form #' + key).parent().append('<small class="text-danger d-block error">'+value+'</small>');
                        });
                    } else {
                        notification(data.status, data.message);
                        if (data.status == 'success') {
                            if (method == 'update') {
                                table.ajax.reload(null, false);
                            } else {
                                table.ajax.reload();
                            }
                            // $('#store_or_update_modal').modal('hide');
                        }
                    }

                },
                error: function (xhr, ajaxOption, thrownError) {
                    console.log(thrownError + '\r\n' + xhr.statusText + '\r\n' + xhr.responseText);
                }
            });
        });
    </script>
@endpush
