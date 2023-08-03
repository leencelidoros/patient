<!-- resources/views/patient/register.blade.php -->

@extends('layouts.app') <!-- Assuming you have a layout file -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Patient Registration Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patient.register') }}">
                        @csrf

                        <!-- Telephone -->
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autofocus>
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Date of Birth -->
                        <div class="form-group row">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- ID Number -->
                        <div class="form-group row">
                            <label for="id_number" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>
                            <div class="col-md-6">
                                <input id="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" value="{{ old('id_number') }}" required>
                                @error('id_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- County -->
                        <div class="form-group row">
                            <label for="county" class="col-md-4 col-form-label text-md-right">{{ __('County') }}</label>
                            <div class="col-md-6">
                                <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" required>
                                @error('county')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Sub County -->
                        <div class="form-group row">
                            <label for="sub_county" class="col-md-4 col-form-label text-md-right">{{ __('Sub County') }}</label>
                            <div class="col-md-6">
                                <input id="sub_county" type="text" class="form-control @error('sub_county') is-invalid @enderror" name="sub_county" value="{{ old('sub_county') }}" required>
                                @error('sub_county')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Marital Status -->
                        <div class="form-group row">
                            <label for="marital_status" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>
                            <div class="col-md-6">
                                <select id="marital_status" class="form-control @error('marital_status') is-invalid @enderror" name="marital_status" required>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="widowed">Widowed</option>
                                </select>
                                @error('marital_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>

                        <h5>Next of Kin</h5>

                        <!-- Next of Kin Name -->
                        <div class="form-group row">
                            <label for="next_of_kin_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="next_of_kin_name" type="text" class="form-control @error('next_of_kin_name') is-invalid @enderror" name="next_of_kin_name" value="{{ old('next_of_kin_name') }}" required>
                                @error('next_of_kin_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Next of Kin Date of Birth -->
                        <div class="form-group row">
                            <label for="next_of_kin_date_of_birth" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label>
                            <div class="col-md-6">
                                <input id="next_of_kin_date_of_birth" type="date" class="form-control @error('next_of_kin_date_of_birth') is-invalid @enderror" name="next_of_kin_date_of_birth" value="{{ old('next_of_kin_date_of_birth') }}" required>
                                @error('next_of_kin_date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Next of Kin ID Number -->
                        <div class="form-group row">
                            <label for="next_of_kin_id_number" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>
                            <div class="col-md-6">
                                <input id="next_of_kin_id_number" type="text" class="form-control @error('next_of_kin_id_number') is-invalid @enderror" name="next_of_kin_id_number" value="{{ old('next_of_kin_id_number') }}" required>
                                @error('next_of_kin_id_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Next of Kin Gender -->
                        <div class="form-group row">
                            <label for="next_of_kin_gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="col-md-6">
                                <select id="next_of_kin_gender" class="form-control @error('next_of_kin_gender') is-invalid @enderror" name="next_of_kin_gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('next_of_kin_gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Next of Kin Relationship -->
                        <div class="form-group row">
                            <label for="next_of_kin_relationship" class="col-md-4 col-form-label text-md-right">{{ __('Relationship') }}</label>
                            <div class="col-md-6">
                                <input id="next_of_kin_relationship" type="text" class="form-control @error('next_of_kin_relationship') is-invalid @enderror" name="next_of_kin_relationship" value="{{ old('next_of_kin_relationship') }}" required>
                                @error('next_of_kin_relationship')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Next of Kin Telephone -->
                        <div class="form-group row">
                            <label for="next_of_kin_telephone" class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>
                            <div class="col-md-6">
                                <input id="next_of_kin_telephone" type="text" class="form-control @error('next_of_kin_telephone') is-invalid @enderror" name="next_of_kin_telephone" value="{{ old('next_of_kin_telephone') }}" required>
                                @error('next_of_kin_telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
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
@endsection
