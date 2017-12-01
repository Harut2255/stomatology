@extends('project.layouts.layouts')

{{-------------------------------  HEADER  ----------------------}}
@section('header')
    @parent
@endsection

{{-------------------------------  CONTENT  ----------------------}}
@section('content')
    @parent
    <div class="container" xmlns="http://www.w3.org/1999/html">


        <div class="field_title_container col-xs-12">
            <div class="field_title col-md-2">Բժիշկ/Բժշկուհի</div>
            <div class="field_title col-md-2">Ընդհանուր գումար</div>
            <div class="field_title col-md-2">Վճարված գումար</div>
            <div class="field_title col-md-1">Պարտք</div>
            <div class="field_title col-md-2">Ամսաթիվ/ժամ</div>
        </div>

        @foreach($customer_visits as $customer_visit)
            <div class="visit_list_box col-xs-12">
                <a href="{{ route('visit',array('id'=>$customer_visit['id'])) }}">
                    <div class="col-md-2 visit_list_createat">{{ $customer_visit['doctor'] }}</div>
                    <div class="col-md-2 visit_list_createat">{{ $customer_visit['price'] }}</div>
                    <div class="col-md-2 visit_list_createat">{{ $customer_visit['primaryprice'] }}</div>
                    <div class="col-md-1 visit_list_createat">{{ $customer_visit['debt'] }}</div>
                    <div class="col-md-2 visit_list_createat">{{ $customer_visit['created_at'] }}</div>
                </a>
                <div class="col-md-3 visit_list_button">
                    {{--edit--}}
                    <span class="visit_list_edit">
                        <a href="{{ route('editVisit',array('id'=>$customer_visit['id'])) }}">
                            <i class="fa fa-pencil"></i> Խմբագրել
                        </a>
                    </span>
                    {{--delete--}}
                    {{--<span class="visit_list_delete">--}}
                        {{--<a href="{{ route('deleteVisit',array('id'=>$customer_visit['id'])) }}">--}}
                            {{--<i class="fa fa-trash"></i> ջնջել--}}
                        {{--</a>--}}
                    {{--</span>--}}



                    {{--delete--}}
                    <span class="delete_cust" style="display: inline-block">
                        <form action="{{ route('deleteVisit',array('id'=>$customer_visit['id'])) }}" method="post">
                            {{ csrf_field() }}
                            <input type="submit" onclick="return confirm('Are you sure?')" value="ջնջել"
                                   style="padding: 7px" class="delete_new" />
                        </form>
                    </span>





                </div>
            </div>
        @endforeach

    </div>
@endsection