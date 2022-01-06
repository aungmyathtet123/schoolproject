@extends('admin.home')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card card-info mt-5">
                <div class="card-header">
                    <a href="{{ route('contact.create') }}">About&nbsp;<i class="fas fa-plus-square fa-sm"></i></a>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Address</th>
                        <th>Email</th>

                        <th>phone</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact )
                        <tr>
                            <td>{{ $contact->address }}</td>
                            <td>{{ $contact->email }}</td>

                            <td>{{ $about->phone }}</td>

                            <td class="text-right py-0 align-middle">
                              <div class="btn-group btn-group-sm">
                                <a href="{{ route('contact.edit',$contact->id) }}" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <form action="{{ route('contact.destroy',$contact->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger" ><i class="fas fa-trash"></i></button>
                                </form>

                              </div>
                            </td>
                        </tr>
                        @endforeach



                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>

    </div>
</div>
@endsection
