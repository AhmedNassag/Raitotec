<!-- Start Modal -->
<div class="modal fade custom-modal" id="addModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Add') }} {{ trans('main.Program Package') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-programPackage.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
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
                    <!--monthly_price-->
                    <div class="form-group">
                        <label>{{ trans('main.Monthly Price') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Monthly Price') }}" name="monthly_price" value="{{ old('monthly_price') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--annually_price-->
                    <div class="form-group">
                        <label>{{ trans('main.Annually Price') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Annually Price') }}" name="annually_price" value="{{ old('annually_price') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--program_id-->
                    <div class="form-group">
                        <label>{{ trans('main.Program') }}</label>
                        <select class="form-control form-select" name="program_id">
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->first_title }}</option>                                
                            @endforeach
                        </select>
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