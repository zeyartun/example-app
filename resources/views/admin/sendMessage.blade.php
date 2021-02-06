@extends('../layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-12"><h3 class="text-center py-3">Welcome To Zeyar Office</h3></div>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label class="form-label">စာအမှတ်အမှတ်</label>
                                <input type="text" class="form-control" id="letterId" placeholder="စာအမှတ်အမှတ်">
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">ရက်စွဲ</label>
                                <input type="date" class="form-control" id="date">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">ခေါင်းစဉ်</label>
                                <input type="text" class="form-control" id="title" placeholder="ခေါင်းစဉ်">
                              </div>
                              <div class="mb-3">
                                <label class="form-label">ရည်ညွှန်းစာ</label>
                                <input type="text" class="form-control" id="copyUser" placeholder="ရည်ညွှန်းစာ">
                              </div>
                              <div class="dropdown mb-3">
                                <select name="toUser" class="select mb-3 p-2 px-3">
                                    <option selected>ပို့ပေးမည့်သူရွေးပါ</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                  </select>
                              </div>
                              <div class="mb-3">
                                <div class="btn btn-info form-label px-3">ပူးတွဲပါ</div>
                              </div>
                              <div class="dropdown mb-3" id="ccuser">
                                <select name="ccUser" class="select mb-3 p-2 px-3">
                                    <option selected>ပူးတွဲ ပို့ပေးမည့်သူရွေးပါ</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="fiat">Fiat</option>
                                    <option value="audi">Audi</option>
                                  </select>
                                <a href="#" class="btn btn-danger"> x </a>
                              </div>
                              <div class="mb-3">
                                <label class="form-label">အကြောင်းအရာ</label>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="formFile" class="form-label">ဖိုင်များ တွဲ တင်ရန်တင်ရန်</label>
                                <input class="form-control" type="file" id="formFile">
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
@endsection


