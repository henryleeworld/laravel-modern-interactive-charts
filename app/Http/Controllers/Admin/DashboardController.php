<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class DashboardController extends Controller
{
    public function index()
    {
        $columnChartModel = (new ColumnChartModel())
                            ->setTitle(__('Purchasing type'))
                            ->addColumn(__('Dining'), 500, '#FA5858')
                            ->addColumn(__('Movies'), 400, '#FA8258')
                            ->addColumn(__('Games'), 300, '#FACC2E')
                            ->addColumn(__('Shopping'), 200, '#FFFF00')
                            ->addColumn(__('Travel'), 100, '#BFFF00');
        return view('dashboard', compact('columnChartModel'));
    }
}
