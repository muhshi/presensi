<x-filament::page>
    <form wire:submit.prevent="save" class="space-y-6">
        {{ $this->form }}

        <div class="flex justify-start">
            <x-filament::button type="submit">
                Simpan
            </x-filament::button>
        </div>
    </form>

    <x-filament-actions::modals />
</x-filament::page>
