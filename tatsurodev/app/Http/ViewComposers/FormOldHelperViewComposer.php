<?php
/**
 * 参照用のボツ手法
 * $errorsをview composerで取得できなかったので$errors->errorBagNameでどのformのerrorか特定できなさそうなのでボツ
 */
namespace App\Http\ViewComposers;

use Illuminate\Support\MessageBag;

class FormOldHelperViewComposer
{
    public function compose($view)
    {
        // undefined防止
        $oldSkillName
            = $oldSkillLevelId
            = $oldSkillMessage
            = null;
        // skill formからの送信ならold値を変数にセット
        if (old('menu') === 'skill') {
            dd('this is skill errrobag');
            $oldSkillName = old('name');
            $oldSkillLevelId = old('skill_level_id');
            $oldSkillMessage = old('message');
        }

        // portfolio formからの送信ならold値を変数にセット

        // book formからの送信ならold値を変数にセット

        // udemy formからの送信ならold値を変数にセット

        $view->with(
            compact(
                'oldSkillName',
                'oldSkillLevelId',
                'oldSkillMessage',
            )
        );
    }
}
