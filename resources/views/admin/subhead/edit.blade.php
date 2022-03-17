@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Edit SubHead</h3>
    
    {!! Form::model($subcategory, ['method' => 'PUT', 'route' => ['admin.subhead.update', $subcategory->id],'enctype'=>'multipart/form-data']) !!}

    {!! Form::open(['method' => 'POST', 'route' => ['admin.subhead.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>

        <div class="panel-body">



            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cat_id', 'Head', ['class' => 'col-md-2  control-label']) !!}
                    <div class="col-md-7">
                    {!! Form::select('cat_id', $category, old('cat_id'), ['class' => 'form-control', 'required' => '']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <label class="col-md-2 control-label">SubHead Name</label>
                    <div class="col-md-7">
                        <input type="text" name="name" id="subcategoryname" value="{{$subcategory->name}}" class="form-control" placeholder="Enter title" required>
                        <?php //echo form_error('name'); ?>
                    </div>
                </div>
            </div>


   

        </div>
    </div>
    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop



