@extends('admin.layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td field-key='role'>{{ $user->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td field-key='role'>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td field-key='role'>{{ $user->country }}</td>
                        </tr>
                        <tr>
                            <th>State</th>
                            <td field-key='role'>{{ $user->state }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td field-key='role'>{{ $user->city }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop


