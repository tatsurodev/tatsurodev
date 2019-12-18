<?php

namespace App\Http\Controllers;

use App\Http\Requests\QAndAs\StoreRequest;
use App\QAndA;
use Illuminate\Http\Request;

class QAndAController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();
        $qanda = QAndA::create($validatedData);
        return redirect()->route('homes.index')->withStatus(__('status.qanda_store'));
    }

    public function edit(QAndA $qanda)
    {
        return view('homes.index', [
            'qAndA' => $qanda,
        ]);
    }

    public function update(StoreRequest $request, QAndA $qanda)
    {
        $validatedData = $request->validated();
        $qanda->fill($validatedData)->save();
        return redirect()->route('homes.index')->withStatus(__('status.qanda_update'));
    }

    public function destroy(QAndA $qanda)
    {
        $qanda->delete();
        return redirect()->route('homes.index')->withStatus(__('status.qanda_destroy'));
    }
}
