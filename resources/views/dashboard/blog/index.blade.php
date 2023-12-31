<?php $page="Blogs";?>

@extends('layouts.master')

@section('css')
    <!-- Print -->
    <style>
        @media print {
            .notPrint {
                display: none;
            }
        }
    </style>
    @section('title')
        {{ trans('main.Blogs') }}
    @stop
    {{-- CKEditor CDN --}}
    {{-- <script src="{{asset('public/assets_admin/ckeditor/ckeditor.js')}}"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script> --}}
    
    
    {{-- TinyMCE CDN --}}
    {{-- <script src="https://cdn.tiny.cloud/1/v4yq4i6en4zh8vs20h02irgqymp1wdjuylc415ab0851wqh2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}

@endsection



@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">{{ trans('main.Blogs') }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ trans('main.Blogs') }}</li>
                </ul>
            </div>
            <div class="col-auto">
                <a href="{{ route('dashboard-blog.create') }}" role="button" class="btn add-button me-2" title="{{ trans('main.Add') }}">
                    <i class="fas fa-plus"></i>
                </a>
                {{-- <button type="button" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#addModal">
                    <i class="fas fa-plus"></i>
                </button> --}}
                <button type="button" class="btn filter-btn me-2" id="filter_search">
                    <i class="fas fa-filter"></i>
                </button>
                <button type="button" class="btn" id="btn_delete_selected" title="{{ trans('main.Delete Selected') }}" style="display:none; width: 42px; height: 42px; justify-content: center; align-items: center; color: #fff; background: red; border: 1px solid red; border-radius: 5px;">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
    <div class="card filter-card" id="filter_inputs" @if($first_title || $second_title || $from_date || $to_date) style="display:block" @endif>
        <div class="card-body pb-0">
            <form action="{{ route('dashboard-blog.index') }}" method="get">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.First Title') }}</label>
                            <input class="form-control" type="text" name="first_title" value="{{ $first_title }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.Second Title') }}</label>
                            <input class="form-control" type="text" name="second_title" value="{{ $second_title }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.From Date') }}</label>
                            <input class="form-control" type="date" name="from_date" value="{{ $from_date }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.To Date') }}</label>
                            <input class="form-control" type="date" name="to_date" value="{{ $to_date }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">{{ trans('main.Search') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /Search Filter -->

    <div class="row">
        <!--start fetch data-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <ul id="edit_error_list"></ul>
                    <ul id="delete_error_list"></ul>
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table id="example1" class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            {{-- @if($data->count() > 0)
                                            <input class="box1 mr-1" name="select_all" id="example-select-all" type="checkbox" onclick="CheckAll('box1', this)"  oninput="showBtnDeleteSelected()">
                                            @endif --}}
                                            #
                                        </th>
                                        <th class="text-center">{{ trans('main.First Title') }}</th>
                                        <th class="text-center">{{ trans('main.Second Title') }}</th>
                                        <th class="text-center">{{ trans('main.Photo') }}</th>	
                                        <th class="text-center">{{ trans('main.Added By') }}</th>	
                                        <th class="text-center">{{ trans('main.Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($data->count() > 0)
                                    @foreach ($data as $key=>$item)
                                    <tr>
                                        <td class="text-center notPrint">
                                            <input id="delete_selected_input" type="checkbox" value="{{ @$item->id }}" class="box1 mr-1" oninput="showBtnDeleteSelected()">
                                            {{ $key+1 }}
                                        </td>
                                        <td class="text-center">{{ @$item->first_title }}</td>
                                        <td class="text-center">{{ @$item->second_title }}</td>
                                        <td class="text-center notPrint">
                                            @if($item->photo)
                                                <img loading="lazy" class="mb-1" src="{{ asset('public/attachments/blog/'.@$item->photo) }}" alt="{{ @$item->photo }}" height="50" width="70">
                                                <br>
                                                <a class="btn btn-outline-success btn-sm" href="{{ url('show_file') }}/blog/{{ @$item->photo }}" role="button"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-outline-info btn-sm" href="{{ url('download_file') }}/blog/{{ @$item->photo }}" role="button"><i class="fas fa-download"></i></a>
                                            @endif
                                        </td>
                                        <td class="text-center">{{ @$item->user->name }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('dashboard-blog.edit', $item->id) }}" role="button" class="btn btn-sm btn-secondary mr-1" title="{{ trans('main.Edit') }}"><i class="far fa-edit"></i></a>
                                            {{-- <button type="button" class="btn btn-sm btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#editModal{{ @$item->id }}" title="{{ trans('main.Edit') }}"><i class="far fa-edit"></i></button> --}}
                                            <button type="button" class="btn btn-sm btn-danger mr-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{ @$item->id }}" title="{{ trans('main.Delete') }}"><i class="far fa-trash-alt"></i></button>
                                            <a href="{{ route('dashboard-blog.show', $item->id) }}" role="button" class="btn btn-sm btn-info" title="{{ trans('main.Show') }}"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    @include('dashboard.blog.editModal')
                                    @include('dashboard.blog.deleteModal')
                                    @endforeach
                                    @else
                                    <tr>
                                        <th class="text-center" colspan="6">
                                            <div class="col mb-3 d-flex">
                                                <div class="card flex-fill">
                                                    <div class="card-body p-3 text-center">
                                                        <p class="card-text f-12">{{ trans('main.No Data Founded') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end fetch data-->
        @include('dashboard.blog.addModal')
        @include('dashboard.blog.deleteSelectedModal')		
    </div>
	
@endsection



@section('js')
    {{-- <script>
        tinymce.init({
        selector: '#store_first_content_ar',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });
        tinymce.init({
        selector: '#store_first_content_en',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });
        tinymce.init({
        selector: '#store_second_content_ar',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });
        tinymce.init({
        selector: '#store_second_content_en',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });

        
        tinymce.init({
        selector: '#update_first_content_ar',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });
        tinymce.init({
        selector: '#update_first_content_en',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });
        tinymce.init({
        selector: '#update_second_content_ar',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });
        tinymce.init({
        selector: '#update_second_content_en',  // Change this selector to your textarea ID
        plugins: 'advlist autolink lists link image charmap print preview anchor',
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | image link',
        height: 500
        });
    </script> --}}


{{-- <script>
    ClassicEditor.create( document.querySelector('#store_first_content_ar' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor.create( document.querySelector('#store_first_content_en' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor.create( document.querySelector('#store_second_content_ar' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor.create( document.querySelector('#store_second_content_en' ) )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor.create( document.querySelector('#update_first_content_ar' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor.create( document.querySelector('#update_first_content_en' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor.create( document.querySelector('#update_second_content_ar' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor.create( document.querySelector('#update_second_content_en' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
@endsection
