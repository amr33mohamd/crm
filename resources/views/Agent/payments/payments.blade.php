@extends('Agent.Layout.App')
@section('title', 'Payments')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>
<!-- Page Body Start -->
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Finance Summary
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Finance</li>
                            <li>Milestone</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->

    <section class="profile-content">
        <div class="container-fluid dashboard">
            <div class="row mb-4 dashboard-header">
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>$34,152</h2>
                                    <p class="mb-0">Commission</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/Outline.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>$34,152</h2>
                                    <p class="mb-0">Wallet</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/wallet.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>34,152</h2>
                                    <p class="mb-0">Invoices</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/invoices.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>34,152</h2>
                                    <p class="mb-0">Milestones</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/hand.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card-box p-3">
                        <div class="row ">
                            <div class="col">
                                <div class="number-title">
                                    <h2>$34,152</h2>
                                    <p class="mb-0">Total Amount</p>
                                </div>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                                <img src="./assets/images/finance-money.svg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Table Section Start -->
    <div class="admin-table">
        <div class="container-fluid">
            <div class="row admin-table-header">
                <div class="col-auto admin-table-header-box">
                    <div class="row m-0">
                        <div class="top-heading mb-1">
                            <h2>Milestone</h2>
                            <img src="assets/images/question-circle.svg" class="ml-2">
                        </div>
                    </div>
                    <div class="row m-0">
                        <ul class="admin-table-info">
                            <li class="mr-1">Viewing (13)</li>
                            <li>Record (s)</li>
                        </ul>
                    </div>
                </div>
                <div class="col admin-table-filter-box">
                    <div class="admin-table-filter d-flex justify-content-end align-items-center">
                        <button class="admin-table-btn admin-table-btn-add mr-3"><img class="mr-2"
                                src="./assets/images/table-add.svg">Add</button>
                        <button class="admin-table-btn mr-3"><img class="mr-2"
                                src="./assets/images/table-filter.svg">Filter</button>
                        <button class="admin-table-btn mr-3"><img class="mr-2"
                                src="./assets/images/table-export.svg">Export</button>
                        <a href="./step-1.html" class="admin-table-btn mr-3"><img class="mr-2"
                                src="./assets/images/table-import.svg">Import</a>
                        <div class="table-search">
                            <img src="./assets/images/table-search.svg">
                            <input type="text" placeholder="Search …">
                        </div>
                    </div>
                </div>
            </div>
            <section class="profile-content mt-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card-box p-3">
                            <div class="tab-h-box">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="milestone-tab" data-toggle="tab" href="#milestone"
                                            role="tab" aria-controls="milestone" aria-selected="true">Milestone</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="wallet-tab" data-toggle="tab" href="#wallet"
                                            role="tab" aria-controls="wallet" aria-selected="false">Wallet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="invoices-tab" data-toggle="tab" href="#invoices"
                                            role="tab" aria-controls="invoices" aria-selected="false">Invoices</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="commission-tab" data-toggle="tab" href="#commission"
                                            role="tab" aria-controls="commission" aria-selected="false">Commission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="client-portal-tab" data-toggle="tab" href="#client-portal" role="tab"
                                            aria-controls="client-portal" aria-selected="false">Client Portal</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="milestone" role="tabpanel"
                                        aria-labelledby="finance-tab">
                                        <!-- Table Section Start -->
                                        <div class="admin-table finance-table">
                                            <div class="row admin-table-body mt-3">
                                                <div class="col">
                                                    <div class="table-responsive">
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client ID</th>
                                                                    <th scope="col">Client name</th>
                                                                    <th scope="col">Milestone</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Due Date</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Table Section End -->
                                    </div>
                                    <div class="tab-pane fade" id="wallet" role="tabpanel"
                                        aria-labelledby="finance-tab">
                                        <!-- Table Section Start -->
                                        <div class="admin-table finance-table">
                                            <div class="row admin-table-body mt-3">
                                                <div class="col">
                                                    <div class="table-responsive">
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client ID</th>
                                                                    <th scope="col">Client name</th>
                                                                    <th scope="col">Milestone</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Due Date</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Table Section End -->
                                    </div>
                                    <div class="tab-pane fade" id="invoices" role="tabpanel"
                                        aria-labelledby="finance-tab">
                                        <!-- Table Section Start -->
                                        <div class="admin-table finance-table">
                                            <div class="row admin-table-body mt-3">
                                                <div class="col">
                                                    <div class="table-responsive">
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client ID</th>
                                                                    <th scope="col">Client name</th>
                                                                    <th scope="col">Milestone</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Due Date</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Table Section End -->
                                    </div>
                                    <div class="tab-pane fade" id="commission" role="tabpanel"
                                        aria-labelledby="finance-tab">
                                        <!-- Table Section Start -->
                                        <div class="admin-table finance-table">
                                            <div class="row admin-table-body mt-3">
                                                <div class="col">
                                                    <div class="table-responsive">
                                                        <table class="table table-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Payment ID</th>
                                                                    <th scope="col">Client ID</th>
                                                                    <th scope="col">Client name</th>
                                                                    <th scope="col">Milestone</th>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Due Date</th>
                                                                    <th scope="col">Amount</th>
                                                                    <th scope="col"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PY-135431</td>
                                                                    <td>AS-5462132</td>
                                                                    <td>Ashwin Jayaraman</td>
                                                                    <td>Agent Fees</td>
                                                                    <td class="red-color">
                                                                        <img src="./assets/images/form-drop-down.svg" class="mr-2"/>
                                                                        Overdue
                                                                    </td>
                                                                    <td>98 days due</td>
                                                                    <td>$134,546</td>
                                                                    <td>
                                                                        <div class="table-action-btn">
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-download-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-edit-btn.svg"/>
                                                                            </a>
                                                                            <a href="#" class="ml-3">
                                                                                <img src="./assets/images/table-delete-btn.svg"/>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Table Section End -->
                                    </div>
                                    <div class="tab-pane fade" id="client-portal" role="tabpanel"
                                        aria-labelledby="finance-tab">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Table Section End -->
</main>
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script>

$(document).ready(function() {
$('#element').toast('show')
// Setup - add a text input to each footer cell
$('#example thead tr').clone(true).appendTo( '#example thead' );
$('#example thead tr:eq(1) th').each( function (i) {
    if(i != 0){
    var title = $(this).text();
    $(this).html( '<input type="text"  class="form-control filter" placeholder="Search '+title+'" />' );

    $( 'input', this ).on( 'keyup change', function () {
        if ( table.column(i).search() !== this.value ) {
            table
                .column(i)
                .search( this.value )
                .draw();
        }
    } );
  }
  else{
    $(this).html( '');
  }
} );



$('#myInputTextField').on('keyup change',()=>{
  console.log($('#myInputTextField').val())
      table.search(''+$('#myInputTextField').val()).draw() ;
})

$(".filter").hide(); // hidden search input

$("#filter").click(()=>{
$('.filter').toggle(
  function () {
    $(".filter").css({display: "none !important"});
}, function () {

    $(".filter").css({display: "block !important"});
});
})




var table = $('#example').DataTable( {
    orderCellsTop: true,
    fixedHeader: false,
    searching:true
} );

} );

const app = new Vue({
    el: '#app',

    data() {
      return {
        leads: {!! json_encode($leads) !!},
        editing:0,
        current_lead:{},

      }
    },

    created() {
      // console.log(JSON.stringify(this.leads[0]))
      $('#schedule-a-call').on('hidden.bs.modal', function (e) {
        app.editing = 0;
        app.current_lead = {};
      })
      $('#schedule-a-call').on('show.bs.modal', function (e) {
        $('.form-field__input').each(function() {
          if ($(this).val() != ""  ) {
            $(this).parent().parent().addClass('form-field--is-active');
          }
          else {
            $(this).parent().parent().removeClass('form-field--is-active');
          }
        });
      })
      $('#callForm').ajaxForm((response)=> {
        if(app.editing == 1){
          app.editLead(response);
          app.editing = 0;
          console.log(response)
          $('#schedule-a-call').modal('hide');
        }
        else {
          app.addLead(response);
          $('#schedule-a-call').modal('hide');
        }
                 // alert(JSON.stringify(response))
             });
    },

    methods: {
        setLead(lead) {
          this.current_lead = lead;
          this.editing = 1;
           },
           addLead(lead){
             this.leads.push(lead);
           },
           editLead(data) {

             let obj = app.leads.find(f=>f.id==data.id);
              if(obj){
                obj.agenda = data.agenda;
                obj.call_type = data.call_type;
                obj.callable = data.callable;
                obj.callable_id = data.callable_id;
                obj.callable_type = data.callable_type;
                obj.created_at = data.created_at;
                obj.id = data.id;
                obj.purpose = data.purpose;
                obj.related_to = data.related_to;
                obj.reminder = data.reminder;
                obj.sales_stage_id = data.sales_stage_id;
                obj.start = data.start;
                obj.status = data.status;
                obj.subject = data.subject;


              }
              },


        addMessage(message) {
            axios.post('/messages', {
                message
            }).then(response => {
                this.messages.push({
                    message: response.data.message.message,
                    user: response.data.user
                });
            });
        },

        sendMessage() {
            this.addMessage(this.newMessage);
            this.newMessage = '';
        }
    }
});
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
$('.form-field__input').each(function() {
  if ($(this).val() != ""  ) {
    $(this).parent().parent().addClass('form-field--is-active');
  }
  else {
    $(this).parent().parent().removeClass('form-field--is-active');
  }
});
</script>
@endpush
