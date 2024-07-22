<?php

namespace App\Livewire;

use App\Models\References;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class ReferencesTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            // Exportable::make('export')
            //     ->striped()
            //     ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return References::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('parent_id', function ($reference) {
                $category = '-';
                $ref = References::find($reference->parent_id);
                if (!is_null($ref)) {
                    $category = $ref->description;
                }

                return $category;
            })
            ->add('description');
    }

    public function columns(): array
    {
        return [
            Column::make('Category', 'parent_id')
                ->searchable()
                ->sortable(),
                // ->editOnClick(hasPermission: true),
            Column::make('Description', 'description')
                ->sortable()
                ->editOnClick(hasPermission: true)
                ->searchable(),


            // Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [];
    }

    // #[\Livewire\Attributes\On('edit')]
    // public function edit($rowId): void
    // {
    //     $this->js('alert(' . $rowId . ')');
    // }

    // public function actions(References $row): array
    // {
    //     return [
    //         Button::add('edit')
    //             ->slot('Edit')
    //             ->class('text-xs font-normal cursor-pointer border-0 rounded-md bg-[#D69595] px-3 py-1.5 text-rose-950 hover:text-[#F7F0F0]')
    //     ];
    // }


    public function onUpdatedEditable(string|int $id, string $field, string $value): void
    {
        // $this->validate();

        References::query()->find($id)->update([
            $field => e($value),
        ]);
    }

    public function onUpdatedToggleable(string|int $id, string $field, string $value): void
    {
        References::query()->find($id)->update([
            $field => e($value),
        ]);

        $this->skipRender();
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
