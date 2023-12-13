<?php $page="customerServices";?>

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
        {{ trans('main.CustomerServices') }}
    @stop
@endsection



@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">{{ trans('main.Company Informations') }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ trans('main.Company Informations') }}</li>
                </ul>
            </div>
            <div class="col-auto">
                @if($data->count() == 0)
                <button type="button" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#addModal" title="{{ trans('main.Add') }}">
                    <i class="fas fa-plus"></i>
                </button>
                @else
                <button type="button" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#editModal" title="{{ trans('main.Edit') }}">
                    <i class="far fa-edit"></i>
                </button>
                @endif
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
    <div class="card filter-card" id="filter_inputs" @if($brief || $address || $email || $phone || $whatsapp || $twitter || $facebook || $youtube || $instagram || $linkedin || $snapchat || $googleplay || $appstore || $from_date || $to_date) style="display:block" @endif>
        <div class="card-body pb-0">
            <form action="{{ route('dashboard-companyInformation.index') }}" method="get">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.Brief') }}</label>
                            <input class="form-control" type="text" name="brief" value="{{ $brief }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Address') }}</label>
                            <input class="form-control" type="text" name="address" value="{{ $address }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Email') }}</label>
                            <input class="form-control" type="text" name="email" value="{{ $email }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Phone') }}</label>
                            <input class="form-control" type="text" name="phone" value="{{ $phone }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Whatsapp') }}</label>
                            <input class="form-control" type="text" name="whatsapp" value="{{ $whatsapp }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Twitter') }}</label>
                            <input class="form-control" type="text" name="twitter" value="{{ $twitter }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Facebook') }}</label>
                            <input class="form-control" type="text" name="facebook" value="{{ $facebook }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Youtube') }}</label>
                            <input class="form-control" type="text" name="youtube" value="{{ $youtube }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Instagram') }}</label>
                            <input class="form-control" type="text" name="instagram" value="{{ $instagram }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Linkedin') }}</label>
                            <input class="form-control" type="text" name="linkedin" value="{{ $linkedin }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Snapchat') }}</label>
                            <input class="form-control" type="text" name="snapchat" value="{{ $snapchat }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Googleplay') }}</label>
                            <input class="form-control" type="text" name="googleplay" value="{{ $googleplay }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('main.Appstore') }}</label>
                            <input class="form-control" type="text" name="appstore" value="{{ $appstore }}">
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


    <!--start fetch data-->
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table id="example1" class="table table-stripped">
                                @if($data->count() > 0)
                                @foreach ($data as $key=>$item)
                                    <tr>
                                        <th>{{ trans('main.Photo') }}:</th>
                                        <td><img loading="lazy" class="mb-1" src="{{ asset('public/attachments/companyInformation/'.$item->photo) }}" alt="{{ $item->photo }}" height="50" width="70"></td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Brief') }}:</th>
                                        <td>{{ $item->brief}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Address') }}:</th>
                                        <td>{{ $item->address}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Email') }}:</th>
                                        <td>{{ $item->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Phone') }}:</th>
                                        <td>{{ $item->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Whatsapp') }}:</th>
                                        <td>{{ $item->whatsapp}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Twitter') }}:</th>
                                        <td>{{ $item->twitter}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Facebook') }}:</th>
                                        <td>{{ $item->facebook}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Youtube') }}:</th>
                                        <td>{{ $item->youtube}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Instagram') }}:</th>
                                        <td>{{ $item->instagram}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Linkedin') }}:</th>
                                        <td>{{ $item->linkedin}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Snapchat') }}:</th>
                                        <td>{{ $item->snapchat}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Googleplay') }}:</th>
                                        <td>{{ $item->googleplay}}</td>
                                    </tr>
                                    <tr>
                                        <th>{{ trans('main.Appstore') }}:</th>
                                        <td>{{ $item->appstore}}</td>
                                    </tr>
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
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.companyInformation.addModal')
        @include('dashboard.companyInformation.editModal')		
    </div>
    <!--end fetch data-->
	
@endsection



@section('js')

@endsection
