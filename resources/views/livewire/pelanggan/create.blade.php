<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('pelanggan.username') ? 'invalid' : '' }}">
        <label class="form-label required" for="username">{{ trans('cruds.pelanggan.fields.username') }}</label>
        <input class="form-control" type="text" name="username" id="username" required wire:model.defer="pelanggan.username">
        <div class="validation-message">
            {{ $errors->first('pelanggan.username') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.username_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.email') ? 'invalid' : '' }}">
        <label class="form-label required" for="email">{{ trans('cruds.pelanggan.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" required wire:model.defer="pelanggan.email">
        <div class="validation-message">
            {{ $errors->first('pelanggan.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.password') ? 'invalid' : '' }}">
        <label class="form-label required" for="password">{{ trans('cruds.pelanggan.fields.password') }}</label>
        <input class="form-control" type="password" name="password" id="password" required wire:model.defer="password">
        <div class="validation-message">
            {{ $errors->first('pelanggan.password') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.password_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.nama_lengkap') ? 'invalid' : '' }}">
        <label class="form-label required" for="nama_lengkap">{{ trans('cruds.pelanggan.fields.nama_lengkap') }}</label>
        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" required wire:model.defer="pelanggan.nama_lengkap">
        <div class="validation-message">
            {{ $errors->first('pelanggan.nama_lengkap') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.nama_lengkap_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.perusahaan') ? 'invalid' : '' }}">
        <label class="form-label" for="perusahaan">{{ trans('cruds.pelanggan.fields.perusahaan') }}</label>
        <input class="form-control" type="text" name="perusahaan" id="perusahaan" wire:model.defer="pelanggan.perusahaan">
        <div class="validation-message">
            {{ $errors->first('pelanggan.perusahaan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.perusahaan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.alamat') ? 'invalid' : '' }}">
        <label class="form-label required" for="alamat">{{ trans('cruds.pelanggan.fields.alamat') }}</label>
        <input class="form-control" type="text" name="alamat" id="alamat" required wire:model.defer="pelanggan.alamat">
        <div class="validation-message">
            {{ $errors->first('pelanggan.alamat') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.alamat_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.nomor_hp') ? 'invalid' : '' }}">
        <label class="form-label required" for="nomor_hp">{{ trans('cruds.pelanggan.fields.nomor_hp') }}</label>
        <input class="form-control" type="text" name="nomor_hp" id="nomor_hp" required wire:model.defer="pelanggan.nomor_hp">
        <div class="validation-message">
            {{ $errors->first('pelanggan.nomor_hp') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.nomor_hp_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.nomor_whatsapp') ? 'invalid' : '' }}">
        <label class="form-label" for="nomor_whatsapp">{{ trans('cruds.pelanggan.fields.nomor_whatsapp') }}</label>
        <input class="form-control" type="text" name="nomor_whatsapp" id="nomor_whatsapp" wire:model.defer="pelanggan.nomor_whatsapp">
        <div class="validation-message">
            {{ $errors->first('pelanggan.nomor_whatsapp') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.nomor_whatsapp_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.nomor_ktp') ? 'invalid' : '' }}">
        <label class="form-label" for="nomor_ktp">{{ trans('cruds.pelanggan.fields.nomor_ktp') }}</label>
        <input class="form-control" type="text" name="nomor_ktp" id="nomor_ktp" wire:model.defer="pelanggan.nomor_ktp">
        <div class="validation-message">
            {{ $errors->first('pelanggan.nomor_ktp') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.nomor_ktp_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.nomor_virtual_account') ? 'invalid' : '' }}">
        <label class="form-label" for="nomor_virtual_account">{{ trans('cruds.pelanggan.fields.nomor_virtual_account') }}</label>
        <input class="form-control" type="text" name="nomor_virtual_account" id="nomor_virtual_account" wire:model.defer="pelanggan.nomor_virtual_account">
        <div class="validation-message">
            {{ $errors->first('pelanggan.nomor_virtual_account') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.nomor_virtual_account_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.tanggal_pemasangan') ? 'invalid' : '' }}">
        <label class="form-label required" for="tanggal_pemasangan">{{ trans('cruds.pelanggan.fields.tanggal_pemasangan') }}</label>
        <x-date-picker class="form-control" required wire:model="pelanggan.tanggal_pemasangan" id="tanggal_pemasangan" name="tanggal_pemasangan" />
        <div class="validation-message">
            {{ $errors->first('pelanggan.tanggal_pemasangan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.tanggal_pemasangan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.lokasi_pemasangan') ? 'invalid' : '' }}">
        <label class="form-label required" for="lokasi_pemasangan">{{ trans('cruds.pelanggan.fields.lokasi_pemasangan') }}</label>
        <input class="form-control" type="text" name="lokasi_pemasangan" id="lokasi_pemasangan" required wire:model.defer="pelanggan.lokasi_pemasangan">
        <div class="validation-message">
            {{ $errors->first('pelanggan.lokasi_pemasangan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.lokasi_pemasangan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.reseller') ? 'invalid' : '' }}">
        <label class="form-label" for="reseller">{{ trans('cruds.pelanggan.fields.reseller') }}</label>
        <input class="form-control" type="text" name="reseller" id="reseller" wire:model.defer="pelanggan.reseller">
        <div class="validation-message">
            {{ $errors->first('pelanggan.reseller') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.reseller_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pelanggan.catatan') ? 'invalid' : '' }}">
        <label class="form-label" for="catatan">{{ trans('cruds.pelanggan.fields.catatan') }}</label>
        <input class="form-control" type="text" name="catatan" id="catatan" wire:model.defer="pelanggan.catatan">
        <div class="validation-message">
            {{ $errors->first('pelanggan.catatan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pelanggan.fields.catatan_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.pelanggans.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>