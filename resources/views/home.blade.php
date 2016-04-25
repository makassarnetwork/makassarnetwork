@extends('layouts.back')
@section('title')
<title>Dashboard | MakassarNetwork</title>
@endsection
@section('content')
<div class="warper container-fluid">
    <div class="page-header"><h1>Dashboard <small>Let's get a quick overview...</small></h1></div>
            
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="panel panel-default clearfix dashboard-stats rounded">
                <a href="server.php"><span id="dashboard-stats-sparkline1" class="sparkline transit"></span>
                <i class="fa fa-server bg-danger transit stats-icon"></i>
                <h3 class="transit">0
                <small class="text-green"><i class="fa fa-caret-up"></i> </small></h3>
                <p class="text-muted transit">Slider</p></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="account.php"><div class="panel panel-default clearfix dashboard-stats rounded">
            <span id="dashboard-stats-sparkline2" class="sparkline transit"></span>
            <i class="fa fa-tags bg-info transit stats-icon"></i>
            <h3 class="transit">0<small class="text-red"><i class="fa fa-caret-up"></i> </small></h3>
            <p class="text-muted transit">Product</p></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
        <div class="panel panel-default clearfix dashboard-stats rounded">
            <a href="user.php"><span id="dashboard-stats-sparkline3" class="sparkline transit"></span>
            <i class="fa fa-user bg-success transit stats-icon"></i>
            <h3 class="transit">0 <small class="text-green"><i class="fa fa-caret-up"></i> </small></h3>
            <p class="text-muted transit">Domains</p></a>
            </div>
        </div>
                                    
    </div>       
</div>
@endsection
