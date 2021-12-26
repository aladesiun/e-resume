@extends('app')
@section('content')
<div>
    <div class="hd_cont">
        <div class="hd_container"> 
            <div class="hd_wrap">
                <div class="hd_top_box">
                    <h2 class="hd_txt">Contact</h2>
                    <div class="tp_box">
                        <div class="icon_wrap">
                            <i class="far fa-eye"></i>
                            <p><a href="" class="eb_link">Preview</a></p>
                        </div>
                        <div class="icon_wrap">
                            <i class="far fa-lightbulb"></i>
                            <p><a href="" class="eb_link">Tips</a><s/p>
                        </div>
                    </div>
                </div>
                <div class="">
                   <p class="job_p">Lorem ipsum dolor sit amet.</p>
                </div>
                <form method="" action="">
                    <div class="row form_row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b" >
                            <p>Email</p>
                            <input type="text" class="form-control" placeholder="Your Email"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box">
                            <p>Address</p>
                            <input type="text" class="form-control" placeholder="Your address"/>
                            </div>
                        </div>
                    </div>
                    <div class="row form_row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-box form_b">
                            <p>city/town</p>
                            <input type="text" class="form-control" placeholder="Your city"/>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-box">
                             <p>country</p>
                             <input type="text" class="form-control" placeholder="Your country"/>
                          </div>
                       </div>
                    </div>
                    <div class="row form_row last_row">
                        <div class="col-lg-4 col-md-4">
                        <div class="form-box form_b">
                            <p>Phone</p>
                            <input type="text" class="form-control" placeholder="+123"/>
                        </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                           <div class="form-box">
                                <p>post code</p>
                                <input type="text" class="form-control" placeholder="e.g 3 3 72"/>  
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-4">
                          <div class="form-box form_b">
                                <p>Name</p>
                                <input type="text" class="form-control" placeholder="Your Name"/>
                           </div>
                        </div>
                    </div>
                    <div class="row form_row last_row">
                        <div class="col-lg-12 col-md-12">
                           <div class="form-box">
                                <p>summary</p>
                                <textarea class="form-control" placeholder="Professional summary">

                                </textarea>
                           </div>
                       </div>
                    </div>
                </form>

                <div class="btn_box">
                  <button class="btn back_btn">
                      Back
                  </button>
                  <button  class="btn nxt_btn">
                     Send
                  </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 