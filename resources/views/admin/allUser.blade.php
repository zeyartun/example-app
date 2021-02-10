@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12"><h3 class="text-center py-3">Welcome To Zeyar Office</h3></div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)                           
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                      </tr> 
                                @endforeach 
                                                           
                            </tbody>
                          </table>                                               
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


