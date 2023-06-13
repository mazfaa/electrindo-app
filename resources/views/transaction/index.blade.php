<x-app>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped nowrap">
          <thead>
            <tr>
              <th>Transaction Date</th>
              <th>Customer</th>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Total</th>
              <th>
                <i class="menu-icon tf-icons bx bx-cog"></i>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transactions as $transaction)
              <tr>
                <th>{{ $transaction->transaction_date }}</th>
                <th>{{ $transaction->name }}</th>
                <th>{{ $transaction->product }}</th>
                <th>{{ $transaction->qty }}</th>
                <th>{{ $transaction->price }}</th>
                <th>{{ $transaction->total }}</th>
                <th>
                  <button class="btn btn-sm">
                    <i class="menu-icon tf-icons bx bx-edit-alt"></i>
                  </button>
                  <button class="btn btn-sm">
                    <i class="menu-icon tf-icons bx bx-trash"></i>
                  </button>
                </th>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-app>