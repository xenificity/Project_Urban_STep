@inject('request', 'Illuminate\Http\Request')
@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">Update Us Master List</h3>

    <p>
        <a href="{{ route('admin.updateusmaster.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                <thead>
                    <tr>
                        <th>S.NO.</th>
                        <th>ID</th>
                        <th>Category</th>
                        <th> SubCategory Name</th>
                        <th>Updateus</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                
                <tbody>
                   
                        <?php $i=1;?>
                        @foreach ($results as $user)
                            <?php $catName = \App\UpdateusCategory::where('id',$user->cat_id)->first();
                            $subcatName = \App\UpdateusSubCategory::where('id',$user->sub_cat_id)->first();
                            ?>
                            <tr data-entry-id="{{ $user->id }}">
                                <td>{{ $i }}</td>
                                <td>{{ $user->code }}</td>
                                <td field-key='categoryname'>{{ $catName->name }}</td>
                                <td field-key='subcategoryname'>{{ $subcatName->name }}</td>
                                <td field-key='categoryname'>{{ $user->name }}</td>
                                <td>
                                    <a href="{{ route('admin.updateusmaster.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.updateusmaster.destroy', $user->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}

                                    @if($user->status != 1)
                                        <a href="{{url('admin/updateusmasters/active/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To Active This category')){ return false}"
                                           class="btn btn-xs btn-danger" data-toggle="tooltip" >In-Active</a>
                                    @else
                                        <a href="{{url('admin/updateusmasters/inactive/'.$user->id)}}"
                                           onclick="if(! confirm('Click Ok To InActivate This category')){ return false}"
                                           class="btn btn-xs btn-success" data-toggle="tooltip" >Active</a>
                                    @endif
                                </td>
                            </tr>
                            <?php $i++;?>
                        @endforeach
                   
                </tbody>
            </table>
        </div>


@stop

@section('javascript')
@endsection