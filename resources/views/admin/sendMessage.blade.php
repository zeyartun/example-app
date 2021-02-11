@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12"><h3 class="text-center py-3">Welcome To Zeyar Office</h3></div>
                        <form action="/admin/saveMessage" method="post" multiple>
                          @csrf
                            <div class="mb-3">
                                <label class="form-label">စာအမှတ်အမှတ်</label>
                                <input type="text" class="form-control" name="letterId" placeholder="စာအမှတ်အမှတ်" required>
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">ရက်စွဲ</label>
                                <input type="date" class="form-control" name="date" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">ခေါင်းစဉ်</label>
                                <input type="text" class="form-control" name="title" placeholder="ခေါင်းစဉ်" required>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">ရည်ညွှန်းစာ</label>
                                <input type="text" class="form-control" name="refLetter" placeholder="ရည်ညွှန်းစာ" required>
                              </div>
                              <div class="dropdown mb-3">
                                <select name="toUser" class="select mb-3 p-2 px-3">
                                    <option selected>ပို့ပေးမည့်သူရွေးပါ</option>
                                    @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>                                        
                                    @endforeach
                                  </select>
                              </div>
                              <div class="mb-3">
                                <div class="btn btn-info form-label px-3" id="addcopy">ပူးတွဲပို့မည့်သူထည့်ပါ</div>
                              </div>
                              <div id="ccUser"></div>
                              <div class="mb-3">
                                <label class="form-label">အကြောင်းအရာ</label>
                                <textarea class="form-control" name="message" rows="3" required></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="formFile" class="form-label">ဖိုင်များ တွဲ တင်ရန်တင်ရန်</label>
                                <input class="form-control" type="file" name="upload[]" type="file" multiple="multiple">
                              </div>
                              <div class="mb-3 text-end">
                                <input type="submit" class="btn btn-success" value="Send">
                           </div>
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function(){
  var i =0;
    $('#addcopy').click(function(){
      ++i;
      $("#ccUser").append('<div class="dropdown mb-3" id="ccUser'+i+'"><select name="ccUser['+i+']" class="select mb-3 p-2 px-3"><option selected>ပူးတွဲ ပို့ပေးမည့်သူရွေးပါ</option>@foreach($users as $user)<option value="{{$user->id}}">{{$user->name}}</option>@endforeach</select><a class="btn btn-danger m-2" id="ccuserdelete'+i+'" onclick="hide('+i+')"> x </a></div></div> ');
        
      });
  })    

  function hide(j){
       let y = document.getElementById(`ccUser${j}`);
       y.innerHTML=" ";

    }
  

</script>
@endsection


