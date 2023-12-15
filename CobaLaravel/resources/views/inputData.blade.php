<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }

        .card {
            margin: 50px auto;
            max-width: 600px;
            border: none;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card h1 {
            background-color: #343a40;
            color: white;
            padding: 20px;
            margin: 0;
        }

        .card-body {
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        select,
        input {
            margin-bottom: 10px;
        }

        button {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #292b2c;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Form Pemesanan</h1>
        <div class="card-body">
            <form method="post" action="{{ route('submit-data') }}">
                @csrf

                <div class="mb-3">
                    <label for="nik">NIK:</label>
                    <input type="number" id="nik" name="nik" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="province">Provinsi:</label>
                    <select name="province" id="province" class="form-select">
                        @foreach ($daftarProvinsi as $province => $cities)
                            <option value="{{ $province }}">{{ $province }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="city">Kota:</label>
                    <select name="city" id="city" class="form-select">

                    </select>
                </div>

                <div class="mb-3">
                    <label for="tlp">Nomor Telepon:</label>
                    <input type="number" id="tlp" name="tlp" class="form-control" required>
                </div>

                <button type="submit">Submit Data</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-dxrxpQFuTPm9L8EBtF1AQ/2nsAbC9P5c3AbYjyu5mrZboU5ujF5+9frTpnU1Jg4e"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#province').on('change', function() {
                var selectedProvince = $(this).val();
                var cities = {!! json_encode($daftarProvinsi) !!}[selectedProvince];
                var cityDropdown = $('#city');
                cityDropdown.empty();
                cityDropdown.append('<option value="">Select City</option>');
                $.each(cities, function(index, city) {
                    cityDropdown.append('<option value="' + city + '">' + city + '</option>');
                });
                cityDropdown.prop('disabled', false);
            });
        });
    </script>
</body>

</html>
