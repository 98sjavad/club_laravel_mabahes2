@extends('layouts.master')
@section('title','index')

@section('main')


    <div class="container" style="direction:rtl">
        <form method="post" action="/index" style="direction: rtl;text-align: right">
            @csrf
            <h2>رزرو سانس</h2>
            <br>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="phone">تاریخ</label>
                    <input type="date" name="date"  class="form-control" id="phone" placeholder="phone">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="email">محل سانس</label>
                        <select name="place"  class="form-select" aria-label="Default select example">
                            <option selected>محل را انتخاب کنید</option>
                            <option value="1">سالن 1</option>
                            <option value="2">سالن 2</option>

                        </select>                    </div>
                </div>




                <!--  col-md-6   -->


                <!--  col-md-6   -->
            </div>
            <!--  row   -->


            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="email">سانس</label>
                        <select name="sans" class="form-select" aria-label="Default select example">
                            <option selected>سانس را انتخاب کنید</option>
                            <option value="1">8-10</option>
                            <option value="2">10-12</option>
                            <option value="3">12-14</option>
                            <option value="4">14-16</option>
                            <option value="5">16-18</option>
                            <option value="6">18-20</option>
                            <option value="7">20-22</option>

                        </select>                    </div>
                </div>
                <!--  col-md-6   -->




                <!--  col-md-6   -->
            </div>
            <!--  row   -->




            <label for="newsletter">وضعیت پرداخت</label>
            <div class="checkbox">

                <label>
                    <input  name="amount" type="checkbox" value="1" id="newsletter" >  &nbsp&nbsp  پرداخت شده
                </label>
            </div>


            <button type="submit" class="btn btn-primary">ثبت</button>
        </form>
    </div>


@endsection()
