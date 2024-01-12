<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!--icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


</head>

<div class="container mt-5">
    <div class="card mb-4">
        <div class="card-body text-center">
            <h2 class="card-title">{{ auth()->user()->name }}</h2>
            <br>

        </div>

        <div class="card-body">
            <h3 class="card-subtitle mb-2 text-muted">Balance: Rp. {{ $userWallet->ballance }}</h3>

        </div>


    </div>

    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Transactions History</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Amount</th>
                        <th>Description</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userTransactions as $transaction)
                        <tr>
                            <td>Rp. {{ $transaction->amount }}</td>
                            <td>{{ $transaction->description }}</td>
                            <td>{{ $transaction->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Transaction</h2>


            <form method="post" action=" {{ route('storeTransaction') }}">
                @csrf
                <div class="mb-3">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" min="5000" class="form-control" name="amount" id="amount">
                </div>

                <div class="mb-3">
                    <label for="transactionType" class="form-label">In/Out</label>
                    <select class="form-select" name="transactionType" id="transactionType">
                        <option value="in">Income</option>
                        <option value="out">Expense</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="4"></textarea>
                </div>

                <input type="hidden" name="balance" value=" {{ $userWallet->ballance }}">
                <input type="hidden" name="idwallet" value=" {{ $userWallet->id }}">
    

                <button type="submit" class="btn btn-primary"
                    onclick="return confirm('Save transaction?')">Confirm</button>
            </form>
        </div>
    </div>
</div>
