@props(['page','menu'])

<div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>{{ $menu }}
                <small class="text-muted">Welcome to 1BlockGhana</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">                
                <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> 1BlockGhana</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $page }}</a></li>
                    <li class="breadcrumb-item active">{{ $menu }}</li>
                </ul>                
            </div>
        </div>
    </div>