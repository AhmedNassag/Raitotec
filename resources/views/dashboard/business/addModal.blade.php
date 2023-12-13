<!-- Start Modal -->
<div class="modal fade custom-modal" id="addModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Add') }} {{ trans('main.Brief') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-business.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <!--title_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.Title') }} {{ trans('main.In Arabic') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Title') }} {{ trans('main.In Arabic') }}" name="title_ar" value="{{ old('title_ar') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--title_en-->
                    <div class="form-group">
                        <label>{{ trans('main.Title') }} {{ trans('main.In English') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Title') }} {{ trans('main.In English') }}" name="title_en" value="{{ old('title_en') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- photos -->
                    <div class="form-group">
                        <label>{{ trans('main.Photo') }}</label>
                        {{-- <input type="file" class="form-control" name="photos[]" value="{{ old('photo') }}" placeholder="{{ trans('main.Photo') }}" multiple> --}}
                        <input type="file" name="photos[]" class="dropify" accept="image/*" multiple required/>
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