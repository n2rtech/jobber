<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Survey Form</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">


    @yield('head')
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body p-0">
                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#general-information-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="general-information-part" id="general-information-part-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label">General Information</span>
                                    </button>
                                </div>

                                <div class="step" data-target="#dwelling-information-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="dwelling-information-part"
                                        id="dwelling-information-part-trigger">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label">Dwelling Information</span>
                                    </button>
                                </div>

                                <div class="step" data-target="#dwelling-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="dwelling-part" id="dwelling-part-trigger">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label">Dwelling</span>
                                    </button>
                                </div>

                                <div class="step" data-target="#tv-satellite-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="tv-satellite-part" id="tv-satellite-part-trigger">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label">TV & Satellite</span>
                                    </button>
                                </div>

                                <div class="step" data-target="#wifi-internet-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="wifi-internet-part" id="wifi-internet-part-trigger">
                                        <span class="bs-stepper-circle">5</span>
                                        <span class="bs-stepper-label">WiFi & Internet</span>
                                    </button>
                                </div>

                                <div class="step" data-target="#multiroom-music-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="multiroom-music-part" id="multiroom-music-part-trigger">
                                        <span class="bs-stepper-circle">6</span>
                                        <span class="bs-stepper-label">Multiroom Music</span>
                                    </button>
                                </div>

                                <div class="step" data-target="#mobilephone-repeaters-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="mobilephone-repeaters-part"
                                        id="mobilephone-repeaters-part-trigger">
                                        <span class="bs-stepper-circle">7</span>
                                        <span class="bs-stepper-label">Mobile Phone Repeaters</span>
                                    </button>
                                </div>

                                <div class="step" data-target="#others-part">
                                    <button type="button" class="step-trigger" role="tab"
                                        aria-controls="others-part" id="others-part-trigger">
                                        <span class="bs-stepper-circle">8</span>
                                        <span class="bs-stepper-label">Others</span>
                                    </button>
                                </div>


                            </div>
                            <div class="bs-stepper-content">
                                <!-- your steps content here -->
                                <div id="general-information-part" class="content" role="tabpanel"
                                    aria-labelledby="general-information-part-trigger">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password">
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>
                                <div id="dwelling-information-part" class="content" role="tabpanel"
                                    aria-labelledby="dwelling-information-part-trigger">
                                    <div class="form-group">
                                        <p>We need to gather some information on your new home. Click NEXT to continue.
                                        </p>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>
                                <div id="dwelling-part" class="content" role="tabpanel"
                                    aria-labelledby="dwelling-part-trigger">
                                    <div class="form-group">
                                        <p>Dwelling Form here</p>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>
                                <div id="tv-satellite-part" class="content" role="tabpanel"
                                    aria-labelledby="tv-satellite-part-trigger">
                                    <div class="form-group">
                                        <p>TV & Satellite Form here</p>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>
                                <div id="wifi-internet-part" class="content" role="tabpanel"
                                    aria-labelledby="wifi-internet-part-trigger">
                                    <div class="form-group">
                                        <p>Wifi & Internet Form here</p>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>
                                <div id="multiroom-music-part" class="content" role="tabpanel"
                                    aria-labelledby="multiroom-music-part-trigger">
                                    <div class="form-group">
                                        <p>Multiroom Music form here Form here</p>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>
                                <div id="mobilephone-repeaters-part" class="content" role="tabpanel"
                                    aria-labelledby="mobilephone-repeaters-part-trigger">
                                    <div class="form-group">
                                        <p>Mobile Phone Repeater form here Form here</p>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                                </div>
                                <div id="others-part" class="content" role="tabpanel"
                                    aria-labelledby="others-part-trigger">
                                    <div class="form-group">
                                        <p>Others</p>
                                    </div>
                                    <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
    @include('sections.scripts')
    <script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script>
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>
</body>

</html>
