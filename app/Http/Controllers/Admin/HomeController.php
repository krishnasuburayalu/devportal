<?php

namespace  App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Backpack\CRUD\app\Http\Controllers\AdminController;
use App\Classes\DashboardReport;
use Illuminate\Http\Request;

class HomeController extends AdminController
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function db(Request $request)
    {
        $year = (int) $request->query('y', 0);
        if($year == 0){
          $year = '2019';
        }
        $month = (int) $request->query('m', 'na');
        if($month == 'na'){
          $month = '10';
        }
        $cat = $request->query('c', 'na');
        if($cat == 'na'){
          $cat = null;
        }
        $subcat = $request->query('sc', 'na');
        if($subcat == 'na'){
          $subcat  = null;
        }
        $trans = new DashboardReport($year, $month, $cat, $subcat);
        $data = $trans ->getMonthSpendingByCategory();
        $overallcat = $trans->getMonthSpendingOverallCatgory();
        $overallsubcat = $trans->getMonthSpendingOverallSubCatgory();
        $overall = $trans->getMonthSpendingOverall();
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];
        $this->data['widgets']['before_content'] = [

            [
              'type' => 'div',
              'class' => 'row',
              'content' => [ // widgets
                [
                  'type' => 'dashboardForm',
                  'chart_id' => 'chart_id1234',
                  'wrapperClass' => 'col-sm-12 col-md-12',
                  'selected_cat' => $cat,
                  'selected_subcat' => $subcat,
                  'selcted_year' => $year,
                  'selected_month' => $month,
                  'filter_cat' => $trans->getCategoriesFilter(),
                  'filter_subcat' => $trans->getSubCategoriesFilter(),
                ],
                [
                    'type' => 'chartPie',
                    'chart_id' => 'chart_id123pie',
                    'c1_data_labels' => json_encode(array_keys($overall)),
                    'c1_data_series' => json_encode(array_values($overall)),
                    'c1_wrapperClass' => 'col-sm-4 col-md-4',
                    'c1_content' => [
                        'header' => 'Overall Spending by Card' ,
                     ]
                ],
                [
                    'type' => 'chartPie',
                    'chart_id' => 'chart_id123pie2',
                    'c1_data_labels' => json_encode(array_keys($overallcat)),
                    'c1_data_series' => json_encode(array_values($overallcat)),
                    'c1_wrapperClass' => 'col-sm-4 col-md-4',
                    'c1_content' => [
                        'header' => 'Overall Spending by Category' ,
                     ]
                ],
                [
                    'type' => 'chartPie',
                    'chart_id' => 'chart_id123pie3',
                    'c1_data_labels' => json_encode(array_keys($overallsubcat)),
                    'c1_data_series' => json_encode(array_values($overallsubcat)),
                    'c1_wrapperClass' => 'col-sm-4 col-md-4',
                    'c1_content' => [
                        'header' => 'Overall Spending by Sub-Category' ,
                     ]
                ],
                [
                    'type' => 'chartLine',
                    'chart_id' => 'chart_id123',
                    'data_labels' => json_encode($data['labels']),
                    'data_series' => json_encode($data['series']),
                    'wrapperClass' => 'col-sm-6 col-md-12',
                    'content' => [
                        'header' => 'Spendin of ' . $month . '/'.$year ,
                     ]
                ],
              ]
            ],




        ];
         return view(backpack_view('dashboard'), $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }
}
