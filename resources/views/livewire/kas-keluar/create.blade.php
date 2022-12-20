<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('kasKeluar.tanggal_transaksi') ? 'invalid' : '' }}">
        <label class="form-label required" for="tanggal_transaksi">{{ trans('cruds.kasKeluar.fields.tanggal_transaksi') }}</label>
        <x-date-picker class="form-control" required wire:model="kasKeluar.tanggal_transaksi" id="tanggal_transaksi" name="tanggal_transaksi" picker="date" />
        <div class="validation-message">
            {{ $errors->first('kasKeluar.tanggal_transaksi') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.kasKeluar.fields.tanggal_transaksi_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('kasKeluar.keterangan') ? 'invalid' : '' }}">
        <label class="form-label" for="keterangan">{{ trans('cruds.kasKeluar.fields.keterangan') }}</label>
        <input class="form-control" type="text" name="keterangan" id="keterangan" wire:model.defer="kasKeluar.keterangan">
        <div class="validation-message">
            {{ $errors->first('kasKeluar.keterangan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.kasKeluar.fields.keterangan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('kasKeluar.nominal_transaksi') ? 'invalid' : '' }}">
        <label class="form-label required" for="nominal_transaksi">{{ trans('cruds.kasKeluar.fields.nominal_transaksi') }}</label>
        <input class="form-control" type="number" name="nominal_transaksi" id="nominal_transaksi" required wire:model.defer="kasKeluar.nominal_transaksi" step="0.01">
        <div class="validation-message">
            {{ $errors->first('kasKeluar.nominal_transaksi') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.kasKeluar.fields.nominal_transaksi_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.kas-keluars.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>