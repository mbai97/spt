<?php

namespace App\Http\Controllers\Admin;

use Gate;
use Symfony\Component\HttpFoundation\Response;
use App\Ticket;

class HomeController
{
    public function index()
    {
        abort_if(Gate::denies('dashboard_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $totalTickets = Ticket::count();
        $openTickets = Ticket::whereHas('status', function($query) {
            $query->whereName('Open');
        })->count();
        $closedTickets = Ticket::whereHas('status', function($query) {
            $query->whereName('Closed');
        })->count();
        $priority = Ticket::whereHas('priority', function($query)
        {
            $query->whereName('high');
        
        })->count();

        return view('home', compact('totalTickets', 'openTickets', 'closedTickets', 'priority'));
    }

    // public function googleLineChart()
    // {
    //     $graph = Ticket::table('priority')
    //                 ->select(
    //                     Ticket::raw("SUM(high) as high"),
    //                     Ticket::raw("SUM(medium) as mid"),
    //                     Ticket::raw("SUM(low) as low")) 
    //                 ->get();


    //     $result[] = ['high','medium','low'];
    //     foreach ($graph as $key => $value) {
    //         $result[++$key] = [$value->high, (int)$value->mid, (int)$value->low];
    //     }


    //     return view('google-line-chart')
    //             ->with('visitor',json_encode($result));
    // }

}
