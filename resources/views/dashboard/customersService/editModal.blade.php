<!-- Start Modal -->
<div class="modal fade custom-modal" id="editModal{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Edit') }} {{ trans('main.CustomerService') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('customersService.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <!-- whatsapp -->
                    <div class="form-group">
                        <label>{{ trans('main.Whatsapp') }}</label>
                        <input class="form-control" type="text" name="whatsapp" placeholder="{{ trans('main.Whatsapp') }}"  value="{{ $item->whatsapp }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- phone -->
                    <div class="form-group">
                        <label>{{ trans('main.Phone') }}</label>
                        <input class="form-control" type="text" name="phone" placeholder="{{ trans('main.Phone') }}"  value="{{ $item->phone }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- id -->
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="id" value="{{ $item->id }}">
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
