@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Cadastro </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h2>Dados do Gerente</h2>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-6">
                          <label for="inputAddress" class="form-label">Endereço</label>
                          <input type="text" class="form-control" name='address' id="inputAddress" value="{{ old('address') }}" placeholder="">
                        </div>

                        <div class="col-6">
                          <label for="inputAddress" class="form-label">cpf</label>
                          <input type="text" class="form-control" name='cpf' id="inputAddress" value="{{ old('cpf') }}" placeholder="">
                        </div>

                        <div class="col-6">
                          <label for="inputAddress" class="form-label">Tipo de Funcionário</label>
                          <select class="form-control" name="type">
                            <option value="manager">gerente</option>
                            <option value="enployee">Funcionário</option>

                          </select>
                        </div>

                        <h2>Dados da Empresa</h2>
                        <div class="col-6">
                          <label for="inputAddress2" class="form-label">CNPJ</label>
                          <input type="text" class="form-control" name='cnpj' id="inputAddress2" value="{{ old('cnpj') }}" placeholder="">
                        </div>
                        <div class="col-md-6">

                          <label for="inputCity" class="form-label">Razão Social</label>
                          <input type="text" class="form-control" name='company_name' id="inputCity" value="{{ old('company_name') }}" >
                        </div>
                        <div class="col-6">
                          <label for="inputAddress2" class="form-label">Nome Fantasia</label>
                          <input type="text" class="form-control" name='trading_name' id="inputAddress2" value="{{ old('trading_name') }}" placeholder="">
                        </div>
                        <div class="col-md-6">
                          <label for="inputCity" class="form-label">Telefone</label>
                          <input type="text" class="form-control" name='phone' value="{{ old('phone') }}" id="inputCity">

                        </div>

                        <div class="row mb-0">
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
@endsection
