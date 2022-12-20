<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('pushNotification.waktu_dikirim') ? 'invalid' : '' }}">
        <label class="form-label required" for="waktu_dikirim">{{ trans('cruds.pushNotification.fields.waktu_dikirim') }}</label>
        <x-date-picker class="form-control" required wire:model="pushNotification.waktu_dikirim" id="waktu_dikirim" name="waktu_dikirim" />
        <div class="validation-message">
            {{ $errors->first('pushNotification.waktu_dikirim') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pushNotification.fields.waktu_dikirim_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pushNotification.judul') ? 'invalid' : '' }}">
        <label class="form-label" for="judul">{{ trans('cruds.pushNotification.fields.judul') }}</label>
        <input class="form-control" type="text" name="judul" id="judul" wire:model.defer="pushNotification.judul">
        <div class="validation-message">
            {{ $errors->first('pushNotification.judul') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pushNotification.fields.judul_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('pushNotification.isi_notifikasi') ? 'invalid' : '' }}">
        <label class="form-label" for="isi_notifikasi">{{ trans('cruds.pushNotification.fields.isi_notifikasi') }}</label>
        <input class="form-control" type="text" name="isi_notifikasi" id="isi_notifikasi" wire:model.defer="pushNotification.isi_notifikasi">
        <div class="validation-message">
            {{ $errors->first('pushNotification.isi_notifikasi') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.pushNotification.fields.isi_notifikasi_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="mr-2 btn btn-indigo" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.push-notifications.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>