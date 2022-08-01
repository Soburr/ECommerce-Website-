<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\ProductCount;
use App\Nova\Metrics\ProductsPerCategory;
use App\Nova\Metrics\ProductsPerDay;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return[
            new ProductCount,
            new ProductsPerDay,
            new ProductsPerCategory,
        ];
    }
}