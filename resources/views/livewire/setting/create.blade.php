<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('setting.nama_usaha') ? 'invalid' : '' }}">
        <label class="form-label" for="nama_usaha">{{ trans('cruds.setting.fields.nama_usaha') }}</label>
        <input class="form-control" type="text" name="nama_usaha" id="nama_usaha" wire:model.defer="setting.nama_usaha">
        <div class="validation-message">
            {{ $errors->first('setting.nama_usaha') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.nama_usaha_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.admin_email') ? 'invalid' : '' }}">
        <label class="form-label" for="admin_email">{{ trans('cruds.setting.fields.admin_email') }}</label>
        <input class="form-control" type="email" name="admin_email" id="admin_email" wire:model.defer="setting.admin_email">
        <div class="validation-message">
            {{ $errors->first('setting.admin_email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.admin_email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.nama_usaha_singkat') ? 'invalid' : '' }}">
        <label class="form-label" for="nama_usaha_singkat">{{ trans('cruds.setting.fields.nama_usaha_singkat') }}</label>
        <input class="form-control" type="text" name="nama_usaha_singkat" id="nama_usaha_singkat" wire:model.defer="setting.nama_usaha_singkat">
        <div class="validation-message">
            {{ $errors->first('setting.nama_usaha_singkat') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.nama_usaha_singkat_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.alamat_usaha') ? 'invalid' : '' }}">
        <label class="form-label" for="alamat_usaha">{{ trans('cruds.setting.fields.alamat_usaha') }}</label>
        <input class="form-control" type="text" name="alamat_usaha" id="alamat_usaha" wire:model.defer="setting.alamat_usaha">
        <div class="validation-message">
            {{ $errors->first('setting.alamat_usaha') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.alamat_usaha_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.no_hp') ? 'invalid' : '' }}">
        <label class="form-label" for="no_hp">{{ trans('cruds.setting.fields.no_hp') }}</label>
        <input class="form-control" type="number" name="no_hp" id="no_hp" wire:model.defer="setting.no_hp" step="1">
        <div class="validation-message">
            {{ $errors->first('setting.no_hp') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.no_hp_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.no_whatsapp') ? 'invalid' : '' }}">
        <label class="form-label" for="no_whatsapp">{{ trans('cruds.setting.fields.no_whatsapp') }}</label>
        <input class="form-control" type="number" name="no_whatsapp" id="no_whatsapp" wire:model.defer="setting.no_whatsapp" step="1">
        <div class="validation-message">
            {{ $errors->first('setting.no_whatsapp') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.no_whatsapp_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.email_perusahaan') ? 'invalid' : '' }}">
        <label class="form-label" for="email_perusahaan">{{ trans('cruds.setting.fields.email_perusahaan') }}</label>
        <input class="form-control" type="email" name="email_perusahaan" id="email_perusahaan" wire:model.defer="setting.email_perusahaan">
        <div class="validation-message">
            {{ $errors->first('setting.email_perusahaan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.email_perusahaan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.rekening_bank') ? 'invalid' : '' }}">
        <label class="form-label" for="rekening_bank">{{ trans('cruds.setting.fields.rekening_bank') }}</label>
        <input class="form-control" type="text" name="rekening_bank" id="rekening_bank" wire:model.defer="setting.rekening_bank">
        <div class="validation-message">
            {{ $errors->first('setting.rekening_bank') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.rekening_bank_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.ppn') ? 'invalid' : '' }}">
        <label class="form-label" for="ppn">{{ trans('cruds.setting.fields.ppn') }}</label>
        <input class="form-control" type="number" name="ppn" id="ppn" wire:model.defer="setting.ppn" step="1">
        <div class="validation-message">
            {{ $errors->first('setting.ppn') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.ppn_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.tanggal_jatuh_tempo') ? 'invalid' : '' }}">
        <label class="form-label" for="tanggal_jatuh_tempo">{{ trans('cruds.setting.fields.tanggal_jatuh_tempo') }}</label>
        <x-date-picker class="form-control" wire:model="setting.tanggal_jatuh_tempo" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo" picker="date" />
        <div class="validation-message">
            {{ $errors->first('setting.tanggal_jatuh_tempo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.tanggal_jatuh_tempo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.use_logo') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.setting.fields.use_logo') }}</label>
        @foreach($this->listsForFields['use_logo'] as $key => $value)
            <label class="radio-label"><input type="radio" name="use_logo" wire:model="setting.use_logo" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('setting.use_logo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.use_logo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.setting_logo') ? 'invalid' : '' }}">
        <label class="form-label" for="logo">{{ trans('cruds.setting.fields.logo') }}</label>
        <x-dropzone id="logo" name="logo" action="{{ route('admin.settings.storeMedia') }}" collection-name="setting_logo" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.setting_logo') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.logo_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.unique_code') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.setting.fields.unique_code') }}</label>
        <select class="form-control" wire:model="setting.unique_code">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['unique_code'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('setting.unique_code') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.unique_code_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.biaya_admin') ? 'invalid' : '' }}">
        <label class="form-label" for="biaya_admin">{{ trans('cruds.setting.fields.biaya_admin') }}</label>
        <input class="form-control" type="number" name="biaya_admin" id="biaya_admin" wire:model.defer="setting.biaya_admin" step="1">
        <div class="validation-message">
            {{ $errors->first('setting.biaya_admin') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.biaya_admin_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.map_center') ? 'invalid' : '' }}">
        <label class="form-label" for="map_center">{{ trans('cruds.setting.fields.map_center') }}</label>
        <input class="form-control" type="text" name="map_center" id="map_center" wire:model.defer="setting.map_center">
        <div class="validation-message">
            {{ $errors->first('setting.map_center') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.map_center_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.pesan_wa_tagihan') ? 'invalid' : '' }}">
        <label class="form-label" for="pesan_wa_tagihan">{{ trans('cruds.setting.fields.pesan_wa_tagihan') }}</label>
        <input class="form-control" type="text" name="pesan_wa_tagihan" id="pesan_wa_tagihan" wire:model.defer="setting.pesan_wa_tagihan">
        <div class="validation-message">
            {{ $errors->first('setting.pesan_wa_tagihan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.pesan_wa_tagihan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.pesan_tagihan_lunas') ? 'invalid' : '' }}">
        <label class="form-label" for="pesan_tagihan_lunas">{{ trans('cruds.setting.fields.pesan_tagihan_lunas') }}</label>
        <input class="form-control" type="text" name="pesan_tagihan_lunas" id="pesan_tagihan_lunas" wire:model.defer="setting.pesan_tagihan_lunas">
        <div class="validation-message">
            {{ $errors->first('setting.pesan_tagihan_lunas') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.pesan_tagihan_lunas_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.teks_login') ? 'invalid' : '' }}">
        <label class="form-label" for="teks_login">{{ trans('cruds.setting.fields.teks_login') }}</label>
        <input class="form-control" type="text" name="teks_login" id="teks_login" wire:model.defer="setting.teks_login">
        <div class="validation-message">
            {{ $errors->first('setting.teks_login') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.teks_login_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.editor_tagihan') ? 'invalid' : '' }}">
        <label class="form-label" for="editor_tagihan">{{ trans('cruds.setting.fields.editor_tagihan') }}</label>
        <input class="form-control" type="text" name="editor_tagihan" id="editor_tagihan" wire:model.defer="setting.editor_tagihan">
        <div class="validation-message">
            {{ $errors->first('setting.editor_tagihan') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.editor_tagihan_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.format_print_pos') ? 'invalid' : '' }}">
        <label class="form-label" for="format_print_pos">{{ trans('cruds.setting.fields.format_print_pos') }}</label>
        <input class="form-control" type="text" name="format_print_pos" id="format_print_pos" wire:model.defer="setting.format_print_pos">
        <div class="validation-message">
            {{ $errors->first('setting.format_print_pos') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.format_print_pos_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>