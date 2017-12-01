@extends('project.layouts.layouts')

{{-------------------------------  HEADER  ----------------------}}
@section('header')
    @parent
@endsection

{{-------------------------------  CONTENT  ----------------------}}
@section('content')
    <div class="container" style="text-align: right">
        <button class="btn btn-success print_button" onclick="printFunction()">Տպել</button>
    </div>
    <div class="container view_customer_container" style="padding-top: 20px;padding-bottom: 20px ">
        <div class="row">
            {{--surname/name/patronymic--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-4">Ազգանուն, Անուն, Հայրանուն</div>
                {{--db--}}
                <div class="view_customer_db col-md-8">
                    {{ $customer['surname'] }} &nbsp; {{ $customer['name'] }} &nbsp; {{ $customer['patronymic'] }}
                </div>
            </div>
            {{--day/month/year--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-4">Ծննդյան տարեթիվը, ամիսը, օրը </div>
                {{--db--}}
                <div class="view_customer_db col-md-8">
                    {{ $customer['date'] }}
                </div>
            </div>
            {{--sex--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-4">Սեռը</div>
                {{--db--}}
                <div class="view_customer_db col-md-8" style="border-bottom: none">
                    @if($customer['sex'] == 1)
                        <input type="radio" name="sex" checked> Իգական
                        <input type="radio" name="sex"> Արական
                    @elseif($customer['sex'] == 2)
                        <input type="radio" name="sex"> Իգական
                        <input type="radio" name="sex" checked> Արական
                    @endif
                </div>
            </div>
            {{--living place--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-4">Բնակության վայրը</div>
                {{--db--}}
                <div class="view_customer_db col-md-8">
                    {{ $customer['place'] }}
                </div>
            </div>
            {{--E-mail--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-4">Էլեկտրոնային հասցե</div>
                {{--db--}}
                <div class="view_customer_db col-md-8">
                    {{ $customer['email'] }}
                </div>
            </div>
            {{--tel--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-4">Հեռախոս</div>
                {{--db--}}
                <div class="view_customer_db col-md-8">
                    {{ $customer['tel'] }}
                </div>
            </div>
            {{--signature--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-10">
                    Տալիս եմ համաձայնությունս իմ ներկայացված անհատական տվյալները օրենքով սահմանված անհատական
                    տվյալների պաշտպանության նորմերին համապատասխան, որի համար ստորագրում եմ
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-2" style="padding-top: 52px;"></div>
            </div>
            {{--allergic--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">ՈԻնեցե՞լ եք արդյոք ալերգիկ դրսևորումներ</div>
                {{--db--}}
                <div class="view_customer_db col-md-8" style="border-bottom: none">
                    @if($customer['allergic'] == 1)
                        <input type="radio" name="allergic" checked> Այո
                        <input type="radio" name="allergic"> Ոչ
                    @elseif($customer['allergic'] == 2)
                        <input type="radio" name="allergic"> Այո
                        <input type="radio" name="allergic" checked> Ոչ
                    @endif
                </div>
            </div>
            {{--bleeding--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Հաճախակի՞ եք ունենում արյունահոսություն քթից,հեշտությա՞մբ են առաջանում կապտուկներ,
                    երկարատև՞ է արյունահոսությունը վերքերից կամ հեռացված ատամի ատամնաբնից(ցանկացած առկայության դեպքում նշել այո):
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12" style="border-bottom: none">
                    @if($customer['bleeding'] == 1)
                        <input type="radio" name="bleeding" checked> Այո
                        <input type="radio" name="bleeding"> Ոչ
                    @elseif($customer['bleeding'] == 2)
                        <input type="radio" name="bleeding"> Այո
                        <input type="radio" name="bleeding" checked> Ոչ
                    @endif
                </div>
            </div>
            {{--checkbox illnesses--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    ՈԻնե՞ք կամ երբևէ ունեցել եք ստորև նշված հիվանդություններից որևէ մեկը
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12" style="border-bottom: none">

                    @foreach($illnesses as $illness)
                        <div class="view_customer_checkbox">
                            @if( isset($cust_ill_relation[$illness['id']]) )
                                <input type="checkbox" name="checkbox[]" value="{{ $illness['id'] }}" checked> &nbsp; {{ $illness['illness'] }}
                            @else
                                <input type="checkbox" name="checkbox[]" value="{{ $illness['id'] }}"> &nbsp; {{ $illness['illness'] }}
                            @endif
                        </div>
                    @endforeach

                </div>
            </div>
            {{--new illness--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">ՈԻնե՞ք կամ երբևէ ունեցել եք հիվանդություն,որը նշված չէ,եթե այո,նշեք այն</div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $customer['new_illness'] }}
                </div>
            </div>
            {{--pregnant--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">Կրծքով կերակրու՞մ եք կամ ունեք հղիություն</div>
                {{--db--}}
                <div class="view_customer_db col-md-12" style="border-bottom: none">
                    @if($customer['pregnant'] == 1)
                        <input type="radio" name="pregnant" checked> Այո
                        <input type="radio" name="pregnant"> Ոչ
                    @elseif($customer['pregnant'] == 2)
                        <input type="radio" name="pregnant"> Այո
                        <input type="radio" name="pregnant" checked> Ոչ
                    @endif
                </div>
            </div>
            {{--doctor--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">Բժիշկ/Բժշկուհի</div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $customer['doctor'] }}
                </div>
            </div>


        </div>
    </div>
@endsection