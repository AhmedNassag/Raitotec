<!-- Start Modal -->
<div class="modal fade custom-modal" id="editModal{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Edit') }} {{ trans('main.Slider') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-aboutUs.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    {{ method_field('patch') }}
                    @csrf
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
                    <!--video-->
                    <div class="form-group">
                        <label>{{ trans('main.Video') }} :</label>
                        <input class="form-control" type="text" name="video" data-height="120" value="{{ $item->video }}" />
                        {{-- @if($item->video)
                        <div class="row">
                            <div class="col-12">
                                <video loop="" id="myVideo" poster="{{ asset('public/attachments/aboutUs/'.$item->video) }}" style="object-fit:cover; max-width:200px; max-height:200px; !important">
                                    <source src="{{ asset('public/attachments/aboutUs/'.$item->video) }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        @endif --}}
                    </div>
                    <!-- id -->
                    <div class="form-group">
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
