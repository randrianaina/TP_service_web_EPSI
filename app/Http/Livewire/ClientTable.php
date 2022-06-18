<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Client;

class ClientTable extends DataTableComponent
{
    protected $model = Client::class;
    public $showSearch = false;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setEmptyMessage('Aucun clients trouvés');
    }

    public function columns(): array
    {
        return [
            Column::make("guid", "guid")
                ->sortable()
                ->searchable(),
            Column::make("first", "first")
                ->sortable()
                ->searchable(),
            Column::make("last", "last")
                ->sortable()
                ->searchable(),
            Column::make("street", "street")
                ->sortable()
                ->searchable(),
            Column::make("city", "city")
                ->sortable()
                ->searchable(),
            Column::make("zip", "zip")
                ->sortable()
                ->searchable(),
        ];
    }
}
