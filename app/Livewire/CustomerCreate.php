<?php

namespace App\Livewire;

use App\Filament\Resources\DashboardResource;
use App\Filament\Resources\ResourceResource;
use App\Models\Customer;
use App\Filament\Resources\Customers\CustomerResource;
use App\Models\Dashboard;
use App\Models\Resource;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\CreateAction;
use Filament\Facades\Filament;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Schemas\Schema;
use Filament\Support\Enums\ActionSize;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class CustomerCreate extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;
    public function createCustomerAction(): Action
    {
        return CreateAction::make('createCustomer')
            ->label('Create Customer')
            ->model(Customer::class)
            ->schema(fn (Schema $schema) => CustomerResource::form($schema))
            ->icon('heroicon-m-plus')
            ->color('primary')
            ->slideOver()
            ->tooltip('Resource to store data')
            ->closeModalByClickingAway()->createAnother(false)
            ->closeModalByEscaping();

    }

    public function render()
    {
        return view('livewire.resource-create');
    }
}
