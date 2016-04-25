@extends('layouts.back')
@section('title')
<title>Hosting | MakassarNetwork</title>
@endsection

@section('content')
<div class="warper container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Hosting</div>
                <div class="panel-body">
                    {!! Form::open(array('url' => 'hosting')) !!}
                        <div class="form-group">
                            <label class="control-label">Kategori</label>
                            <select name="category" class="form-control" required>
                                <option value=""></option>
                                <option value="pelajar">Pelajar</option>
                                <option value="personal">Personal</option>
                                <option value="extra">Extra Host</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Product</label>
                            <input type="text" class="form-control" name="name" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Monthly</label>
                            <input type="number" class="form-control" name="monthly" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Semi Annually</label>
                            <input type="number" class="form-control" name="semi_annually" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Annually</label>
                            <input type="number" class="form-control" name="annually" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Space</label>
                            <input type="text" class="form-control" name="space" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Bandwith</label>
                            <input type="text" class="form-control" name="bandwith" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Addon Domain</label>
                            <input type="text" class="form-control" name="addon_domain" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email Hosting</label>
                            <input type="text" class="form-control" name="email_hosting" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Railgun</label>
                            <input type="text" class="form-control" name="railgun" value="Include" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Backup</label>
                            <input type="text" class="form-control" name="backup" value="Weekly" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Link</label>
                            <input type="link" class="form-control" name="link" />
                        </div>   
                        <hr class="dotted">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="tambah" value="Add">Simpan</button>
                            <a href="product.php"><button type="button" class="btn btn-info" id="resetBtn">Reset</button></a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>       
    </div>
</div>
@endsection