<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PatternRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PatternCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PatternCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Pattern');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/pattern');
        $this->crud->setEntityNameStrings('pattern', 'patterns');
    }

    protected function setupListOperation()
    {
      $this->crud->setColumns(['name','pattern', 'transactionType', 'category','subCategory' ,'created_at']);

    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PatternRequest::class);

        $this->crud->addField([
          'name' => 'name',
          'type' => 'text',
          'label' => "Neme"
        ]);
        $this->crud->addField([
          'name' => 'pattern',
          'type' => 'text',
          'label' => "Pattern"
        ]);
        $this->crud->addField([
          'name' => 'category',
          'type' => 'text',
          'label' => "Category "
        ]);
        $this->crud->addField([
          'name' => 'subCategory',
          'type' => 'text',
          'label' => "Sub Category "
        ]);
        $this->crud->addField([
          'name' => 'transactionType',
          'label' => "Type",
          'type' => 'select_from_array',
          'options' => ['DEBIT' => 'DEBIT', 'CREDIT' => 'CREDIT'],
          ]);
          $this->crud->addField([
            'name' => 'transactionStatus',
            'label' => "Transaction Status",
            'type' => 'select_from_array',
            'options' => ['COMPLETED' => 'Completed', 'PENDING' => 'Pending'],
          ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
