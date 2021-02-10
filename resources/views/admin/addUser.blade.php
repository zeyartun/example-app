@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12"><h3 class="text-center py-3">Welcome To Zeyar Office</h3></div>
                        <form method="POST" action="/admin/saveUser">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">အမည်</label>
                                <input type="text" class="form-control" name="name" placeholder="အမည်">
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">အီးမေးလ်</label>
                                <input type="email" class="form-control" name="email" placeholder="အီးမေးလ်">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">လျှို့ဝှက်နံပါတ်</label>
                                <input type="password" class="form-control" name="password" placeholder="လျှို့ဝှက်နံပါတ်">
                              </div>

                              <div class="dropdown mb-3">
                                <select name="role" class="select mb-3 p-2 px-3">
                                    <option selected>အဆင့်ရွေးပါ</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Officer">Officer</option>
                                  </select>
                              </div>
                              <div class="mb-3 text-end">
                                 <input class="btn btn-success" type="submit" value="အသစ်ထည့်မည်">
                            </div>
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


