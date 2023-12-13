<!-- Start Modal -->
<div class="modal fade custom-modal" id="editModal{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Edit') }} {{ trans('main.Why Business') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-whyUs.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    {{ method_field('patch') }}
                    @csrf
                    <!--title_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.Title') }} {{ trans('main.In Arabic') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Title') }} {{ trans('main.In Arabic') }}" name="title_ar" value="{{ $item->title_ar }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--title_en-->
                    <div class="form-group">
                        <label>{{ trans('main.Title') }} {{ trans('main.In English') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Title') }} {{ trans('main.In English') }}" name="title_en" value="{{ $item->title_en }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--content_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.Content') }} {{ trans('main.In Arabic') }}</label>
                        <textarea class="form-control" placeholder="{{trans('main.Content') }} {{ trans('main.In Arabic') }}" rows="5" name="content_ar">{{ $item->content_ar }}</textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--content_en-->
                    <div class="form-group">
                        <label>{{ trans('main.Content') }} {{ trans('main.In English') }}</label>
                        <textarea class="form-control" placeholder="{{trans('main.Content') }} {{ trans('main.In English') }}" rows="5" name="content_en">{{ $item->content_en }}</textarea>
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
                                <img loading="lazy" class="img-thumbnail m-1" src="{{ asset('public/attachments/whyUs/'.$item->photo) }}" alt="{{ $item->photo }}" style="max-width:200px; max-height:200px; !important">
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
