@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12"><h3 class="text-center py-3">Welcome To Zeyar Office</h3></div>
                        @if(Auth::User()->role == "Admin")
                        <div class="col-4 mb-2">
                            <a class="btn btn-info p-5 w-100" href="{{ url('/admin/addUser') }}">Add New Officer</a>
                        </div>
                        <div class="col-4 mb-2">
                            <a class="btn btn-warning p-5 w-100" href="{{ url('/admin/allUser') }}">See all Officer</a>
                        </div>
                        <div class="col-4 mb-2">
                            <a class="btn btn-danger p-5 w-100" href="{{ url('/admin/allMessage') }}">See all Message</a>
                        </div>
                        @endif
                        <div class="col-4 mb-2">
                            <a class="btn btn-success p-5 w-100" href="{{ url('/admin/sendMessage') }}">Send Message</a>
                        </div>
                        <div class="col-4 mb-2">
                            <a class="btn btn-primary p-5 w-100" href="{{ url('/admin/userShowMessage') }}">See Send Message</a>
                        </div>
                        <div class="col-4 mb-2">
                            <a class="btn btn-secondary p-5 w-100" href="{{ url('/admin/userReceiveMessage') }}">See Receive Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
