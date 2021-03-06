<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    <label for="username" class="col-md-4 control-label">Nombre de Usuario</label>

    <div class="col-md-6">
        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required
               maxlength="15">

        @if ($errors->has('username'))
            <span class="help-block">
 <strong>{{ $errors->first('username') }}</strong>
 </span>
        @endif
    </div>
</div>