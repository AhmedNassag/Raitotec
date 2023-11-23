<?php $page="categories";?>

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
        {{ trans('main.Categories') }}
    @stop
@endsection



@section('content')
            <!-- validationNotify -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- success Notify -->
            @if (session()->has('success'))
            <script id="successNotify">
                window.onload = function() {
                    notif({
                        msg: "تمت العملية بنجاح",
                        type: "success"
                    })
                }
            </script>
            @endif

            <!-- error Notify -->
            @if (session()->has('error'))
            <script id="errorNotify">
                window.onload = function() {
                    notif({
                        msg: "لقد حدث خطأ.. برجاء المحاولة مرة أخرى!",
                        type: "error"
                    })
                }
            </script>
            @endif

            <!-- canNotDeleted Notify -->
            @if (session()->has('canNotDeleted'))
            <script id="canNotDeleted">
                window.onload = function() {
                    notif({
                        msg: "لا يمكن الحذف لوجود بيانات أخرى مرتبطة بها..!",
                        type: "error"
                    })
                }
            </script>
            @endif
            

            <!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">{{ trans('main.Categories') }}</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('main.Dashboard') }}</a></li>
                                    <li class="breadcrumb-item active">{{ trans('main.Categories') }}</li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#addModal">
                                    <i class="fas fa-plus"></i>
                                </button>
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
                    <div class="card filter-card" id="filter_inputs" @if($name || $from_date || $to_date) style="display:block" @endif>
                        <div class="card-body pb-0">
                            <form action="{{ route('category.index') }}" method="get">
                                <div class="row filter-row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label>{{ trans('main.Name') }}</label>
                                            <input class="form-control" type="text" name="name" value="{{ $name }}">
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
                                                            @if($data->count() > 0)
                                                            <input class="box1 mr-1" name="select_all" id="example-select-all" type="checkbox" onclick="CheckAll('box1', this)"  oninput="showBtnDeleteSelected()">
                                                            @endif
                                                            #
                                                        </th>
                                                        <th class="text-center">{{ trans('main.Name') }}</th>
                                                        <th class="text-center">{{ trans('main.Photo') }}</th>	
                                                        <th class="text-center">{{ trans('main.Actions') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($data->count() > 0)
                                                    <?php $i = 0; ?>
                                                    @foreach ($data as $item)
                                                    <?php $i++; ?>
                                                    <tr>
                                                        <td class="text-center notPrint">
                                                            <input id="delete_selected_input" type="checkbox" value="{{ $item->id }}" class="box1 mr-1" oninput="showBtnDeleteSelected()">
                                                            {{ $i }}
                                                        </td>
                                                        <td class="text-center">{{ $item->name}}</td>
                                                        <td class="text-center notPrint">
                                                            @if($item->photo)
                                                                <img class="mb-1" src="{{ asset('attachments/category/'.$item->photo) }}" alt="{{ $item->photo }}" height="50" width="70">
                                                                <br>
                                                                <a class="btn btn-outline-success btn-sm" href="{{ url('show_file') }}/category/{{ $item->photo }}" role="button"><i class="fas fa-eye"></i></a>
                                                                <a class="btn btn-outline-info btn-sm" href="{{ url('download_file') }}/category/{{ $item->photo }}" role="button"><i class="fas fa-download"></i></a>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-sm btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}" title="{{ trans('main.Edit') }}"><i class="far fa-edit"></i></button>
                                                            <button type="button" class="deleteBtn btn btn-sm btn-danger" value="{{ $item->id }}"><i class="far fa-trash-alt"></i></button>                                                        </td>
                                                    </tr>
                                                    @include('dashboard.category.editModal')
                                                    @endforeach
                                                    @else
                                                    <tr>
                                                        <th class="text-center" colspan="4">
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
                        @include('dashboard.category.addModal')
                        @include('dashboard.category.deleteModal')
                        @include('dashboard.category.deleteSelectedModal')		
                    </div>	
                </div>
            </div>			
        </div>
        <!-- /Page Wrapper -->
	</div>
</div>
<!-- /Main Wrapper -->
	
@endsection



@section('js')
    <script>
        $(document).ready(function () {

            //delete
            $(document).on('click','.deleteBtn',function(e){
                e.preventDefault();
                var id = $(this).val();
                $('#delete_id').val(id);
                $('#delete_error_list').html("");
                $('#delete').modal('show');
            });
            $(document).on('click','.destroyBtn',function(e){
                e.preventDefault();
                $(this).text('Deleting');
                var id = $('#delete_id').val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "delete",
                    url: "/admin/category/destroy/"+id,
                    success:function(response) {
                        if(response.status == false) {
                            $('#delete_error_list').html("");
                            $('#delete_error_list').addClass('alert alert-danger');
                            $("#delete_error_list").append("<li>"+ response.messages +"</li>");
                        concole.log('ok');
                        } else {
                            $('#delete_error_list').html("");
                            $('#delete').modal('hide');
                            $(this).text('Deleting');
                            location.reload();
                        }
                    },
                    error:function(reject){},
                });
            });

        });
    </script>
@endsection
