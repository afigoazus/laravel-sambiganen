<x-filament::page>
    <div class="space-y-6">
        <!-- Letter Deaths Table -->
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-lg font-semibold mb-2">Letter Death Records</h2>
            @livewire(\Filament\Tables\TableComponent::class, ['table' => $this->getLetterDeathsTable()])
        </div>

        <!-- Letter Incapacities Table -->
        <div class="p-4 bg-white shadow rounded-lg">
            <h2 class="text-lg font-semibold mb-2">Letter Incapacity Records</h2>
            @livewire(\Filament\Tables\TableComponent::class, ['table' => $this->getLetterIncapacitiesTable()])
        </div>
    </div>
</x-filament::page>