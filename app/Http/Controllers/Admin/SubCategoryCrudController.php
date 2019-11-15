<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubCategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SubCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class SubCategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\SubCategory');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/subcategory');
        $this->crud->setEntityNameStrings('subcategory', 'sub_categories');
    }

    protected function setupListOperation()
    {
      $this->crud->setColumns(['name','description', 'created_at']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(SubCategoryRequest::class);

        $this->crud->addField([
          'name' => 'name',
          'type' => 'text',
          'label' => "Neme"
        ]);
        $this->crud->addField([
          'name' => 'description',
          'type' => 'text',
          'label' => "Description"
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
