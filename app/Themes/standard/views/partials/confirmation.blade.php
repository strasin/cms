<x-modal id="confirmation-dialog" :title="__('def.are_you_sure')" :closeOnOverlay="false">
    <div class="confirmation-dialog__icon" id="confirmation-dialog-icon">
        <x-icon path="ph.regular.x-circle" class="icon-error" style="display: none;" />
        <x-icon path="ph.regular.check-circle" class="icon-success" style="display: none;" />
        <x-icon path="ph.regular.info" class="icon-info" style="display: none;" />
        <x-icon path="ph.regular.warning-circle" class="icon-warning" style="display: none;" />
    </div>

    <p id="confirmation-dialog-message" class="text-center">
    </p>

    <x-slot name="footer" hx-swap="morph">
        <div class="d-flex justify-content-end align-items-center gap-3">
            <x-button class="w-100" type="outline-primary" id="confirmation-dialog-cancel" autofocus
                data-a11y-dialog-hide>
                {{ __('def.cancel') }}
            </x-button>
            <x-button class="w-100" type="error" id="confirmation-dialog-confirm">
                {{ __('def.confirm') }}
            </x-button>
        </div>
    </x-slot>
</x-modal>