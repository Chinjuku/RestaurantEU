<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function dashboardTotalPriceChart()
    {
        //get billdate and totalprice
        $data = DB::table('bill')
            ->join('order', 'bill.order_id', '=', 'order.order_id')
            ->get()
            ->map(function ($time) {
                $time->formatDate = Carbon::parse($time->order_time)->locale('th')->format('Y-m-d');
                $time->formatDDDD = Carbon::parse($time->order_time)->locale('th')->isoFormat('dddd');
                return $time;
            })
            ->groupBy('formatDDDD')
            ->map(function ($groupedItems) {
                $totalPerDay = $groupedItems->sum('totalprice');
                return [
                    'totalperday' => $totalPerDay,
                    'formatDDDD' => $groupedItems->first()->formatDDDD // Assuming the same formatDDDD for all items in the group
                ];
            });

        // Sort the weeks in the desired order
        $sortedData = $data->toArray();
        usort($sortedData, function ($a, $b) {
            $days = ['จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์', 'อาทิตย์'];
            return array_search($a['formatDDDD'], $days) <=> array_search($b['formatDDDD'], $days);
        });

        return response()->json($sortedData);
    }
    public function dashboardTime() {
        $data = DB::table('order')
                ->get()
                ->map(function ($time) {
                    $time->formatDate = Carbon::parse($time->order_time)->locale('th')->format('H:i');
                    $time->formatHour = Carbon::parse($time->order_time)->locale('th')->isoFormat('H');
                    return $time;
                })
                ->groupBy('formatHour');
        // dd($data);
        return response()->json($data);
    }
}
