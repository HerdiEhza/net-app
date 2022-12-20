<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('supportTicket.no_tiket') ? 'invalid' : '' }}">
        <label class="form-label" for="no_tiket">{{ trans('cruds.supportTicket.fields.no_tiket') }}</label>
        <input class="form-control" type="text" name="no_tiket" id="no_tiket" wire:model.defer="supportTicket.no_tiket">
        <div class="validation-message">
            {{ $errors->first('supportTicket.no_tiket') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.supportTicket.fields.no_tiket_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('supportTicket.tanggal') ? 'invalid' : '' }}">
        <label class="form-label" for="tanggal">{{ trans('cruds.supportTicket.fields.tanggal') }}</label>
        <x-date-picker class="form-control" wire:model="supportTicket.tanggal" id="tanggal" name="tanggal" />
        <div class="validation-message">
            {{ $errors->first('supportTicket.tanggal') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.supportTicket.fields.tanggal_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('supportTicket.pelanggan_id') ? 'invalid' : '' }}">
        <label class="form-label" for="pelanggan">{{ trans('cruds.supportTicket.fields.pelanggan') }}</label>
        <x-select-list class="form-control" id="pelanggan" name="pelanggan" :options="$this->listsForFields['pelanggan']" wire:model="supportTicket.pelanggan_id" />
        <div class="validation-message">
            {{ $errors->first('supportTicket.pelanggan_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.supportTicket.fields.pelanggan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('supportTicket.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.supportTicket.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="supportTicket.title">
        <div class="validation-message">
            {{ $errors->first('supportTicket.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.supportTicket.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('supportTicket.update') ? 'invalid' : '' }}">
        <label class="form-label" for="update">{{ trans('cruds.supportTicket.fields.update') }}</label>
        <x-date-picker class="form-control" wire:model="supportTicket.update" id="update" name="update" />
        <div class="validation-message">
            {{ $errors->first('supportTicket.update') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.supportTicket.fields.update_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('supportTicket.status') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.supportTicket.fields.status') }}</label>
        <select class="form-control" wire:model="supportTicket.status">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['status'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('supportTicket.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.supportTicket.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.support-tickets.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>