@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12"><h3 class="text-center py-3">Welcome To Zeyar Office</h3></div>
                        <div class="col-3">
                            <a class="btn btn-info p-5" href="#">Add New Officer</a>

                        </div>
                        <div class="col-3">
                            <a class="btn btn-warning p-5" href="#">See all Officer</a>

                        </div>
                        <div class="col-3">
                            <a class="btn btn-danger p-5" href="#">See all Message</a>

                        </div>
                        <div class="col-3">
                            <a class="btn btn-success p-5" href="#">Add New Officer</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
