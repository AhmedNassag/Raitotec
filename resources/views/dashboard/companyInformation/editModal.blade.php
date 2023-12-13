<!-- Start Modal -->
<div class="modal fade custom-modal" id="editModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Edit') }} {{ trans('main.Company Informations') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-companyInformation.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    {{ method_field('patch') }}
                    @csrf
                    <!--brief_ar-->
                    <div class="form-group">
                        <label>{{ trans('main.Brief') }} {{ trans('main.In Arabic') }}</label>
                        <textarea class="form-control" placeholder="{{trans('main.Brief') }} {{ trans('main.In Arabic') }}" rows="5" name="brief_ar">{{ @$item->brief_ar }}</textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--brief_en-->
                    <div class="form-group">
                        <label>{{ trans('main.Brief') }} {{ trans('main.In English') }}</label>
                        <textarea class="form-control" placeholder="{{trans('main.Brief') }} {{ trans('main.In English') }}" rows="5" name="brief_en">{{ @$item->brief_en }}</textarea>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- address_ar -->
                    <div class="form-group">
                        <label>{{ trans('main.Address') }} {{ trans('main.In Arabic') }}</label>
                        <input type="text" class="form-control" name="address_ar" value="{{ @$item->address_ar }}" placeholder="{{ trans('main.Address') }} {{ trans('main.In Arabic') }}">
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- address_en -->
                    <div class="form-group">
                        <label>{{ trans('main.Address') }} {{ trans('main.In English') }}</label>
                        <input type="text" class="form-control" name="address_en" value="{{ @$item->address_en }}" placeholder="{{ trans('main.Address') }} {{ trans('main.In English') }}">
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- email -->
                    <div class="form-group">
                        <label>{{ trans('main.Email') }}</label>
                        <input type="text" class="form-control photo" name="email" value="{{ @$item->email }}" placeholder="{{ trans('main.Email') }}">
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- phone -->
                    <div class="form-group">
                        <label>{{ trans('main.Phone') }}</label>
                        <input type="text" class="form-control photo" name="phone" value="{{ @$item->phone }}" placeholder="{{ trans('main.Phone') }}">
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- whatsapp -->
                    <div class="form-group">
                        <label>{{ trans('main.Whatsapp') }}</label>
                        <input type="text" class="form-control name" name="whatsapp" value="{{ @$item->whatsapp }}" placeholder="{{ trans('main.Whatsapp') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- twitter -->
                    <div class="form-group">
                        <label>{{ trans('main.Twitter') }}</label>
                        <input type="text" class="form-control name" name="twitter" value="{{ @$item->twitter }}" placeholder="{{ trans('main.Twitter') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- facebook -->
                    <div class="form-group">
                        <label>{{ trans('main.Facebook') }}</label>
                        <input type="text" class="form-control name" name="facebook" value="{{ @$item->facebook }}" placeholder="{{ trans('main.Facebook') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- youtube -->
                    <div class="form-group">
                        <label>{{ trans('main.Youtube') }}</label>
                        <input type="text" class="form-control name" name="youtube" value="{{ @$item->youtube }}" placeholder="{{ trans('main.Youtube') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- instagram -->
                    <div class="form-group">
                        <label>{{ trans('main.Instagram') }}</label>
                        <input type="text" class="form-control name" name="instagram" value="{{ @$item->instagram }}" placeholder="{{ trans('main.Instagram') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- linkedin -->
                    <div class="form-group">
                        <label>{{ trans('main.Linkedin') }}</label>
                        <input type="text" class="form-control name" name="linkedin" value="{{ @$item->linkedin }}" placeholder="{{ trans('main.Linkedin') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- snapchat -->
                    <div class="form-group">
                        <label>{{ trans('main.Snapchat') }}</label>
                        <input type="text" class="form-control name" name="snapchat" value="{{ @$item->snapchat }}" placeholder="{{ trans('main.Snapchat') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- googleplay -->
                    <div class="form-group">
                        <label>{{ trans('main.Googleplay') }}</label>
                        <input type="text" class="form-control name" name="googleplay" value="{{ @$item->googleplay }}" placeholder="{{ trans('main.Googleplay') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- appstore -->
                    <div class="form-group">
                        <label>{{ trans('main.Appstore') }}</label>
                        <input type="text" class="form-control name" name="appstore" value="{{ @$item->appstore }}" placeholder="{{ trans('main.Appstore') }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!--photo-->
                    <div class="form-group">
                        <label>{{ trans('main.Photo') }} :</label>
                        <input class="form-control" type="file" name="photo" accept="image/*" data-height="70" value="{{ @$item->photo }}" />
                        @if(@$item->photo)
                        <div class="row">
                            <div class="col-12">
                                <img loading="lazy" class="img-thumbnail m-1" src="{{ asset('public/attachments/companyInformation/'.@$item->photo) }}" alt="{{ @$item->photo }}" style="max-width:200px; max-height:200px; !important">
                            </div>
                        </div>
                        @endif
                    </div>
                    
                    <!-- id -->
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="id" value="{{ @$item->id }}">
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
