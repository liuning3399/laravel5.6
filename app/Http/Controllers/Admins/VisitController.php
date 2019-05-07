<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Visit;

class VisitController extends Controller
{
    public function index(Visit $visit)
    {
        $visits = $visit->orderBy('created_at', 'desc')->paginate(20);

        return view('admins.visits.index', compact('visits'));
    }

    public function destroy(Visit $visit)
    {
        $visit->delete();

        return back()->with('message', '删除成功');
    }
}
