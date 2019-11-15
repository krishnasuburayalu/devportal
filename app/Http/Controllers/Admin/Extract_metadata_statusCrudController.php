<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Extract_metadata_statusRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class Extract_metadata_statusCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class Extract_metadata_statusCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Extract_metadata_status');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/extract_metadata_status');
        $this->crud->setEntityNameStrings('extract_metadata_status', 'extract_metadata_statuses');
    }

    protected function setupListOperation()
    {
        $this->crud->setColumns(['instance_id', 'status_code']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(Extract_metadata_statusRequest::class);

        $this->crud->addField([
          'name' => 'instance_id',
          'type' => 'text',
          'label' => "Instance ID"
        ]);
        $this->crud->addField([
          'name' => 'status_code',
          'type' => 'text',
          'label' => "Status Code"
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
