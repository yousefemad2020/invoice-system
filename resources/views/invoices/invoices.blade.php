@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Empty</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

		<div class="col-xl-12">
			<div class="card">
				<div class="card-header pb-0">
					<div class="d-flex justify-content-between">
						<h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
						<i class="mdi mdi-dots-horizontal text-gray"></i>
					</div>
					<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table text-md-nowrap" id="example1">
							<thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.invoice_number') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.invoice_date') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.due_invoice_date') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.product') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.section') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.discount') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.rate_vat') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.value_vat') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.total') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('invoice_translate.status') }}</th>
                                    <th class="wd-25p border-bottom-0">{{ trans('invoice_translate.notes') }}</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Bella</td>
									<td>Bella</td>
									<td>Chloe</td>
									<td>System Developer</td>
									<td>2018/03/12</td>
									<td>Bella</td>
									<td>Chloe</td>
									<td>System Developer</td>
									<td>2018/03/12</td>

									<td>2018/03/12</td>
									<td>$654,765</td>
									<td>b.Chloe@datatables.net Lorem ipsum dolor sit amet,utibus iusto!</td>
								</tr>



							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{asset('assets/js/table-data.js')}}"></script>
@endsection
