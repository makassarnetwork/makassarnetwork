@extends('layouts.back')
@section('title')
<title>Domain | MakassarNetwork</title>
@endsection

@section('content')
<div class="warper container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Data Domain</div>
                <div class="panel-body">
                    {!! Form::open(array('url' => 'domain')) !!}
                        <div class="form-group">
                            <label class="control-label">Kategori</label>
                            <select name="category" class="form-control" required>
                                <option value=""></option>
                                <option value="indonesia">Indonesia</option>
                                <option value="internasional">Internasional</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Domain</label>
                            <input type="text" class="form-control" name="name" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Registration</label>
                            <input type="number" class="form-control" name="registration" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Renewal</label>
                            <input type="number" class="form-control" name="renewal" required />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Transfer</label>
                            <input type="number" class="form-control" name="transfer" required />
                        </div>
                        <hr class="dotted">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="tambah" value="Add">Simpan</button>
                            <button type="reset" class="btn btn-info" id="resetBtn">Reset</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>       
    </div>
</div>
@endsection