@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">BirthDay</label>

                            <div class="col-md-6">
                                <input id="age" type="date" class="form-control" name="age" value="{{ old('age') }}" required> @if ($errors->has('age'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('race') ? ' has-error' : '' }}">
                            <label for="race" class="col-md-4 control-label">Race</label>
                            <div class="col-md-6">
                                <select id="race" type="text" name="race" class="form-control" value="{{ old('race') }}" >
                                    <option>Cafard</option>
                                    <option>Sauterelle</option>
                                    <option>Cocinelle</option>
                                    <option>Mille-patte</option>
                                    <option>Pince-Oreille</option>
                                </select> @if ($errors->has('race'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('race') }}</strong>
                                </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nourriture') ? ' has-error' : '' }}">
                            <label for="nourriture" class="col-md-4 control-label">Nourriture</label>
                            <div class="col-md-6">
                                <select id="nourriture" type="text" name="nourriture" class="form-control" value="{{ old('nourriture') }}">
                                    <option>Vegetariens</option>
                                    <option>Insectivore</option>
                                    <option>Autre</option>
                                </select> @if ($errors->has('nourriture'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nourriture') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
