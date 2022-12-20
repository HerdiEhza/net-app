@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="bg-white card">
        <div class="border-b card-header border-blueGray-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.supportTicket.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('support_ticket_create')
                    <a class="btn btn-indigo" href="{{ route('admin.support-tickets.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.supportTicket.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('support-ticket.index')

    </div>
</div>
@endsection