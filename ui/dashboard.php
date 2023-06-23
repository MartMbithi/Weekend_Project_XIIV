<?php
session_start();
require_once('../app/config/config.php');
require_once('../app/functions/analytics.php');
require_once('../app/partials/head.php');
?>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <?php require_once('../app/partials/header.php'); ?>

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once('../app/partials/sidebar.php'); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- Add Order -->
                <div class="modal fade" id="addOrderModalside">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Event</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Event Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Event Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-black font-w500">Description</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <span class="mr-4">
                                                <svg width="50" height="53" viewBox="0 0 50 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="7.11688" height="52.1905" rx="3.55844" transform="matrix(-1 0 0 1 49.8184 0)" fill="#FE634E" />
                                                    <rect width="7.11688" height="37.9567" rx="3.55844" transform="matrix(-1 0 0 1 35.585 14.2338)" fill="#FE634E" />
                                                    <rect width="7.11688" height="16.6061" rx="3.55844" transform="matrix(-1 0 0 1 21.3516 35.5844)" fill="#FE634E" />
                                                    <rect width="8.0293" height="32.1172" rx="4.01465" transform="matrix(-1 0 0 1 8.0293 20.0732)" fill="#FE634E" />
                                                </svg>
                                            </span>
                                            <div class="media-body ml-1">
                                                <p class="mb-2">Income</p>
                                                <h3 class="mb-0 text-black font-w600">$126,000</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <span class="mr-4">
                                                <svg width="51" height="31" viewBox="0 0 51 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M49.3228 0.840214C50.7496 2.08096 50.9005 4.24349 49.6597 5.67035L34.6786 22.8987C32.284 25.6525 28.1505 26.0444 25.281 23.7898L19.529 19.2704C18.751 18.6591 17.6431 18.7086 16.9226 19.3866L5.77023 29.883C4.3933 31.1789 2.22651 31.1133 0.930578 29.7363C-0.365358 28.3594 -0.299697 26.1926 1.07723 24.8967L13.4828 13.2209C15.9494 10.8993 19.7428 10.7301 22.4063 12.8229L28.0152 17.2299C28.8533 17.8884 30.0607 17.774 30.7601 16.9696L44.4926 1.1772C45.7334 -0.249661 47.8959 -0.400534 49.3228 0.840214Z" fill="#FE634E" />
                                                </svg>
                                            </span>
                                            <div class="media-body ml-1">
                                                <p class="mb-2">Customer</p>
                                                <h3 class="mb-0 text-black font-w600">109,511</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <span class="mr-4">
                                                <svg width="51" height="52" viewBox="0 0 51 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.5 43C34.8888 43 42.5 35.3888 42.5 26C42.5 16.6112 34.8888 9 25.5 9C16.1112 9 8.5 16.6112 8.5 26C8.5 35.3888 16.1112 43 25.5 43ZM25.5 51.5C39.5833 51.5 51 40.0833 51 26C51 11.9167 39.5833 0.5 25.5 0.5C11.4167 0.5 0 11.9167 0 26C0 40.0833 11.4167 51.5 25.5 51.5Z" fill="white" fill-opacity="0.18" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.9997 1.95836C31.9058 1.21807 29.72 0.75304 27.4976 0.578384C26.3965 0.491843 25.4997 1.39543 25.4997 2.5V6.86605C25.4997 7.97062 26.3981 8.854 27.4951 8.98264C29.8644 9.26046 32.1572 10.031 34.223 11.253C36.8645 12.8155 39.0379 15.0589 40.5159 17.7486C41.9939 20.4384 42.7223 23.4757 42.625 26.5433C42.5277 29.6108 41.6082 32.5959 39.9627 35.1866C38.3172 37.7772 36.006 39.8783 33.2707 41.2703C30.5355 42.6623 27.4766 43.294 24.4136 43.0995C21.3507 42.905 18.3963 41.8913 15.8591 40.1645C13.8749 38.814 12.2029 37.0662 10.9444 35.0397C10.3616 34.1013 9.1801 33.6636 8.18029 34.1331L4.2283 35.989C3.22848 36.4585 2.79178 37.6543 3.33818 38.6143C4.44093 40.5516 5.79093 42.3324 7.35106 43.9131C8.50759 45.0848 9.77958 46.1466 11.1519 47.0806C14.9279 49.6506 19.3249 51.1592 23.8834 51.4487C28.4418 51.7382 32.9943 50.798 37.0652 48.7264C41.136 46.6548 44.5756 43.5277 47.0246 39.6721C49.4736 35.8165 50.842 31.3739 50.9868 26.8085C51.1317 22.2432 50.0476 17.7228 47.8479 13.7197C45.6482 9.71663 42.4137 6.37787 38.4824 4.05236C37.0536 3.2072 35.5519 2.50715 33.9997 1.95836Z" fill="#FE634E" />
                                                </svg>
                                            </span>
                                            <div class="media-body ml-1">
                                                <p class="mb-2">Last Than Year</p>
                                                <div class="d-flex align-items-center">
                                                    <h3 class="mb-0 mr-3 text-black font-w600">59%</h3>
                                                    <svg width="29" height="15" viewBox="0 0 29 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 15L14.5 -1.27353e-06L29 15" fill="#21B830"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 col-xxl-12">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header pb-0 border-0">
                                                <div class="mr-auto">
                                                    <h4 class="fs-20 text-black mb-0">Sales Comparison</h4>
                                                    <span class="text-black fs-20 font-w300">Than last day</span>
                                                </div>
                                                <span class="fs-38 text-black font-w600 mr-2">57%</span>
                                            </div>
                                            <div class="card-body pt-2 pb-0">
                                                <div id="columnChart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 pb-0 d-sm-flex d-block">
                                                <h4 class="card-title mb-1">Trending Items</h4>
                                                <div class="dropdown ml-auto text-right">
                                                    <div class="btn-link" data-toggle="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="javascript:void(0);">View Detail</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 p-0">
                                                <div class="align-items-center row mx-0 border-bottom p-4">
                                                    <span class="number col-2 col-sm-1 px-0 align-self-center">#1</span>
                                                    <div class="border border-primary rounded-circle p-3 mr-3">
                                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3184 6.59834C12.5373 5.8173 11.271 5.8173 10.49 6.59834L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L21.4016 17.51C22.1826 16.7289 22.1826 15.4626 21.4016 14.6816L13.3184 6.59834Z" fill="#FE634E" />
                                                            <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L14.3128 2.77554C13.5317 3.55659 13.5317 4.82292 14.3128 5.60396L22.396 13.6872C23.1771 14.4683 24.4434 14.4683 25.2244 13.6872L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <div class="col-sm-4 col-12 col-xxl-5 my-3 my-sm-0 px-0">
                                                        <h5 class="mt-0 mb-0"><a class="text-black" href="event.html">Beautiful Fireworks Shows In The New Year 2020</a></h5>
                                                    </div>
                                                    <div class="ml-sm-auto col-2 col-sm-2 px-0 d-flex align-self-center align-items-center">
                                                        <div class="text-center">
                                                            <h4 class="mb-0 text-black">454</h4>
                                                            <span class="fs-14">Sales</span>
                                                        </div>
                                                    </div>
                                                    <div class="mr-3 col-2 col-sm-1">
                                                        <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#FE634E" />
                                                            <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#FE634E" />
                                                            <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#FE634E" />
                                                            <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <svg width="22" height="11" class="col-sm-1 col-2" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 11L11 -4.72849e-07L22 11" fill="#21B830"></path>
                                                    </svg>
                                                </div>
                                                <div class="align-items-center row mx-0 border-bottom p-4">
                                                    <span class="number col-2 col-sm-1 px-0 align-self-center">#2</span>
                                                    <div class="border border-primary rounded-circle p-3 mr-3">
                                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3184 6.59834C12.5373 5.8173 11.271 5.8173 10.49 6.59834L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L21.4016 17.51C22.1826 16.7289 22.1826 15.4626 21.4016 14.6816L13.3184 6.59834Z" fill="#FE634E" />
                                                            <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L14.3128 2.77554C13.5317 3.55659 13.5317 4.82292 14.3128 5.60396L22.396 13.6872C23.1771 14.4683 24.4434 14.4683 25.2244 13.6872L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <div class="col-sm-4 col-12 col-xxl-5 my-3 my-sm-0 px-0">
                                                        <h5 class="mt-0 mb-0"><a class="text-black" href="event.html">Jakarta Indie Music Festival 2020</a></h5>
                                                    </div>
                                                    <div class="ml-sm-auto col-2 col-sm-2 px-0 d-flex align-self-center align-items-center">
                                                        <div class="text-center">
                                                            <h4 class="mb-0 text-black">485</h4>
                                                            <span class="fs-14">Sales</span>
                                                        </div>
                                                    </div>
                                                    <div class="mr-3 col-2 col-sm-1">
                                                        <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#FE634E" />
                                                            <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#FE634E" />
                                                            <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#FE634E" />
                                                            <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <svg width="22" height="11" class="col-sm-1 col-2" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 -9.61651e-07L11 11L22 0" fill="#FF2626"></path>
                                                    </svg>
                                                </div>
                                                <div class="align-items-center row mx-0 border-bottom p-4">
                                                    <span class="number col-2 col-sm-1 px-0 align-self-center">#3</span>
                                                    <div class="border border-primary rounded-circle p-3 mr-3">
                                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3184 6.59834C12.5373 5.8173 11.271 5.8173 10.49 6.59834L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L21.4016 17.51C22.1826 16.7289 22.1826 15.4626 21.4016 14.6816L13.3184 6.59834Z" fill="#FE634E" />
                                                            <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L14.3128 2.77554C13.5317 3.55659 13.5317 4.82292 14.3128 5.60396L22.396 13.6872C23.1771 14.4683 24.4434 14.4683 25.2244 13.6872L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <div class="col-sm-4 col-12 col-xxl-5 my-3 my-sm-0 px-0">
                                                        <h5 class="mt-0 mb-0"><a class="text-black" href="event.html">Live Choir in Sydney 2020</a></h5>
                                                    </div>
                                                    <div class="ml-sm-auto col-2 col-sm-2 px-0 d-flex align-self-center align-items-center">
                                                        <div class="text-center">
                                                            <h4 class="mb-0 text-black">250</h4>
                                                            <span class="fs-14">Sales</span>
                                                        </div>
                                                    </div>
                                                    <div class="mr-3 col-2 col-sm-1">
                                                        <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#FE634E" />
                                                            <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#FE634E" />
                                                            <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#FE634E" />
                                                            <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <svg width="22" height="11" class="col-sm-1 col-2" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 11L11 -4.72849e-07L22 11" fill="#21B830"></path>
                                                    </svg>
                                                </div>
                                                <div class="align-items-center row mx-0 border-bottom p-4">
                                                    <span class="number col-2 col-sm-1 px-0 align-self-center">#4</span>
                                                    <div class="border border-primary rounded-circle p-3 mr-3">
                                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3184 6.59834C12.5373 5.8173 11.271 5.8173 10.49 6.59834L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L21.4016 17.51C22.1826 16.7289 22.1826 15.4626 21.4016 14.6816L13.3184 6.59834Z" fill="#FE634E" />
                                                            <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L14.3128 2.77554C13.5317 3.55659 13.5317 4.82292 14.3128 5.60396L22.396 13.6872C23.1771 14.4683 24.4434 14.4683 25.2244 13.6872L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <div class="col-sm-4 col-12 col-xxl-5 my-3 my-sm-0 px-0">
                                                        <h5 class="mt-0 mb-0"><a class="text-black" href="event.html">Artist Performing Festival In Aus..</a></h5>
                                                    </div>
                                                    <div class="ml-sm-auto col-2 col-sm-2 px-0 d-flex align-self-center align-items-center">
                                                        <div class="text-center">
                                                            <h4 class="mb-0 text-black">350</h4>
                                                            <span class="fs-14">Sales</span>
                                                        </div>
                                                    </div>
                                                    <div class="mr-3 col-2 col-sm-1">
                                                        <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#FE634E" />
                                                            <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#FE634E" />
                                                            <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#FE634E" />
                                                            <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <svg width="22" height="11" class="col-sm-1 col-2" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 -9.61651e-07L11 11L22 0" fill="#FF2626"></path>
                                                    </svg>
                                                </div>
                                                <div class="align-items-center row mx-0 border-bottom p-4">
                                                    <span class="number col-2 col-sm-1 px-0 align-self-center">#5</span>
                                                    <div class="border border-primary rounded-circle p-3 mr-3">
                                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M13.3184 6.59834C12.5373 5.8173 11.271 5.8173 10.49 6.59834L0.556031 16.5323C0.281453 16.8068 0.281453 17.2521 0.556031 17.5266L3.24911 20.2197C3.44481 20.4154 3.73705 20.4781 3.99582 20.3799C5.0289 19.9878 6.20067 20.2386 6.98098 21.0189C7.76129 21.7992 8.01214 22.971 7.62003 24.0041C7.52178 24.2628 7.5845 24.5551 7.78019 24.7508L10.4733 27.4439C10.7479 27.7185 11.1931 27.7185 11.4677 27.4439L21.4016 17.51C22.1826 16.7289 22.1826 15.4626 21.4016 14.6816L13.3184 6.59834Z" fill="#FE634E" />
                                                            <path d="M27.4439 10.4734L24.7508 7.78025C24.5551 7.58456 24.2628 7.52185 24.0041 7.62009C22.971 8.0122 21.7993 7.76132 21.019 6.98101C20.2386 6.2007 19.9878 5.02893 20.3799 3.99585C20.4781 3.73711 20.4154 3.44484 20.2197 3.24914L17.5266 0.556062C17.252 0.281484 16.8068 0.281484 16.5322 0.556062L14.3128 2.77554C13.5317 3.55659 13.5317 4.82292 14.3128 5.60396L22.396 13.6872C23.1771 14.4683 24.4434 14.4683 25.2244 13.6872L27.4439 11.4677C27.7185 11.1932 27.7185 10.7479 27.4439 10.4734Z" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <div class="col-sm-4 col-12 col-xxl-5 my-3 my-sm-0 px-0">
                                                        <h5 class="mt-0 mb-0"><a class="text-black" href="event.html">[LIVE] Football Charity Event 2020</a></h5>
                                                    </div>
                                                    <div class="ml-sm-auto col-2 col-sm-2 px-0 d-flex align-self-center align-items-center">
                                                        <div class="text-center">
                                                            <h4 class="mb-0 text-black">752</h4>
                                                            <span class="fs-14">Sales</span>
                                                        </div>
                                                    </div>
                                                    <div class="mr-3 col-2 col-sm-1">
                                                        <span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
                                                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="3.71426" height="27" rx="1.85713" transform="matrix(-1 0 0 1 26 0)" fill="#FE634E" />
                                                            <rect width="3.71426" height="19.6364" rx="1.85713" transform="matrix(-1 0 0 1 18.5723 7.36365)" fill="#FE634E" />
                                                            <rect width="3.71426" height="8.59091" rx="1.85713" transform="matrix(-1 0 0 1 11.1436 18.4091)" fill="#FE634E" />
                                                            <rect width="4.19045" height="16.6154" rx="2.09522" transform="matrix(-1 0 0 1 4.19043 10.3846)" fill="#FE634E" />
                                                        </svg>
                                                    </div>
                                                    <svg width="22" height="11" class="col-sm-1 col-2" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0 11L11 -4.72849e-07L22 11" fill="#21B830"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-12">
                                <div class="row">
                                    <div class="col-xl-12 col-xxl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-header pb-0 border-0">
                                                <div>
                                                    <h5 class="mb-0 text-black font-weight-bold">Pie Chart</h5>
                                                    <p class="fs-14 mb-0">Ticket Sold</p>
                                                </div>
                                                <select class="form-control style-1 default-select ">
                                                    <option>Daily</option>
                                                    <option>Monthly</option>
                                                    <option>Weekly</option>
                                                </select>
                                            </div>
                                            <div class="card-body">
                                                <div id="chartCircle"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-xxl-6 col-md-6">
                                        <div class="card">
                                            <div class="card-header border-0 pb-0">
                                                <h6 class="fs-16 text-black font-w600">Customers</h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex mb-4 align-items-center">
                                                    <div class="d-inline-block position-relative donut-chart-sale mr-3">
                                                        <span class="donut" data-peity='{ "fill": ["rgb(254, 99, 78)", "rgba(244, 244, 244, 1)"],   "innerRadius": 31, "radius": 10}'>2/8</span>
                                                        <small class="text-black fs-18">29%</small>
                                                    </div>
                                                    <div>
                                                        <h6 class="fs-18 text-black font-w600">Adult</h6>
                                                        <span class="fs-14">30 - 45 Years</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-inline-block position-relative donut-chart-sale mr-3">
                                                        <span class="donut" data-peity='{ "fill": ["rgb(254, 99, 78)", "rgba(244, 244, 244, 1)"],   "innerRadius": 31, "radius": 10}'>7/9</span>
                                                        <small class="text-black fs-18">84%</small>
                                                    </div>
                                                    <div>
                                                        <h6 class="fs-18 text-black font-w600">Young</h6>
                                                        <span class="fs-14">17 - 24 Years</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Sales Summary</h4>
                                        <select class="form-control style-1 default-select ">
                                            <option>This Week</option>
                                            <option>Next Week</option>
                                            <option>This Month</option>
                                            <option>Next Month</option>
                                        </select>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between fs-14 mb-4">
                                            <span class="text-black">Tuesday</span>
                                            <span class="text-black">215,523 pcs</span>
                                        </div>

                                        <div class="text-center">
                                            <div id="polarAreaCharts"></div>
                                        </div>
                                        <div class="row mx-0">
                                            <div class="col-6 px-0 d-flex align-items-center mb-3">
                                                <svg class="mr-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="25" height="25" rx="12.5" fill="#FE634E" />
                                                </svg>
                                                <div>
                                                    <h5 class="mb-1 text-black">VIP</h5>
                                                    <span>30%</span>
                                                </div>
                                            </div>
                                            <div class="col-6 px-0 d-flex align-items-center mb-3">
                                                <svg class="mr-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="25" height="25" rx="12.5" fill="#707070" />
                                                </svg>
                                                <div>
                                                    <h5 class="mb-1 text-black">Exclusive</h5>
                                                    <span>24%</span>
                                                </div>
                                            </div>
                                            <div class="col-6 px-0 d-flex align-items-center">
                                                <svg class="mr-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="25" height="25" rx="12.5" fill="#BFBFBF" />
                                                </svg>
                                                <div>
                                                    <h5 class="mb-1 text-black">Reguler</h5>
                                                    <span>30%</span>
                                                </div>
                                            </div>
                                            <div class="col-6 px-0 d-flex align-items-center">
                                                <svg class="mr-3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="25" height="25" rx="12.5" fill="#F3F3F3" />
                                                </svg>
                                                <div>
                                                    <h5 class="mb-1 text-black">Economic</h5>
                                                    <span>2%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-xxl-6 col-md-6">
                                <div class="card">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title">Revenue</h4>
                                        <div class="dropdown ml-auto text-right">
                                            <div class="btn-link" data-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <circle fill="#000000" cx="12" cy="5" r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                        <circle fill="#000000" cx="12" cy="19" r="2"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">View Detail</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="areaChart_2" height="350"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <?php require_once('../app/partials/footer.php'); ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <?php require_once('../app/partials/scripts.php'); ?>

</body>

</html>