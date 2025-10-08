@extends('admin.main')
@section('title', 'Buttons')
@section('content')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Buttons </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Buttons</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Gradient buttons</h4>
                        <p class="card-description">Add class <code>.btn-gradient-{color}</code> for gradient buttons
                        </p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-gradient-primary btn-fw">Primary</button>
                            <button type="button" class="btn btn-gradient-secondary btn-fw">Secondary</button>
                            <button type="button" class="btn btn-gradient-success btn-fw">Success</button>
                            <button type="button" class="btn btn-gradient-danger btn-fw">Danger</button>
                            <button type="button" class="btn btn-gradient-warning btn-fw">Warning</button>
                            <button type="button" class="btn btn-gradient-info btn-fw">Info</button>
                            <button type="button" class="btn btn-gradient-light btn-fw">Light</button>
                            <button type="button" class="btn btn-gradient-dark btn-fw">Dark</button>
                            <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Rounded buttons</h4>
                        <p class="card-description">Add class <code>.btn-rounded</code></p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-gradient-primary btn-rounded btn-fw">Primary</button>
                            <button type="button" class="btn btn-gradient-secondary btn-rounded btn-fw">Secondary
                            </button>
                            <button type="button" class="btn btn-gradient-success btn-rounded btn-fw">Success</button>
                            <button type="button" class="btn btn-gradient-danger btn-rounded btn-fw">Danger</button>
                            <button type="button" class="btn btn-gradient-warning btn-rounded btn-fw">Warning</button>
                            <button type="button" class="btn btn-gradient-info btn-rounded btn-fw">Info</button>
                            <button type="button" class="btn btn-gradient-light btn-rounded btn-fw">Light</button>
                            <button type="button" class="btn btn-gradient-dark btn-rounded btn-fw">Dark</button>
                            <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Outlined buttons</h4>
                        <p class="card-description">Add class <code>.btn-outline-{color}</code> for outline buttons</p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-outline-primary btn-fw">Primary</button>
                            <button type="button" class="btn btn-outline-secondary btn-fw">Secondary</button>
                            <button type="button" class="btn btn-outline-success btn-fw">Success</button>
                            <button type="button" class="btn btn-outline-danger btn-fw">Danger</button>
                            <button type="button" class="btn btn-outline-warning btn-fw">Warning</button>
                            <button type="button" class="btn btn-outline-info btn-fw">Info</button>
                            <button type="button" class="btn btn-outline-light text-black btn-fw">Light</button>
                            <button type="button" class="btn btn-outline-dark btn-fw">Dark</button>
                            <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Single color buttons</h4>
                        <p class="card-description">Add class <code>.btn-{color}</code> for buttons in theme colors</p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-primary btn-fw">Primary</button>
                            <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
                            <button type="button" class="btn btn-success btn-fw">Success</button>
                            <button type="button" class="btn btn-danger btn-fw">Danger</button>
                            <button type="button" class="btn btn-warning btn-fw">Warning</button>
                            <button type="button" class="btn btn-info btn-fw">Info</button>
                            <button type="button" class="btn btn-light btn-fw">Light</button>
                            <button type="button" class="btn btn-dark btn-fw">Dark</button>
                            <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Inverse buttons</h4>
                        <p class="card-description">Add class <code>.btn-inverse-{color} for inverse buttons</code></p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
                            <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
                            <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
                            <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
                            <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
                            <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
                            <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
                            <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
                            <button type="button" class="btn btn-link btn-fw">Link</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Normal buttons</h4>
                        <p class="card-description">Use any of the available button classes to quickly create a styled
                            button. </p>
                        <div class="template-demo">
                            <button type="button" class="btn btn-gradient-primary">Primary</button>
                            <button type="button" class="btn btn-gradient-secondary">Secondary</button>
                            <button type="button" class="btn btn-gradient-success">Success</button>
                            <button type="button" class="btn btn-gradient-danger">Danger</button>
                            <button type="button" class="btn btn-gradient-warning">Warning</button>
                            <button type="button" class="btn btn-gradient-info">Info</button>
                            <button type="button" class="btn btn-gradient-light">Light</button>
                            <button type="button" class="btn btn-gradient-dark">Dark</button>
                            <button type="button" class="btn btn-link">Link</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
