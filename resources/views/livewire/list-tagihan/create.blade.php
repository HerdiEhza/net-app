<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('listTagihan.nama_pelanggan_id') ? 'invalid' : '' }}">
        <label class="form-label" for="nama_pelanggan">{{ trans('cruds.listTagihan.fields.nama_pelanggan') }}</label>
        <x-select-list class="form-control" id="nama_pelanggan" name="nama_pelanggan" :options="$this->listsForFields['nama_pelanggan']" wire:model="listTagihan.nama_pelanggan_id" />
        <div class="validation-message">
            {{ $errors->first('listTagihan.nama_pelanggan_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listTagihan.fields.nama_pelanggan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listTagihan.alamat_pelanggan_id') ? 'invalid' : '' }}">
        <label class="form-label" for="alamat_pelanggan">{{ trans('cruds.listTagihan.fields.alamat_pelanggan') }}</label>
        <x-select-list class="form-control" id="alamat_pelanggan" name="alamat_pelanggan" :options="$this->listsForFields['alamat_pelanggan']" wire:model="listTagihan.alamat_pelanggan_id" />
        <div class="validation-message">
            {{ $errors->first('listTagihan.alamat_pelanggan_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listTagihan.fields.alamat_pelanggan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listTagihan.produk_id') ? 'invalid' : '' }}">
        <label class="form-label" for="produk">{{ trans('cruds.listTagihan.fields.produk') }}</label>
        <x-select-list class="form-control" id="produk" name="produk" :options="$this->listsForFields['produk']" wire:model="listTagihan.produk_id" />
        <div class="validation-message">
            {{ $errors->first('listTagihan.produk_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listTagihan.fields.produk_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listTagihan.harga_id') ? 'invalid' : '' }}">
        <label class="form-label" for="harga">{{ trans('cruds.listTagihan.fields.harga') }}</label>
        <x-select-list class="form-control" id="harga" name="harga" :options="$this->listsForFields['harga']" wire:model="listTagihan.harga_id" />
        <div class="validation-message">
            {{ $errors->first('listTagihan.harga_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listTagihan.fields.harga_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listTagihan.jatuh_tempo') ? 'invalid' : '' }}">
        <label class="form-label" for="jatuh_tempo">{{ trans('cruds.listTagihan.fields.jatuh_tempo') }}</label>
        <x-date-picker class="form-control" wire:model="listTagihan.jatuh_tempo" id="jatuh_tempo" name="jatuh_tempo" />
        <div class="validation-message">
            {{ $errors->first('listTagihan.jatuh_tempo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listTagihan.fields.jatuh_tempo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listTagihan.pesan') ? 'invalid' : '' }}">
        <label class="form-label" for="pesan">{{ trans('cruds.listTagihan.fields.pesan') }}</label>
        <input class="form-control" type="text" name="pesan" id="pesan" wire:model.defer="listTagihan.pesan">
        <div class="validation-message">
            {{ $errors->first('listTagihan.pesan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listTagihan.fields.pesan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listTagihan.status') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.listTagihan.fields.status') }}</label>
        <select class="form-control" wire:model="listTagihan.status">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['status'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('listTagihan.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listTagihan.fields.status_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.list-tagihans.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>