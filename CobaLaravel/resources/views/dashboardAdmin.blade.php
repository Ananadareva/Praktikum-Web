<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
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

        .table th, .table td {
            border: none;
        }

    </style>
</head>

<body>
    <div class="card">
        <h1>Data Masuk</h1>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">NIK</th>
                        <td>{{ isset($nik) ? $nik : 'Not available' }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nama</th>
                        <td>{{ isset($name) ? $name : 'Not available' }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Provinsi</th>
                        <td>{{ isset($province) ? $province : 'Not available' }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Kota</th>
                        <td>{{ isset($city) ? $city : 'Not available' }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nomor Telepon</th>
                        <td>{{ isset($tlp) ? $tlp : 'Not available' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-dxrxpQFuTPm9L8EBtF1AQ/2nsAbC9P5c3AbYjyu5mrZboU5ujF5+9frTpnU1Jg4e"
        crossorigin="anonymous"></script>
</body>

</html>
