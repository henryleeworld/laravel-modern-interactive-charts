<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class DashboardController extends Controller
{
    public function index()
    {
        $columnChartModel = (new ColumnChartModel())
                            ->setTitle('消費類型')
                            ->addColumn('吃飯', 500, '#FA5858')
                            ->addColumn('電影', 400, '#FA8258')
                            ->addColumn('遊戲', 300, '#FACC2E')
                            ->addColumn('購物', 200, '#FFFF00')
                            ->addColumn('旅遊', 100, '#BFFF00');
        return view('dashboard', compact('columnChartModel'));
    }
}
