@include('dashboard.parts.head')
<title>Zaria Center || Add User</title>
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    @include('dashboard.parts.sidenav')
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->

    @include('dashboard.parts.topnav')
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item">Add User</li>
                    </ul>
                </div>

                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">




                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>


            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            <div class="card-header p-0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#profileTab" role="tab">User Information</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <form method="POST" action="{{route('add.user')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row mb-4 align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="fullnameInput" class="fw-semibold">User Name: </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-text"><i class="feather-user"></i></div>
                                                                <input type="text" name="uname" class="form-control" id="uname" placeholder="User Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row mb-4 align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="fullnameInput" class="fw-semibold">Full Name: </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-text"><i class="feather-user"></i></div>
                                                                <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row mb-4 align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="mailInput" class="fw-semibold">Email: </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-text"><i class="feather-mail"></i></div>
                                                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="row mb-4 align-items-center">
                                                        <div class="col-lg-4">
                                                            <label for="phoneInput" class="fw-semibold">Phone: </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-text"><i class="feather-phone"></i></div>
                                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="row mb-4 align-items-center">
                                                        <div class="col-lg-4">
                                                            <label class="fw-semibold">Role: </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-text"><i class="feather-home"></i></div>
                                                                <select class="form-control" data-select2-selector="status" name="role" id="role">
                                                                    <option value="" selected>-- Select Role --</option>
                                                                    <option>Manager</option>
                                                                    <option>HOD</option>
                                                                    <option>Staff</option>
                                                                    <option>Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="row mb-4 align-items-center">
                                                        <div class="col-lg-4">
                                                            <label class="fw-semibold">Status: </label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-text"><i class="feather-info"></i></div>
                                                                <select class="form-control" data-select2-selector="status" name="status" id="status">
                                                                    <option value="" selected>-- Select Status --</option>
                                                                    <option>Active</option>
                                                                    <option>Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                    </div>

                                    <hr class="my-0">
                                    <div class="card-body personal-info">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="feather-save me-2"></i>
                                            <span>Save User Details</span>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>


        @include('dashboard.parts.footer')