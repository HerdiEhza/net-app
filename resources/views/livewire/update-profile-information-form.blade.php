<div>
    <h6 class="mt-3 mb-6 text-sm font-bold uppercase text-blueGray-400">
        {{ __('global.profile_information') }}
    </h6>

    <div class="flex flex-wrap">
        <form wire:submit.prevent="updateProfileInformation" class="w-full">
            <div class="px-4 form-group">
                <label class="form-label" for="name">{{ __('global.user_name') }}</label>
                <input class="form-control" id="name" type="text" wire:model.defer="state.name" autocomplete="name">
                @error('state.name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="px-4 form-group">
                <label class="form-label" for="email">{{ __('global.login_email') }}</label>
                <input class="form-control" id="email" type="text" wire:model.defer="state.email" autocomplete="email">
                @error('state.email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center px-4 form-group">
                <button class="mr-3 btn btn-indigo">
                    {{ __('global.save') }}
                </button>

                <div x-data="{ shown: false, timeout: null }" x-init="@this.on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000);  })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms class="text-sm" style="display: none;">
                    {{ __('global.saved') }}
                </div>

            </div>
        </form>
    </div>
</div>