@extends('admin.main')
@section('title', 'Drop Downs')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Dropdowns</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Dropdowns</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gradient Dropdown</h4>
                        <p class="card-description"> Add class <code>.btn-gradient-{color}</code> to the button inside
                            <code>.dropdown</code>
                        </p>
                        <div class="template-demo">
                            <div class="dropdown">
                                <button class="btn btn-gradient-primary dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton1" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-gradient-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton2" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton2">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-gradient-danger dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton3">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-gradient-warning dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton4" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton4">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-gradient-success dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton5">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-gradient-info dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton6" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton6">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Basic dropdown</h4>
                        <p class="card-description"> Wrap the dropdown’s toggle (your button or link) and the dropdown
                            menu within <code>.dropdown</code>
                        </p>
                        <div class="template-demo">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton3"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton4"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton5"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton6"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Dropdown outline</h4>
                        <p class="card-description"> Add class <code>.btn-outline-{color}</code> to the button inside
                            <code>.dropdown</code>
                        </p>
                        <div class="template-demo">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton1" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton1">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton2" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton2">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton3">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-warning dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton4" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton4">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-success dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton5">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-info dropdown-toggle" type="button"
                                        id="dropdownMenuOutlineButton6" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"> Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOutlineButton6">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
