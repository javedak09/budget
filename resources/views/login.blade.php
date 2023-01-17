@extends('layouts.applogin')

@section('content')
    <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0">
            <div class="text-center mb-1">
                <div class="font-large-1 text-center">
                    PSBI Lab Management System
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body">

                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <fieldset class="form-group position-relative has-icon-left">
                        <input id="userid" name="userid" class="form-control round" placeholder="User Name"/>
                        <div class="form-control-position">
                            <i class="ft-user"></i>
                        </div>
                        @if ($errors->has('userid'))
                            <span class="text-danger">{{ $errors->first('userid') }}</span>
                        @endif
                    </fieldset>
                    <fieldset class="form-group position-relative has-icon-left">
                        <input id="passwd" name="passwd" class="form-control round" placeholder="Password"/>
                        <div class="form-control-position">
                            <i class="ft-lock"></i>
                        </div>
                        @if ($errors->has('passwd'))
                            <span class="text-danger">{{ $errors->first('passwd') }}</span>
                        @endif
                    </fieldset>
                    <fieldset class="form-group position-relative has-icon-left">
                        <div id="lblerr" style="color: #FF0000"></div>
                    </fieldset>

                    <div class="form-group text-center">
                        <button id="cmdLogin" name="cmdLogin" type="submit"
                                class="btn btn-danger mr-1"/>{{ __("Login") }}
                        <button id="cmdCancel" type="reset" name="cmdCancel" class="btn btn-primary"/>{{ __("Cancel") }}
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
