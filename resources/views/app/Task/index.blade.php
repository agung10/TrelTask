@extends('layouts.app')

@section('customCSS')
<!-- Custom box css -->
<link href="{{asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">

<div class="row">
<div class="col-xl-4">
    <div class="card-box taskboard-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
            </div>
        </div>

        <h4 class="header-title mt-0 mb-3 text-primary">Upcoming</h4>

        <ul class="sortable-list list-unstyled taskList" id="upcoming">
            <li>
                <div class="kanban-box">
                    <div class="checkbox-wrapper float-left">
                        <div class="checkbox checkbox-success checkbox-single">
                            <input type="checkbox" id="singleCheckbox2" value="option2" aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                    </div>

                    <div class="kanban-detail">
                        <span class="badge badge-danger float-right">Urgent</span>
                        <h5 class="mt-0"><a href="#" class="text-dark">Improve animation loader</a> </h5>
                    </div>
                </div>
            </li>

            <li>
                <div class="kanban-box">
                    <div class="checkbox-wrapper float-left">
                        <div class="checkbox checkbox-success checkbox-single">
                            <input type="checkbox" id="singleCheckbox3" value="option3" aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                    </div>

                    <div class="kanban-detail">
                        <span class="badge badge-warning float-right">High</span>
                        <h5 class="mt-0"><a href="#" class="text-dark">Write a release note for Admin v1.5</a> </h5>
                    </div>
                </div>
            </li>
        </ul>

        <div class="text-center pt-2">
            <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                <i class="mdi mdi-plus"></i> Add New
            </a>
        </div>
    </div>
</div><!-- end col -->


<div class="col-xl-4">
    <div class="card-box taskboard-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
            </div>
        </div>

        <h4 class="header-title mt-0 mb-3 text-warning">In Progress</h4>

        <ul class="sortable-list list-unstyled taskList" id="inprogress">
            <li>
                <div class="kanban-box">
                    <div class="checkbox-wrapper float-left">
                        <div class="checkbox checkbox-success checkbox-single">
                            <input type="checkbox" id="singleCheckbox6" value="option6" aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                    </div>

                    <div class="kanban-detail">
                        <span class="badge badge-danger float-right">Urgent</span>
                        <h5 class="mt-0"><a href="#" class="text-dark">File Uploads on cards</a> </h5>
                    </div>
                </div>
            </li>

            <li>
                <div class="kanban-box">
                    <div class="checkbox-wrapper float-left">
                        <div class="checkbox checkbox-success checkbox-single">
                            <input type="checkbox" id="singleCheckbox7" value="option7" aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                    </div>

                    <div class="kanban-detail">
                        <span class="badge badge-warning float-right">High</span>
                        <h5 class="mt-0"><a href="#" class="text-dark">Enable analytics tracking</a> </h4>
                    </div>
                </div>
            </li>


            <li>
                <div class="kanban-box">
                    <div class="checkbox-wrapper float-left">
                        <div class="checkbox checkbox-success checkbox-single">
                            <input type="checkbox" id="singleCheckbox8" value="option8" aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                    </div>

                    <div class="kanban-detail">
                        <h5 class="mt-0"><a href="#" class="text-dark">Improve animation loader</a> </h5>
                    </div>
                </div>
            </li>

        </ul>

        <div class="text-center pt-2">
            <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                <i class="mdi mdi-plus"></i> Add New
            </a>
        </div>
    </div>
</div><!-- end col -->


<div class="col-xl-4">
    <div class="card-box taskboard-box">
        <div class="dropdown float-right">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
            </div>
        </div>

        <h4 class="header-title mt-0 mb-3 text-success">Complete</h4>

        <ul class="sortable-list list-unstyled taskList" id="completed">
            <li>
                <div class="kanban-box">
                    <div class="checkbox-wrapper float-left">
                        <div class="checkbox checkbox-success checkbox-single float-left">
                            <input type="checkbox" id="singleCheckbox12" value="option12" aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                    </div>

                    <div class="kanban-detail">
                        <h5 class="mt-0"><a href="#" class="text-dark">Invite user to a project</a> </h5>
                    </div>
                </div>
            </li>


            <li>
                <div class="kanban-box">
                    <div class="checkbox-wrapper float-left">
                        <div class="checkbox checkbox-success checkbox-single">
                            <input type="checkbox" id="singleCheckbox13" value="option13" aria-label="Single checkbox Two">
                            <label></label>
                        </div>
                    </div>

                    <div class="kanban-detail">
                        <span class="badge badge-danger float-right">Urgent</span>
                        <h5 class="mt-0"><a href="#" class="text-dark">Code HTML email template for welcome email</a> </h5>
                    </div>
                </div>
            </li>

        </ul>

        <div class="text-center pt-2">
            <a href="#custom-modal" class="btn btn-primary waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
                <i class="mdi mdi-plus"></i> Add New
            </a>
        </div>
    </div>
</div><!-- end col -->
@endsection

@section('customJS')
<!-- Jquery Ui js -->
<script src="{{asset('assets/libs/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Modal-Effect -->
<script src="{{asset('assets/libs/custombox/custombox.min.js')}}"></script>

<!-- dragula init -->
<script src="{{asset('assets/js/pages/kanban.init.js')}}"></script>

@endsection