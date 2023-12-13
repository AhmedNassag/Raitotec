<!-- Start Modal -->
<div class="modal fade custom-modal" id="editModal{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Edit') }} {{ trans('main.Sale') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-sale.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    {{ method_field('patch') }}
                    @csrf
                    <!--first_title_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}</label>
                        <input type="text" class="form-control" name="first_title_ar" value="{{ $item->first_title_ar }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In Arabic') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--first_content_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.First Content') }} {{ trans('main.In Arabic') }}</label>
                        <textarea class="form-control" id="update_first_content_ar" placeholder="{{trans('main.First Content') }} {{ trans('main.In Arabic') }}" rows="5" name="first_content_ar">{{ $item->first_content_ar }}</textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--first_title_en-->
                    <div class="form-group">
                        <label>{{ trans('main.First Title') }} {{ trans('main.In English') }}</label>
                        <input type="text" class="form-control" name="first_title_en" value="{{ $item->first_title_en }}" placeholder="{{ trans('main.First Title') }} {{ trans('main.In English') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--first_content_en-->
                    <div class="form-group">
                        <label>{{ trans('main.First Content') }} {{ trans('main.In English') }}</label>
                        <textarea class="form-control" id="update_first_content_en" placeholder="{{trans('main.First Content') }} {{ trans('main.In English') }}" rows="5" name="first_content_en">{{ $item->first_content_en }}</textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--photo-->
                    <div class="form-group">
                        <label>{{ trans('main.Photo') }} :</label>
                        <input class="form-control" type="file" name="photo" accept="image/*" data-height="70" value="{{ $item->photo }}" />
                        @if($item->photo)
                        <div class="row">
                            <div class="col-12">
                                <img loading="lazy" class="img-thumbnail m-1" src="{{ asset('public/attachments/sale/'.$item->photo) }}" alt="{{ $item->photo }}" style="max-width:200px; max-height:200px; !important">
                            </div>
                        </div>
                        @endif
                        <!-- id -->
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="id" value="{{ $item->id }}">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ trans('main.Confirm') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
