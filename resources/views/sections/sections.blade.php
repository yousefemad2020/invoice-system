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

@section('title', trans('settings_translate.sections'))

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">{{ trans('settings_translate.settings') }}</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ trans('settings_translate.sections') }}</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')



    @if (session()->has('edit'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            <strong>{{ session()->get('edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('delete'))
    <div class="alert alert-success alert-dismissable fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>

            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header pb-0 w-25">
                    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal"
                        href="#modaldemo8">{{ trans('settings_translate.add_section') }}</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-5p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('settings_translate.section_name') }}</th>
                                    <th class="wd-15p border-bottom-0">{{ trans('settings_translate.description') }}</th>
                                    <th class="wd-10p border-bottom-0">{{ trans('settings_translate.settings') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections as $section)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $section['section_name'] }}</td>
                                        <td>{{ $section['description'] }}</td>
                                        {{-- <td>{{ $section['created_by'] }}</td> --}}
                                        <td>
                                            <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                data-id="{{ $section->id }}"
                                                data-section_name="{{ $section->section_name }}"
                                                data-description="{{ $section->description }}" data-toggle="modal"
                                                href="#exampleModal2" title="{{ trans('settings_translate.edit') }}"><i
                                                    class="las la-pen"></i></a>

                                            <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
                                                data-id="{{ $section->id }}"
                                                data-section_name="{{ $section->section_name }}" data-toggle="modal"
                                                href="#modaldemo9" title="{{ trans('settings_translate.close') }}"><i
                                                    class="las la-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="modaldemo8">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">{{ trans('settings_translate.add_section') }}</h6><button
                            aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true">&times;</span></button>
                    </div>

                    <form action="{{ route('sections.store') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ trans('settings_translate.section_name') }}</label>
                                <input type="text" class="form-control" id="section_name" name="section_name" required>
                            </div>
                            <div class="form-group">
                                <label
                                    for="exampleFormControlTextarea1">{{ trans('settings_translate.description') }}</label>
                                <textarea class="form-control" id="descriptoin" name="description" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-primary"
                                type="submit">{{ trans('settings_translate.save_changes') }}</button>
                            <button class="btn ripple btn-secondary" data-dismiss="modal"
                                type="button">{{ trans('settings_translate.close') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- edit -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ trans('settings_translate.section_edit') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sections.update') }}" method="post" autocomplete="off">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="">
                            <label for="recipient-name"
                                class="col-form-label">{{ trans('settings_translate.section_name') }}</label>
                            <input class="form-control" name="section_name" id="section_name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="message-text"
                                class="col-form-label">{{ trans('settings_translate.notes') }}</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ trans('settings_translate.sure') }}</button>
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('settings_translate.close') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- delete -->
    <div class="modal" id="modaldemo9">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">{{ trans('settings_translate.section_close') }}</h6><button
                        aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{ route('sections.destroy') }}" method="post">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        <p>{{ trans('settings_translate.are_you_sure_to_exit') }}</p><br>
                        <input type="hidden" name="id" id="id" value="">
                        <input class="form-control" name="section_name" value="" id="section_name" readonly>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('settings_translate.close') }}</button>
                        <button type="submit" class="btn btn-danger">{{ trans('settings_translate.sure') }}</button>
                    </div>
                </form>
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
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    @if (App::getLocale() == 'ar')
        <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables_rtl.js') }}"></script>
    @else
        <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    @endif

    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ asset('assets/js/table-data.js') }}"></script>
    <!-- Internal Modal js-->
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script>
        $("#exampleModal2").on("show.bs.modal", function(e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var section_name = button.data('section_name');
            var description = button.data('description');

            let model = $(this);
            model.find('.modal-body #id').val(id);
            model.find('.modal-body #section_name').val(section_name);
            model.find('.modal-body #description').val(description);

        })

        $("#modaldemo9").on("show.bs.modal", function(e) {
            var button = $(e.relatedTarget);
            var id = button.data('id');
            var section_name = button.data('section_name');
            var description = button.data('description');

            let model = $(this);
            model.find('.modal-body #id').val(id);
            model.find('.modal-body #section_name').val(section_name);

        })
    </script>
@endsection
