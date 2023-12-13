<?php $page="Business";?>

@extends('layouts.master')


@section('content')
	<!-- Page Header -->
	<div class="page-header">
		<div class="row align-items-center">
			<div class="col">
                <h3 class="page-title">{{ trans('main.Messages') }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ trans('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ trans('main.Messages') }}</li>
                </ul>
            </div>
			<div class="col-auto">
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
    <div class="card filter-card" id="filter_inputs" @if($name || $email || $phone || $service_id || $from_date || $to_date) style="display:block" @endif>
        <div class="card-body pb-0">
            <form action="{{ route('dashboard-message.index') }}" method="get">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.Name') }}</label>
                            <input class="form-control" type="text" name="name" value="{{ $name }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.Email') }}</label>
                            <input class="form-control" type="text" name="email" value="{{ $email }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.Phone') }}</label>
                            <input class="form-control" type="text" name="phone" value="{{ $phone }}">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group">
                            <label>{{ trans('main.Service') }}</label>
                            <select class="form-control form-select" name="service_id">
								<option value="">{{ trans('main.All') }}</option>  
								@foreach ($services as $service)
									<option value="{{ $service->id }}" {{ $service->id == $service_id ? 'selected' : '' }}>{{ $service->first_title }}</option>                                
								@endforeach
							</select>
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
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table id="example1" class="table table-stripped">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">{{ trans('main.Name') }}</th>
									<th class="text-center">{{ trans('main.Email') }}</th>
									<th class="text-center">{{ trans('main.Phone') }}</th>
									<th class="text-center">{{ trans('main.Service') }}</th>	
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
									<td class="text-center">{{ $item->name}}</td>
									<td class="text-center">{{ $item->email}}</td>
									<td class="text-center">{{ $item->phone}}</td>
									<td class="text-center">{{ $item->service->first_title}}</td>
									<td class="text-center">
										<button type="button" class="btn btn-sm btn-info mr-1" data-bs-toggle="modal" data-bs-target="#showModal{{ $item->id }}" title="{{ trans('main.Show') }}"><i class="far fa-eye"></i></button>
										<button type="button" class="btn btn-sm btn-danger mr-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}" title="{{ trans('main.Delete') }}"><i class="far fa-trash-alt"></i></button>
									</td>
								</tr>
								@include('dashboard.message.showModal')
								@include('dashboard.message.deleteModal')
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
        @include('dashboard.message.deleteSelectedModal')		
	</div>
@endsection