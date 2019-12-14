<?php

namespace App\Http\Controllers;

use App\Http\Requests\Skills\StoreRequest;
use App\Skill;
use App\SkillLevel;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $validated['skill_level_id'] = SkillLevel::where('level', $validated['skill_level_id'])->first()->id;
        $skill = Skill::create($validated);
        return redirect()->route('home')->withStatus('新たなスキルが作成されました');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('homes.index', [
            'skill' => $skill,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRequest $request, Skill $skill)
    {
        $validatedData = $request->validated();
        $skill->fill($validatedData)->save();
        return redirect()->route('home')->withStatus('スキルが更新されました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('home')->withStatus('スキルが削除されました');
    }
}
