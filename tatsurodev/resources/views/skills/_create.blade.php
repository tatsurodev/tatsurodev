<div class="row mb-2">
    <div class="col-12">
        <h3 class="text-muted font-weight-bold">Create New Skill</h3>
        <form action="{{ route('skills.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="skill-name">スキル</label>
                <input type="text" name="name" class="form-control{{ $errors->skill->has('name') ? ' is-invalid' : '' }}" id="skill-name" value="{{ $errors->skill->any() ? old('name') : '' }}">
                @if($errors->skill->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->skill->first('name') }}<strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="skill-skill_level_id">レベル</label>
                <input type="range" name="skill_level_id" value="{{ $errors->skill->any() ? old('skill_level_id') : '' }}" min="1" max="5" class="custom-range{{ $errors->skill->has('skill_level_id') ? ' is-invalid' : '' }}" id="skill-skill_level_id">
                @if($errors->skill->has('skill_level_id'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->skill->first('skill_level_id') }}<strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="skill-message">メッセージ</label>
                <textarea class="form-control{{ $errors->skill->has('message') ? ' is-invalid' : '' }}" name="message" id="skill-message" cols="30" rows="3">{{ $errors->skill->any() ? old('message') : ''}}</textarea>
                @if($errors->skill->has('message'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->skill->first('message') }}<strong>
                </span>
                @endif
            </div>
            <input type="hidden" name="form-identity" value="skill">
            <button type="submit" class="btn btn-success btn-block">作成</button>
        </form>
    </div>
</div>