<!-- Start Modal -->
<div class="modal fade custom-modal" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Add') }} {{ trans('main.CustomersService') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('customersService.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <!-- whatsapp -->
                    <div class="form-group">
                        <label>{{ trans('main.Whatsapp') }}</label>
                        <input type="text" class="form-control name" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="{{ trans('main.Whatsapp') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- phone -->
                    <div class="form-group">
                        <label>{{ trans('main.Phone') }}</label>
                        <input type="text" class="form-control photo" name="phone" value="{{ old('phone') }}" placeholder="{{ trans('main.Phone') }}">
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ trans('main.Confirm') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->