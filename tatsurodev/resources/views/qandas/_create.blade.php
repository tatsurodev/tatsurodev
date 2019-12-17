<div class="row mb-2">
    <div class="col-12">
        <h3 class="text-muted font-weight-bold text-capitalize">{{ isset($qAndA) ? __('update qanda') : __('create qanda') }}</h3>
        <form action="{{ isset($qAndA) ? route('qandas.update', $qAndA->id) : route('qandas.store') }}" method="post">
            @csrf
            @if(isset($qAndA))
            @method('put')
            @endif
            <div class="form-group">
                <label for="qanda-question" class="text-capitalize">{{ __('question') }}</label>
                <input type="text" name="question" class="form-control{{ $errors->qanda->has('question') ? ' is-invalid' : '' }}" id="qanda-question" value="{{ isset($qAndA) ? $qAndA->question : ($errors->qanda->any() ? old('question') : '') }}">
                @if($errors->qanda->has('question'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->qanda->first('question') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="qanda-answer" class="text-capitalize">{{ __('answer') }}</label>
                <textarea class="form-control{{ $errors->qanda->has('answer') ? ' is-invalid' : '' }}" name="answer" id="qanda-answer" cols="30" rows="3">{{ isset($qAndA) ? $qAndA->answer : ($errors->qanda->any() ? old('answer') : '') }}</textarea>
                @if($errors->qanda->has('answer'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->qanda->first('answer') }}</strong>
                </span>
                @endif
            </div>
            <input type="hidden" name="menu_id" value="{{ $menu->id }}">
            <input type="hidden" name="form-identity" value="qanda">
            <button type="submit" class="btn btn-success btn-block text-capitalize">{{ isset($qAndA) ? __('update') : __('create') }}</button>
        </form>
    </div>
</div>