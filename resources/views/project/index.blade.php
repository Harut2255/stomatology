@extends('project.layouts.layouts')

{{-------------------------------  HEADER  ----------------------}}
@section('header')
    @parent
@endsection

{{-------------------------------  CONTENT  ----------------------}}
@section('content')
    @parent
    <div class="container-fluid content">




        {{--Search--}}
        <div class="col-xs-6" style="padding-top: 5px;padding-bottom: 5px">
            {!! Form::open(['method' => 'GET','url' => route('search'),'class' => 'form-horizontal','role'=>'search']) !!}
            <div class="input-group custom-search-form">
                <input type="text" name="search" class="form-control" placeholder="Որոնում..." />
                <span class="input-group-btn">
                <button type="submit" class="btn btn-default-sm">
                    <i class="fa fa-search"></i>
                </button>
            </span>
            </div>
            {!! Form::close() !!}
        </div>


        {{--Search doctor--}}
        <div class="col-xs-6" style="padding-top: 5px;padding-bottom: 5px">
            <div class="col-xs-6">
                <h4 style="text-align: right">Որոնում ըստ բժշկի անվան</h4>
            </div>
            <div class="col-xs-6">
                {!! Form::open(['method' => 'GET','url' => route('searchDoctor'),'class' => 'form-horizontal','role'=>'search']) !!}
                <div class="input-group custom-search-form">
                    <input type="text" name="search_doctor" class="form-control" placeholder="Որոնում..." />
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default-sm">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                {!! Form::close() !!}
            </div>

        </div>






        <div class="field_title_container col-xs-10">
            <div class="field_title col-md-2">Անուն</div>
            <div class="field_title col-md-2">Ազգանուն</div>
            <div class="field_title col-md-2">Հայրանուն</div>
            <div class="field_title col-md-2">Հեռախոս</div>
            <div class="field_title col-md-2">Բժիշկ/ուհի</div>
            <div class="field_title col-md-2">Ստեղծված է</div>
        </div>

        {{--customer box--}}
        @foreach($customers as $customer)

                <div class="col-xs-12 customer_box">

                    <div class="col-md-12" style="padding: 0;">
                        {{--Add visit--}}
                        <span class="add_visit">
                            <a href="{{ route('addVisit',array('id'=>$customer->id)) }}">Ավելացնել Այցելություն</a>
                        </span>
                        {{--View visits--}}
                        <span class="view_visit">
                            <a href="{{ route('visitList',array('id'=>$customer->id)) }}">Դիտել Այցելությունները</a>
                        </span>
                    </div>


                    {{--customer_box_info--}}
                    <div class="col-md-10 customer_box_info">
                        <a href="{{ route('customer',array('id'=>$customer->id)) }}">
                            <div class="field_item col-md-2">
                                <div class="field_value">{{ $customer->name }}</div>
                            </div>
                            <div class="field_item col-md-2">
                                <div class="field_value">{{ $customer->surname }}</div>
                            </div>
                            <div class="field_item col-md-2">
                                <div class="field_value">{{ $customer->patronymic }}</div>
                            </div>
                            <div class="field_item col-md-2">
                                <div class="field_value">{{ $customer->tel }}</div>
                            </div>
                            <div class="field_item col-md-2">
                                <div class="field_value">{{ $customer->doctor }}</div>
                            </div>
                            <div class="field_item col-md-2">
                                <div class="field_value">{{ $customer->created_at }}</div>
                            </div>
                        </a>
                    </div>

                    {{--customer_box_button--}}
                    <div class="col-md-2 customer_box_button">
                        {{--edit--}}
                        <span class="edit_cust">
                            <a href="{{ route('edit',array('id'=>$customer->id)) }}"><i class="fa fa-pencil"></i> խմբագրել</a>
                        </span>
                        {{--delete--}}
                        {{--<span class="delete_cust">--}}
                            {{--<a href="{{ route('delete',array('id'=>$customer->id)) }}"><i class="fa fa-trash"></i> ջնջել</a>--}}
                        {{--</span>--}}


                        {{--delete--}}
                        <span class="delete_cust">
                            <form action="{{ route('delete',array('id'=>$customer->id)) }}" method="post">
                                {{ csrf_field() }}
                                <input type="submit" onclick="return confirm('Are you sure?')" value="ջնջել" class="delete_new" />
                            </form>
                        </span>





                        {{--<form action="/admin/transaction/delete" method="post">--}}
                            {{--<input type="hidden" value="58a861c058fcdf9c666561bf" name="id"/>--}}
                            {{--<button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">--}}
                                {{--DELETE--}}
                            {{--</button>--}}
                        {{--</form>--}}






                    </div>




                </div>
        @endforeach



        {{--Pagination--}}
        <div class="col-xs-12 pagination">{{ $customers->links() }}</div>

    </div>
@endsection