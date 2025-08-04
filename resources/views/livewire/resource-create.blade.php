<div class="w-full pt-6">
    <x-filament-actions::group :actions="[
            $this->createCustomerAction,
        ]"
        label="Create Customer"
        icon="heroicon-m-plus"
        color="primary"
        size="md"
        tooltip="Create a new customer"
        {{-- dropdown --}}
        dropdown-placement="middle-end"
        {{-- button --}}
        {{-- badge --}}
        link
    />

    <x-filament-actions::modals />
</div>
