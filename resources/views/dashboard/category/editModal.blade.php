<!-- Start Modal -->
<div class="modal fade custom-modal" id="editModal{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Edit') }} {{ trans('main.Category') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('category.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <!-- name -->
                    <div class="form-group">
                        <label>{{ trans('main.Name') }}</label>
                        <input class="form-control" type="text" name="name" placeholder="{{ trans('main.Name') }}"  value="{{ $item->name }}" required>
                        <div class="valid-feedback">{{ trans('main.Looks Good') }}</div>
                        <div class="invalid-feedback">{{ trans('main.Error Here')}}</div>
                    </div>
                    <!-- photo -->
                    <div class="form-group">
                    <label>{{ trans('main.Photo') }} :</label>
                    <input class="form-control" type="file" name="photo" accept="image/*" data-height="70" value="{{ $item->photo }}"/>
                    @if($item->photo)
                    <div class="row">
                        <div class="col-12">
                            <img class="img-thumbnail m-1" src="{{ asset('public/attachments/category/'.$item->photo) }}" alt="{{ $item->photo }}" height="100" width="100">
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
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
