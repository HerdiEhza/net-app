@if(in_array($field, $orderable))
    @if($sortBy !== $field)
        <i wire:click="sortBy('{{ $field }}')" class="cursor-pointer fa fa-fw fa-sort" aria-hidden="true"></i>
    @elseif($sortBy === $field && $sortDirection == 'desc')
        <i wire:click="sortBy('{{ $field }}')" class="text-blue-500 cursor-pointer fa fa-fw fa-sort-down" aria-hidden="true"></i>
    @else
        <i wire:click="sortBy('{{ $field }}')" class="text-blue-500 cursor-pointer fa fa-fw fa-sort-up" aria-hidden="true"></i>
    @endif
@endif