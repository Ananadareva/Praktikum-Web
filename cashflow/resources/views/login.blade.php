
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


</head>


<div class="container mt-5">
    <div class="row justify-content-center">


        @if (session('error'))
            <div class="alert alert-danger alert-sm mb-2">
                {{ session('error') }}
            </div>
        @endif

        <div class="shadow border bg-body">
            <div class="box-login p-4 mb-1 d-grid gap-5">
                <div class="d-flex align-items-center gap-2 pt-1">

                    <h1 class="fs-3 text-dark-emphasis login-title">Manage Your Money! <br> Universitas Pertamina</h1>
                </div>

                <form method="POST" action="{{ route('login') }}">

                    @csrf
                    <div class=mb-3>
                        <label for="email" class="form-label">{{ __('email') }}</label>
                        <input id="email" type="email" class="form-control" name="email" required>
                        <label for="password" class="form-label">{{ __('password') }}</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary form-control">
                            Login
                        </button>
                    </div>
                </form>
            </div>

            <p class="m-0 w-100 text-center p-1">&copy; 2024 UPMoney</p>
        </div>
    </div>
</div>
