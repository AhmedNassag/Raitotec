<!-- Start Modal -->
<div class="modal fade custom-modal" id="addModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Add') }} {{ trans('main.Service') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-service.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <!--first_title_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}</label>
                        <input type="text" class="form-control" name="first_title_ar" value="{{ old('first_title_ar') }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--first_content_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.First Content') }} {{ trans('main.In Arabic') }}</label>
                        <textarea class="form-control" id="store_first_content_ar" placeholder="{{trans('main.First Content') }} {{ trans('main.In Arabic') }}" rows="5" name="first_content_ar"></textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--first_title_en-->
                    <div class="form-group">
                        <label>{{ trans('main.First Title') }} {{ trans('main.In English') }}</label>
                        <input type="text" class="form-control" name="first_title_en" value="{{ old('first_title_en') }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In English') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--first_content_en-->
                    <div class="form-group">
                        <label>{{ trans('main.First Content') }} {{ trans('main.In English') }}</label>
                        <textarea class="form-control" id="store_first_content_en" placeholder="{{trans('main.First Content') }} {{ trans('main.In English') }}" rows="5" name="first_content_en"></textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--second_title_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.Second Title') }} {{ trans('main.In Arabic') }}</label>
                        <input type="text" class="form-control" name="second_title_ar" value="{{ old('second_title_ar') }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--second_content_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.Second Content') }} {{ trans('main.In Arabic') }}</label>
                        <textarea class="form-control" id="store_second_content_ar" placeholder="{{trans('main.Second Content') }} {{ trans('main.In Arabic') }}" rows="5" name="second_content_ar"></textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--second_title_en-->
                    <div class="form-group">
                        <label>{{ trans('main.Second Title') }} {{ trans('main.In English') }}</label>
                        <input type="text" class="form-control" name="second_title_en" value="{{ old('second_title_en') }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In English') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--second_content_en-->
                    <div class="form-group">
                        <label>{{ trans('main.Second Content') }} {{ trans('main.In English') }}</label>
                        <textarea class="form-control" id="store_second_content_en" placeholder="{{trans('main.Second Content') }} {{ trans('main.In English') }}" rows="5" name="second_content_en"></textarea>
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