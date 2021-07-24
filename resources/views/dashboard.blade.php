
    @extends('layouts.master')
    @section('title','dashboard')

    @section('main')

        <div class="container" style="direction: rtl;text-align: right">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 edit_information">
                <form action="/dashboard"  method="POST"  style="direction: rtl;text-align: right">
                    @CSRF
                    <br><br><br>
                    <h1 class="text-center">ویرایش اطلاعات</h1>
                    <br><br><br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="profile_details_text">نام خانوادگی:</label>
                                <input type="text" placeholder="{{$profile->name}}"  name="name" class="form-control" value="" required >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="profile_details_text">ایمیل:</label>
                                <input placeholder="{{$profile->email}}" type="email" name="email" class="form-control" value="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label class="profile_details_text">شماره تلفن:</label>
                                <input type="text" name="phone" class="form-control"  >

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="ثبت">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

   @endsection
