<x-app>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped nowrap">
          <thead>
            <tr>
              <th>Product</th>
              <th>Qty</th>
              <th>Price</th>
              <th>
                <i class="menu-icon tf-icons bx bx-cog"></i>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
              <tr>
                <th>{{ $product->product }}</th>
                <th>{{ $product->qty }}</th>
                <th>{{ $product->price }}</th>
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