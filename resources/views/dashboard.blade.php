<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="height: 24rem;">
                    <livewire:livewire-column-chart
                        key="{{ $columnChartModel->reactiveKey() }}"
                        :column-chart-model="$columnChartModel"
                    />
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    @parent
    @livewireChartsScripts
    @endsection
</x-app-layout>
