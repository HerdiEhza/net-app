<div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-{{ $attributes['variant'] }}-500">
    <span class="inline-block mr-5 text-xl align-middle">
        <i class="fas fa-bell"></i>
    </span>
    <span class="inline-block mr-8 align-middle">
        {{ $attributes['message'] }}
    </span>
    <button class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none" onclick="closeAlert(event)">
        <span>×</span>
    </button>
</div>