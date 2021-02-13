@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12"><h3 class="text-center py-3">Welcome To Zeyar Office</h3></div>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">စာအမှတ်အမှတ်</th>
                                <th scope="col">ရက်စွဲ</th>
                                <th scope="col">ခေါင်းစဉ်</th>
                                <th scope="col">ရည်ညွှန်းစာ</th>
                                <th scope="col">မှ</th>
                                <th scope="col">သို့</th>
                                <th scope="col">ပူးတွဲ</th>
                                <th scope="col">အကြောင်းအရာ</th>
                                <th scope="col">ဖိုင်များ</th>

                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <th scope="row">{{$message->id}}</th>
                                        <td>{{$message->letterNo}}</td>
                                        <td>{{$message->date}}</td>
                                        <td>{{$message->title}}</td>
                                        <td>{{$message->referLetter}}</td>
                                        <td>{{$message->sender_id}}</td>
                                        <td>{{$message->recipient_user_id}}</td>
                                        <td>
                                            <span class="badge bg-info">{{$message->recipient_user_id}}</span>
                                        </td>
                                        <td>{{$message->detail}}</td>
                                        <td><a href="#">Download</a></td>
                                      </tr> 
                                      @endforeach                                                            
                            </tbody>
                          </table>                                               

                            {{-- {{ $messages->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


