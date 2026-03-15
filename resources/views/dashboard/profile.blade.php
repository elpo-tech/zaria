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
                                        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            <div class="row mb-4 align-items-center">
                                                <div class="col-sm-3">
                                                    <div class="avatar-image avatar-xxl border">
                                                        <img src="{{ asset('profiles/' . Auth::user()->foth1) }}" alt="Profile"
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
                                                    <input type="text" class="form-control" name="fname"
                                                        value="{{ Auth::user()->fname }}" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" name="phone"
                                                        value="{{ Auth::user()->phone }}" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                        value="{{ Auth::user()->email }}" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">User Name</label>
                                                    <input type="text" class="form-control" name="username"
                                                        value="{{ Auth::user()->uname }}" disabled>
                                                </div>

                                                <div class="col-md-6">
                                                    <label class="form-label">Role</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ Auth::user()->role }}" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">Status</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ Auth::user()->status }}" disabled>
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
                                        <form action="{{ route('password.update') }}" method="POST">
                                            @csrf

                                            <div class="row g-3">
                                                <div class="col-lg-6">
                                                    <label class="form-label">New Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Enter new password" require>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">Confirm New Password</label>
                                                    <input type="password" name="password_confirmation"
                                                        class="form-control" placeholder="Confirm new password" required>
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