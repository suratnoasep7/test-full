@extends('layouts.admin')
@section('content')

<style type="text/css">
    .table td, .table th {
        width: 50%;
    }
</style>

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.category.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.category.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            {{ trans('cruds.category.fields.id') }}
                        </td>
                        <td>
                            {{ $category->id }}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{ trans('cruds.category.fields.name') }}
                        </td>
                        <td>
                            {{ $category->name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.category.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection