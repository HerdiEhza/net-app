<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('paket.id_tagihan') ? 'invalid' : '' }}">
        <label class="form-label required" for="id_tagihan">{{ trans('cruds.paket.fields.id_tagihan') }}</label>
        <input class="form-control" type="text" name="id_tagihan" id="id_tagihan" required wire:model.defer="paket.id_tagihan">
        <div class="validation-message">
            {{ $errors->first('paket.id_tagihan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.paket.fields.id_tagihan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('paket.nama_paket') ? 'invalid' : '' }}">
        <label class="form-label required" for="nama_paket">{{ trans('cruds.paket.fields.nama_paket') }}</label>
        <input class="form-control" type="text" name="nama_paket" id="nama_paket" required wire:model.defer="paket.nama_paket">
        <div class="validation-message">
            {{ $errors->first('paket.nama_paket') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.paket.fields.nama_paket_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('paket.tarif') ? 'invalid' : '' }}">
        <label class="form-label" for="tarif">{{ trans('cruds.paket.fields.tarif') }}</label>
        <input class="form-control" type="number" name="tarif" id="tarif" wire:model.defer="paket.tarif" step="0.01">
        <div class="validation-message">
            {{ $errors->first('paket.tarif') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.paket.fields.tarif_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('paket.cycle') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.paket.fields.cycle') }}</label>
        <select class="form-control" wire:model="paket.cycle">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['cycle'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('paket.cycle') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.paket.fields.cycle_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.pakets.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>