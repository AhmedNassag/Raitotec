<!-- Start Modal -->
<div class="modal fade custom-modal" id="addModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Add') }} {{ trans('main.Service Step') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-serviceStep.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <!--content_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.Content') }} {{ trans('main.In Arabic') }}</label>
                        <textarea class="form-control" id="store_content_ar" placeholder="{{trans('main.Content') }} {{ trans('main.In Arabic') }}" rows="5" name="content_ar"></textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--content_en-->
                    <div class="form-group">
                        <label>{{ trans('main.Content') }} {{ trans('main.In English') }}</label>
                        <textarea class="form-control" id="store_content_en" placeholder="{{trans('main.Content') }} {{ trans('main.In English') }}" rows="5" name="content_en"></textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--service_id-->
                    <div class="form-group">
                        <label>{{ trans('main.Service') }}</label>
                        <select class="form-control form-select" name="service_id">
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->first_title }}</option>                                
                            @endforeach
                        </select>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--photo-->
                    <div class="form-group">
                        <label>{{ trans('main.Photo') }}</label>
                        <input type="file" class="form-control photo" name="photo" value="{{ old('photo') }}" placeholder="{{ trans('main.Photo') }}">
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