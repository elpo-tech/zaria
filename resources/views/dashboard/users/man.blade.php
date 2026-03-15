@include('dashboard.parts.head')
<title>Zaria Center || Managers</title>
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
                        <li class="breadcrumb-item">Managers</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <a href="{{url('/add_user')}}" class="btn btn-primary">
                        <i class="feather-plus me-2"></i>
                        <span>Add new manager</span>
                    </a>
                </div>

            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- Add your main content here -->
                    <div class="row">
                        <!-- Add your main content here -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card stretch stretch-full">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover" id="paymentList">
                                                <thead>
                                                    <tr>
                                                        <th>Staff N0.</th>
                                                        <th>Username</th>
                                                        <th>Staff Names</th>
                                                        <th>Phone Number</th>
                                                        <th>Join Date</th>
                                                        <th>Role</th>
                                                        <th>Status</th>
                                                        <th class="text-end">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($gusers as $gu)
                                                    <tr class="single-item">

                                                        <td><a href="invoice-view.html" class="fw-bold">#{{str_pad($gu->id, 3, '0', STR_PAD_LEFT)}}</a></td>
                                                        <td class="fw-bold text-dark">{{$gu->uname}}</td>
                                                        <td>
                                                            <a href="javascript:void(0)" class="hstack gap-3">
                                                                <div class="avatar-image avatar-md">
                                                                    <img src="{{ asset('profiles/' . $gu->foth1) }}" alt="" class="img-fluid">
                                                                </div>
                                                                <div>
                                                                    <span class="text-truncate-1-line">{{ $gu->fname }}</span>
                                                                    <small class="fs-12 fw-normal text-muted">{{ $gu->email }}</small>
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td class="fw-bold text-dark">{{$gu->phone}}</td>
                                                        <td>{{ $gu->created_at->format('Y-m-d') }}</td>
                                                        <td><a href="javascript:void(0);">{{ $gu->role}}</a></td>
                                                        <td>
                                                            <div class="badge {{ $gu->status === 'Active' ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger' }}">
                                                                {{ $gu->status }}
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <a href="{{ route('view_user', $gu->id) }}" class="avatar-text avatar-md">
                                                                    <i class="feather feather-eye"></i>
                                                                </a>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                        <i class="feather feather-more-horizontal"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu">
                                                                        <li>
                                                                            <a class="dropdown-item" href="{{ route('view_user', $gu->id) }}">
                                                                                <i class="feather feather-edit-3 me-3"></i>
                                                                                <span>Edit</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li>
                                                                            <a class="dropdown-item" href="{{url('/delete_user/'.$gu->id)}}" onclick="return confirm('Are you sure you want to delete this user?');">
                                                                                <i class="feather feather-trash-2 me-3"></i>
                                                                                <span>Delete</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
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