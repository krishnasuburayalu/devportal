<?php

namespace  App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Backpack\CRUD\app\Http\Controllers\AdminController;
use App\Classes\DashboardReport;


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
    public function dashboard()
    {
        $trans = new DashboardReport();
        $data = $trans ->getMonthSpending();
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];
        $this->data['widgets']['before_content'] = [
            [
                'type' => 'chartLine',
                'chart_id' => 'chart_id123',
                'data_labels' => json_encode($data['labels']),
                'data_series' => json_encode($data['series']),
                'wrapperClass' => 'col-sm-6 col-md-12',
                'content' => [
                    'header' => 'Some XXX title',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>.',
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
