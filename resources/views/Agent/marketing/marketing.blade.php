@extends('Agent.Layout.App')
@section('title', 'Marketing')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
.select2-container--default .select2-selection--single{
  height: 45px !important;
  border: 1px solid #70707030;
}


</style>
<main class="pb-3">
    <!-- Page Title and Breadcrumb Start -->
    <div class="page-title-breadcrumb my-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        Marketing
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumb-box">
                        <ul>
                            <li>Marketing</li>
                            <li>Social</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Title and Breadcrumb End -->

    <!-- Table Section Start -->
    <div class="admin-table">
        <div class="container-fluid">
            <div class="row admin-table-header">
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
                        <div class="card-box pt-3 pl-3 pr-3">
                            <div class="tab-h-box">
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="social-tab" data-toggle="tab" href="#social"
                                            role="tab" aria-controls="social" aria-selected="true">Social</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="templates-tab" data-toggle="tab" href="#templates"
                                            role="tab" aria-controls="templates" aria-selected="false">Templates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " id="image-library-tab" data-toggle="tab" href="#image-library"
                                            role="tab" aria-controls="image-library" aria-selected="false">Image Library</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="social" role="tabpanel"
                                        aria-labelledby="social-tab">
                                        <div class="row">
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="templates" role="tabpanel"
                                        aria-labelledby="templates-tab">
                                        <div class="row">
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="image-library" role="tabpanel"
                                        aria-labelledby="image-library-tab">
                                        <div class="row">
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 mb-3">
                                                <div class="card-box social-box">
                                                    <div class="social-box-img"><img src="./assets/images/e2333a30-120a-476a-856d-c02e6cd089b1.png"/></div>
                                                    <div class="social-box-detail p-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <h4>Animals playing on guitar</h4>
                                                                <p>By Ashwin Jayaraman</p>
                                                            </div>
                                                            <div class="col-auto d-flex align-items-center">
                                                                <a href="#"><img src="./assets/images/direct-download-red.svg"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
