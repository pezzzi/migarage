@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fullname" class="col-md-4 col-form-label text-md-right"><strong>Full Name</strong></label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" required autofocus>

                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right"><strong>Username</strong></label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><strong>E-Mail Address</strong></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right"><strong>Country</strong></label>

                            <div class="col-md-6">
                              <select id="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" required>
                                <option selected disabled hidden>Select your country</option>
                              </select>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">Province (optional)</label>

                            <div class="col-md-6">
                              <select id="province" class="form-control{{ $errors->has('province') ? ' is-invalid' : '' }}" name="province" required disabled='disabled'>
                                <option selected disabled hidden>Select your province</option>
                              </select>

                                @if ($errors->has('province'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('province') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><strong>Password</strong></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
fetch('https://restcountries.eu/rest/v2/all')
.then(function(response) {
  return response.json();
})
.then(function(data) {
  var countrySelect = document.querySelector('#country');
  data.forEach(function(item) {
    countrySelect.innerHTML += '<option value='+item['alpha3Code']+'>'+item['name']+'</option>';
  });
})
.catch(function(error) {
  console.log('The error was: '+error);
})

fetch('https://dev.digitalhouse.com/api/getProvincias')
.then(function(response) {
  return response.json();
})
.then(function(data) {
  var provinceSelect = document.querySelector('#province');
  data.forEach(function(item) {
    provinceSelect.innerHTML += '<option value='+item['state']+'>'+item['state']+'</option>';
  });
})
.catch(function(error) {
  console.log('The error was: '+error);
})

var countrySelect = document.querySelector('#country');
countrySelect.onchange = function() {
  var provinceSelect = document.querySelector('#province');

  if (countrySelect.options[countrySelect.selectedIndex].value == 'ARG' && provinceSelect.hasAttribute('disabled')) {
    provinceSelect.removeAttribute('disabled');
  } else {
    provinceSelect.setAttribute('disabled', 'disabled');
  }
}
</script>
@endsection
