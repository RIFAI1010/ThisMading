
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-heade r">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="first_name" class="form-label">{{ __('first_name') }}</label>
                            <input id="first_name" type="text" class="form-control" name="first_name" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">{{ __('last_name') }}</label>
                            <input id="last_name" type="text" class="form-control" name="last_name" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">{{ __('username') }}</label>
                            <input id="username" type="text" class="form-control" name="username" required autofocus>
                        </div>


                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

