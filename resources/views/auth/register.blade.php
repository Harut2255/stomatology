@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        {{--Name--}}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label white_color">Անուն</label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--Surname--}}
                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label white_color">Ազգանուն</label>

                            <div class="col-md-4">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--Patronymic--}}
                        <div class="form-group{{ $errors->has('patronymic') ? ' has-error' : '' }}">
                            <label for="patronymic" class="col-md-4 control-label white_color">Հայրանուն</label>

                            <div class="col-md-4">
                                <input id="patronymic" type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}">

                                @if ($errors->has('patronymic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('patronymic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--E-mail--}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label white_color">Էլ. հասցե</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--Login--}}
                        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
                            <label for="login" class="col-md-4 control-label white_color">Լոգին</label>

                            <div class="col-md-4">
                                <input id="login" type="text" class="form-control" name="login" value="{{ old('login') }}">

                                @if ($errors->has('login'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--Password--}}
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label white_color">Գաղտնաբառ</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--Confirm Password--}}
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label white_color">Հաստատել գաղտնաբառը</label>

                            <div class="col-md-4">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{--Button--}}
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4 text-right">
                                <button type="submit" class="btn white_color" style="background-color: #6f9a37">
                                    <i class="fa fa-btn fa-user"></i> Գրանցվել
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

    </div>
</div>
@endsection
