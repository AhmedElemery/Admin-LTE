@extends('admin.index')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">Admin Panel</h2>
    </div>
    <div class="box-body">
        {!! $dataTable->table([
            'class' => 'dataTable table table-hover table-striped table-bordered'
        ],true) !!}
    </div>
</div>

@push('js')
{!! $dataTable->scripts() !!}

@endpush

@endsection
