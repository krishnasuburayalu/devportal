<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TransactionsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Classes\PncPatternFinder;


/**
 * Class TransactionsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class TransactionsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Transactions');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/transactions');
        $this->crud->setEntityNameStrings('transactions', 'transactions');
    }

    public function dashboard()
    {
      $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
      $this->data['widgets']['before_content'][] = [
          [
              'type' => 'card',
              'wrapperClass' => 'col-sm-6 col-md-4',
              'content' => [
                  'header' => 'Some card title',
                  'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>.',
              ]
          ],
      ];

      return view(backpack_view('dashboard'), $this->data);
    }

    protected function setupListOperation()
    {
        $this->crud->addFilter([
          'type'  => 'date',
          'name'  => 'transactionDate',
          'label' => 'Transaction Date'
        ],
          false,
          function ($value) { // if the filter is active, apply these constraints
              $this->crud->addClause('where', 'transactionDate', $value);
          });
        $this->crud->setColumns(['transactionDate','description', 'amount', 'subCategory', 	'transactionID','transactionType','transactionStatus']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TransactionsRequest::class);

        $this->crud->addField([
          'name' => 'transactionDate',
          'type' => 'date',
          'label' => "Transaction Date"
        ]);
        $this->crud->addField([
          'name' => 'description',
          'type' => 'text',
          'label' => "Description"
        ]);
        $this->crud->addField([
          'name' => 'amount',
          'type' => 'number',
          'prefix' => "$",
          'label' => "Amount",
          'decimals' => 2,
          'dec_point' => '.',
          'thousands_sep' => ',',
        ]);
        $this->crud->addField([
          'name' => 'category',
          'type' => 'select_from_array',
          'label' => "Category",
          'options' => PncPatternFinder::$categories,
        ]);
        $this->crud->addField([
          'name' => 'subCategory',
          'type' => 'select_from_array',
          'label' => "Sub Category",
          'options' => PncPatternFinder::$subcategories,
        ]);
        $this->crud->addField([
          'name' => 'transactionType',
          'label' => "Transaction Type",
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
