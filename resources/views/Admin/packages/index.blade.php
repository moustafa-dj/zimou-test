@extends('admin.layouts.main')

@section('content')
  <style>
      .inline-buttons > * {
          display: inline-block;
          margin-right: 5px;
      }
  </style>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
          <a href="{{ route('export.packages') }}" class="btn btn-primary mt-3">Export Packages</a>

            <!-- Table with stripped rows -->
            <table class="table">
              <thead>
                <tr>
                  <th>Tracking Code</th>
                  <th>Store Name</th>
                  <th>Package Name</th>
                  <th>Status</th>
                  <th>Client Full Name</th>
                  <th>Phone</th>
                  <th>Wilaya</th>
                  <th>Commune</th>
                  <th>Delivery Type</th>
                  <th>Status Name</th>
                </tr>
              </thead>
              <tbody>
                @foreach($packages as $package)
                  <tr>
                    <td>{{ $package->tracking_code }}</td>
                    <td>{{ $package->store->name ?? 'N/A' }}</td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->status->name ?? 'N/A' }}</td>
                    <td>{{ $package->client_first_name }} {{ $package->client_last_name }}</td>
                    <td>{{ $package->client_phone }}</td>
                    <td>{{ $package->commune->wilaya->name ?? 'N/A' }}</td>
                    <td>{{ $package->commune->name ?? 'N/A' }}</td>
                    <td>{{ $package->deliveryType->name ?? 'N/A' }}</td>
                    <td>{{ $package->status->name ?? 'N/A' }}</td>
                    <td class="inline-buttons">
                      @can('delete-package')
                        <form action="{{ route('packages.destroy', $package->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">
                            <i class="bi bi-exclamation-octagon"></i>
                          </button>
                        </form>
                      @endcan
                      @can('edit-package')
                        <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-success">
                          <i class="bi bi-check-circle"></i>
                        </a>
                      @endcan
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->
            {{ $packages->links() }}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
