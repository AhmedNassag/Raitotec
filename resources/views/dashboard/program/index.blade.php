<?php $page="Programs";?>

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
        {{ trans('main.Programs') }}
    @stop
@endsection



@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">{{ trans('main.Programs') }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ trans('main.Programs') }}</li>
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
    <div class="card filter-card" id="filter_inputs" @if($first_title || /*$second_title ||*/ $from_date || $to_date) style="display:block" @endif>
        <div class="card-body pb-0">
            <form action="{{ route('dashboard-program.index') }}" method="get">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.First Title') }}</label>
                            <input class="form-control" type="text" name="first_title" value="{{ $first_title }}">
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.Second Title') }}</label>
                            <input class="form-control" type="text" name="second_title" value="{{ $second_title }}">
                        </div>
                    </div> --}}
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
                                        {{-- <th class="text-center">{{ trans('main.Second Title') }}</th> --}}
                                        <th class="text-center">{{ trans('main.Photo') }}</th>	
                                        <th class="text-center">{{ trans('main.Actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($data->count() > 0)
                                    @foreach ($data as $key=>$item)
                                    <tr>
                                        <td class="text-center notPrint">
                                            <input id="delete_selected_input" type="checkbox" value="{{ $item->id }}" class="box1 mr-1" oninput="showBtnDeleteSelected()">
                                            {{ $key+1 }}
                                        </td>
                                        <td class="text-center">{{ $item->first_title }}</td>
                                        {{-- <td class="text-center">{{ $item->second_title }}</td> --}}
                                        <td class="text-center notPrint">
                                            @if($item->photo)
                                                <img loading="lazy" class="mb-1" src="{{ asset('public/attachments/program/'.$item->photo) }}" alt="{{ $item->photo }}" height="50" width="70">
                                                <br>
                                                <a class="btn btn-outline-success btn-sm" href="{{ url('show_file') }}/program/{{ $item->photo }}" role="button"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-outline-info btn-sm" href="{{ url('download_file') }}/program/{{ $item->photo }}" role="button"><i class="fas fa-download"></i></a>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-secondary mr-1" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}" title="{{ trans('main.Edit') }}"><i class="far fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-danger mr-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}" title="{{ trans('main.Delete') }}"><i class="far fa-trash-alt"></i></button>
                                            <a href="{{ route('dashboard-program.show', $item->id) }}" role="button"class="btn btn-sm btn-info" title="{{ trans('main.Show') }}"><i class="far fa-eye"></i></a>
                                        </td>
                                    </tr>
                                    @include('dashboard.program.editModal')
                                    @include('dashboard.program.deleteModal')
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
        @include('dashboard.program.addModal')
        @include('dashboard.program.deleteSelectedModal')		
    </div>
	
@endsection
