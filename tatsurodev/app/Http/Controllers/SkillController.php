<?php

namespace App\Http\Controllers;

use App\Http\Requests\Skills\StoreRequest;
use App\Skill;
use App\SkillLevel;
use App\Locale;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['skill_level_id'] = SkillLevel::where('level', $validatedData['skill_level_id'])->first()->id;
        $validatedData['locale_id'] = Locale::where('name', $validatedData['locale_id'])->first()->id;
        $skill = Skill::create($validatedData);
        return redirect()->route('homes.index')->withStatus(__('status.skill_store'));
    }

    public function edit(Skill $skill)
    {
        return view('homes.index', [
            'skill' => $skill,
        ]);
    }

    public function update(StoreRequest $request, Skill $skill)
    {
        $validatedData = $request->validated();
        $validatedData['skill_level_id'] = SkillLevel::where('level', $validatedData['skill_level_id'])->first()->id;
        $validatedData['locale_id'] = Locale::where('name', $validatedData['locale_id'])->first()->id;
        $skill->fill($validatedData)->save();
        return redirect()->route('homes.index')->withStatus(__('status.skill_update'));
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('homes.index')->withStatus(__('status.skill_destroy'));
    }
}
