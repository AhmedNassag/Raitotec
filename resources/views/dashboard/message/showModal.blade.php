<!-- Start Modal -->
<div class="modal fade custom-modal" id="showModal{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Show') }} {{ trans('main.Message') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                    <!--name-->
                    <div class="form-group">
                        <label>{{ trans('main.Name') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Name') }}" name="name" value="{{ $item->name }}" disabled>
                    </div>
                    <!--email-->
                    <div class="form-group">
                        <label>{{ trans('main.Email') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Email') }}" name="email" value="{{ $item->email }}" disabled>
                    </div>
                    <!--phone-->
                    <div class="form-group">
                        <label>{{ trans('main.Phone') }}</label>
                        <input class="form-control" placeholder="{{trans('main.Phone') }}" name="phone" value="{{ $item->phone }}" disabled>
                    </div>
                    <!--service_id-->
                    <div class="form-group">
                        <label>{{ trans('main.Service') }}</label>
                        <select class="form-control form-select" name="service_id" disabled>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}" {{ $service->id == $item->service_id ? 'selected' : '' }}>{{ $service->first_title }}</option>                                
                            @endforeach
                        </select>
                    </div>
                    <!--description-->
                    <div class="form-group">
                        <label>{{ trans('main.Description') }}</label>
                        <textarea class="form-control" placeholder="{{trans('main.Description') }}" rows="5" name="description" disabled>{{ $item->description }}</textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
