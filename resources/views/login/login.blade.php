<div class="form-group{{ $errors->has('login') ? 'has-error' : '' }}">
    <label for="login" class="col-md-4 control-label">E-Mail o Usuario</label>

    <div class="col-md-6">
        <input id="login" type="login" class="form-control" name="login" value="{{ old('login’) }}" required autofocus
               placeholder="Introduce tu E-Mail o Nombre de Usuario">

        @if ($errors->has('login’))
            <span class="help-block">
 <strong>{{ $errors->first('login’) }}</strong>
 </span>
        @endif
    </div>
</div>