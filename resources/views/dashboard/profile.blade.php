@include('dashboard.parts.head')
<title>Zaria Center || Profile</title>
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
                        <li class="breadcrumb-item">Profile</li>
                    </ul>
                </div>

            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-xxl-3 col-lg-4">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        href="#v-pills-profile" role="tab">
                                        <i class="feather-user me-2"></i>Personal Information
                                    </a>
                                    <a class="nav-link" id="v-pills-password-tab" data-bs-toggle="pill"
                                        href="#v-pills-password" role="tab">
                                        <i class="feather-lock me-2"></i>Change Password
                                    </a>
                                    <a class="nav-link" id="v-pills-notifications-tab" data-bs-toggle="pill"
                                        href="#v-pills-notifications" role="tab">
                                        <i class="feather-bell me-2"></i>Notification
                                    </a>
                                    <a class="nav-link text-danger" id="v-pills-delete-tab" data-bs-toggle="pill"
                                        href="#v-pills-delete" role="tab">
                                        <i class="feather-trash-2 me-2"></i>Delete Account
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-9 col-lg-8">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel">
                                <div class="card stretch stretch-full">
                                    <div class="card-header">
                                        <h5 class="card-title">Profile Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="#"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4 align-items-center">
                                                <div class="col-sm-3">
                                                    <div class="avatar-image avatar-xxl border">
                                                        <img src="/assets/images/avatar/1.png" alt="Profile"
                                                            class="img-fluid rounded" id="profile-preview">
                                                    </div>
                                                </div>
                                                <div class="col-sm-9">
                                                    <h6>Profile Image</h6>
                                                    <p class="text-muted fs-12">JPG, GIF or PNG. Max size of 2MB</p>
                                                    <input type="file" class="form-control form-control-sm w-50"
                                                        name="profile_image">
                                                </div>
                                            </div>

                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" name="name"
                                                        value="System Administrator">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        value="+254 700 000 000">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">County</label>
                                                    <input type="text" class="form-control" name="county"
                                                        value="Nairobi">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Country</label>
                                                    <input type="text" class="form-control" name="country"
                                                        value="Kenya">
                                                </div>
                                            </div>

                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-password" role="tabpanel">
                                <div class="card stretch stretch-full">
                                    <div class="card-header">
                                        <h5 class="card-title">Change Password</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="#">
                                            @csrf
                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Enter new password">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Confirm New Password</label>
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control" placeholder="Confirm new password">
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary">Update Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel">
                                <div class="card stretch stretch-full">
                                    <div class="card-header">
                                        <h5 class="card-title">Notification Preference</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted">Choose how you want to receive updates and alerts.</p>
                                        <div class="list-group list-group-flush">
                                            <div
                                                class="list-group-item d-flex align-items-center justify-content-between px-0">
                                                <div>
                                                    <h6 class="mb-0">Email Notifications</h6>
                                                    <span class="fs-12 text-muted">Receive updates via your registered
                                                        email address.</span>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="email_notifications" checked>
                                                </div>
                                            </div>
                                            <div
                                                class="list-group-item d-flex align-items-center justify-content-between px-0">
                                                <div>
                                                    <h6 class="mb-0">In-App Notifications</h6>
                                                    <span class="fs-12 text-muted">Get alerts directly within the
                                                        dashboard.</span>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="in_app_notifications" checked>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-delete" role="tabpanel">
                                <div class="card stretch stretch-full border-danger">
                                    <div class="card-header bg-danger-subtle">
                                        <h5 class="card-title text-danger">Danger Zone</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>Delete Account</h6>
                                        <p class="text-muted fs-13">Once you delete your account, there is no going
                                            back. Please be certain.</p>
                                        <form action="#">
                                            @csrf
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete your account?')">Delete
                                                My Account</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>


        @include('dashboard.parts.footer')