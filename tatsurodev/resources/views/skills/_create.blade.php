<div class="row mb-2">
    <div class="col-12">
        <h3 class="text-muted font-weight-bold">Create New Skill</h3>
        <form action="{{ route('skills.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="skill-name">スキル</label>
                <input type="text" name="name" class="form-control" id="skill-name">
            </div>
            <div class="form-group">
                <label for="level">レベル</label>
                <input type="range" value="3" min="1" max="5" class=custom-range>
            </div>
            <div class="form-group">
                <label for="message">メッセージ</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block">作成</button>
        </form>
    </div>
</div>