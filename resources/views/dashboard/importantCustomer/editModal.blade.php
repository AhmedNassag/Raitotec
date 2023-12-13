<!-- Start Modal -->
<div class="modal fade custom-modal" id="editModal{{ $item->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">{{ trans('main.Edit') }} {{ trans('main.Important Customer') }}</h4>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>

            <div class="modal-body">
                <form action="{{ route('dashboard-importantCustomer.update', 'test') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                    {{ method_field('patch') }}
                    @csrf
                    <!-- photo -->
                    <div class="form-group">
                        <label>{{ trans('main.Photo') }} :</label>
                        <input class="form-control" type="file" name="photo" accept="image/*" data-height="70" value="{{ $item->photo }}"/>
                        @if($item->photo)
                        <div class="row">
                            <div class="col-12">
                                <img loading="lazy" class="img-thumbnail m-1" src="{{ asset('public/attachments/importantCustomer/'.$item->photo) }}" alt="{{ $item->photo }}" height="100" width="100">
                            </div>
                        </div>
                        @endif
                    </div>
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
