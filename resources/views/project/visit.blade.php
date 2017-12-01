@extends('project.layouts.layouts')

{{-------------------------------  HEADER  ----------------------}}
@section('header')
    @parent
@endsection

{{-------------------------------  CONTENT  ----------------------}}
@section('content')
    @parent
    <div class="container" style="text-align: right">
        <button class="btn btn-success print_button" onclick="printFunction()">Տպել</button>
    </div>
    <div class="container">
        <div class="row">

            <div class="title_add_page">ԲԵՐԱՆԻ ԽՈՌՈՉԻ ՎԻՃԱԿԸ</div>

            <div class="container-fluid">
                <div class="col-md-4">
                    <h4>Օրթոպեդիկ Ծառայություններ</h4>
                    <div class="col-md-10 toothIllBox" style="padding: 0">
                        <ul style="padding: 0;list-style: none">
                            <li>Ձուլովի գամիկ</li>
                            <li>Ցերկոնային գամիկ</li>
                            <li>Մետալոպլաստմասսա</li>
                            <li>Մետալոկերամիկա/Noritake</li>
                            <li>Մետալոկերամիկա/Ivoclar</li>
                            <li>Ցերկոնային կերամիկա/Noritake</li>
                            <li>Ցերկոնային կերամիկա/Ivoclar</li>
                            <li>Ամբողջական ձուլովի շապիկ</li>
                            <li>Ժամանակավոր ատամի պատրաստում</li>
                            <li>Թիթեղային պրոտեզ</li>
                            <li>Բյուգելաըին պրոտեզ</li>
                            <li>Ճկվող պրոտեզ</li>
                            <li>Վալպլաստ(բիոպլաստ)</li>
                            <li>Իմպլանտի շապիկավորում/Noritake</li>
                            <li>Իմպլանտի շապիկավորում/Ivoclar</li>
                        </ul>
                    </div>
                    <div class="col-md-2 toothIllBox" style="padding: 0">
                        {{--Ilnesses--}}
                        <ul class="table_illnesses" id="allfields" runat="server">
                            <li id="node1">A</li>
                            <li id="node2">B</li>
                            <li id="node3">C</li>
                            <li id="node4">D</li>
                            <li id="node5">E</li>
                            <li id="node6">F</li>
                            <li id="node7">G</li>
                            <li id="node8">H</li>
                            <li id="node9">I</li>
                            <li id="node10">J</li>
                            <li id="node11">K</li>
                            <li id="node12">L</li>
                            <li id="node13">M</li>
                            <li id="node14">N</li>
                            <li id="node15">O</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <h4>Վիրաբուժական Ծառայություններ</h4>
                    <div class="col-md-10 toothIllBox" style="padding: 0">
                        <ul style="padding: 0;list-style: none">
                            <li>Ատամի հեռացում</li>
                            <li>8 -րդ ատամի հեռացում</li>
                            <li>Վիրաբուժական կար</li>
                            <li>Մասնակի ռետենցիա</li>
                            <li>Լրիվ ռետենցիա</li>
                            <li>Ապիկոտոմիա</li>
                            <li>Իմպլանտացիա-Իզրաելական</li>
                            <li>Իմպլանտացիա-Գերմանական</li>
                            <li>Հերմիսեկցիա</li>
                        </ul>
                    </div>
                    <div class="col-md-2 toothIllBox" style="padding: 0">
                        {{--Ilnesses--}}
                        <ul class="table_illnesses" id="allfields" runat="server">
                            <li id="node1">P</li>
                            <li id="node2">Q</li>
                            <li id="node3">R</li>
                            <li id="node4">S</li>
                            <li id="node5">T</li>
                            <li id="node6">U</li>
                            <li id="node7">V</li>
                            <li id="node8">W</li>
                            <li id="node9">X</li>
                        </ul>
                    </div>
                </div>



                <div class="col-md-4">
                    <h4>Ատամնաքարերի Հեռացում,Փայլեցում</h4>
                    <div class="col-md-10 toothIllBox" style="padding: 0">
                        <ul style="padding: 0;list-style: none">
                            <li>ՈՒլտրաձայնային եղանակ</li>
                            <li>air flow</li>
                            <li>Քիմիական սպիտակեցում</li>
                            <li>Ատամների փայլեցում</li>
                            <li>Լնդերի համալիր բուժում</li>
                            <li>Շինա 1 ատամ</li>
                            <li>Սքայզ</li>
                        </ul>
                    </div>
                    <div class="col-md-2 toothIllBox" style="padding: 0">
                        {{--Ilnesses--}}
                        <ul class="table_illnesses" id="allfields" runat="server">
                            <li id="node1">Y</li>
                            <li id="node2">Z</li>
                            <li id="node3">A.A</li>
                            <li id="node4">A.B</li>
                            <li id="node5">A.C</li>
                            <li id="node6">A.D</li>
                            <li id="node7">A.E</li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-12">
                    <h4>Էնդոդոնտիա</h4>
                    <div class="col-md-4 toothIllBox" style="padding: 0">
                        <ul style="padding: 0;list-style: none">
                            <li>Արմատախողովակի բուժում</li>
                            <li>Ապակեմանրէաթելային կամրջի պատրաստում</li>
                        </ul>
                    </div>
                    <div class="col-md-1 toothIllBox" style="padding: 0">
                        {{--Ilnesses--}}
                        <ul class="table_illnesses" id="allfields" runat="server">
                            <li id="node1">A.F</li>
                            <li id="node2">A.G</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <h4>Թերապևտիկ ծառայություններ</h4>
                    <div class="col-md-4 toothIllBox" style="padding: 0">
                        <ul style="padding: 0;list-style: none">
                            <li>Ատամի պլոմբա</li>
                            <li>Ատամի ռեստավրացիա</li>
                            <li>Կարիես բծի շրջանում </li>
                            <li>Միջին կարիես </li>
                            <li>Խորանիստ կարիես </li>
                            <li>Ապակեմանրէաթելային գամիկ</li>
                        </ul>
                    </div>
                    <div class="col-md-1 toothIllBox" style="padding: 0">
                        {{--Ilnesses--}}
                        <ul class="table_illnesses" id="allfields" runat="server">
                            <li id="node1">A.H</li>
                            <li id="node2">A.I</li>
                            <li id="node3">A.J</li>
                            <li id="node4">A.K</li>
                            <li id="node5">A.L</li>
                            <li id="node6">A.M</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-4 toothIllBox" style="padding: 0">
                        <ul style="padding: 0;list-style: none">
                            <li>Ռենտգեն</li>
                        </ul>
                    </div>
                    <div class="col-md-1 toothIllBox" style="padding: 0">
                        {{--Ilnesses--}}
                        <ul class="table_illnesses" id="allfields" runat="server">
                            <li id="node1">RH</li>
                        </ul>
                    </div>
                </div>
                {{--Table--}}
                <div class="col-md-12 text-center">
                    <table class="tooth_ill tooth_ill_visit">
                        <tr>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 18)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 17)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 16)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 15)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 14)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 13)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 12)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 11)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 21)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 22)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 23)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 24)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 25)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 26)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 27)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 28)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>17</td>
                            <td>16</td>
                            <td>15</td>
                            <td>14</td>
                            <td>13</td>
                            <td>12</td>
                            <td>11</td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                        </tr>
                        <tr>
                            <td>48</td>
                            <td>47</td>
                            <td>46</td>
                            <td>45</td>
                            <td>44</td>
                            <td>43</td>
                            <td>42</td>
                            <td>41</td>
                            <td>31</td>
                            <td>32</td>
                            <td>33</td>
                            <td>34</td>
                            <td>35</td>
                            <td>36</td>
                            <td>37</td>
                            <td>38</td>
                        </tr>
                        <tr>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 48)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 47)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 46)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 45)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 44)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 43)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 42)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 41)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 31)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 32)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 33)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 34)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 35)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 36)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 37)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($tooth_visits as $tooth_visit)
                                    @if($tooth_visit['tooth'] == 38)
                                        <textarea  cols="5" disabled>{{ $tooth_visit['tooth_ill'] }}</textarea>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            {{--mouth_state--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Հարատամնահյուսվածքի և բերանի խոռոչի լորձաթաղանթի վիճակը
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $visit['mouth_state'] }}
                </div>
            </div>

            {{--kc_type--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">Կծվածքի տեսակը.</div>
                {{--db--}}
                <div class="view_customer_db col-md-12" style="border-bottom: none">
                    <div class="col-md-2">
                        @if($visit['kc_type'] == 1)
                            <input type="radio" name="kc_type" checked> բնականոն
                        @else
                            <input type="radio" name="kc_type"> բնականոն
                        @endif
                    </div>
                    <div class="col-md-2">
                        <div style="font-size: 16px;font-weight: bold;padding-bottom: 15px">
                            ախտաբանական
                        </div>
                            <div>
                                @if($visit['kc_type'] == 2)
                                    <input type="radio" name="kc_type" checked /> հեռադիր
                                @else
                                    <input type="radio" name="kc_type" /> հեռադիր
                                @endif
                            </div>
                            <div>
                                @if($visit['kc_type'] == 3)
                                    <input type="radio" name="kc_type" checked /> միջադիր
                                @else
                                    <input type="radio" name="kc_type" /> միջադիր
                                @endif
                            </div>
                            <div>
                                @if($visit['kc_type'] == 4)
                                    <input type="radio" name="kc_type" checked /> խոր
                                @else
                                    <input type="radio" name="kc_type" /> խոր
                                @endif
                            </div>
                            <div>
                                @if($visit['kc_type'] == 5)
                                    <input type="radio" name="kc_type" checked /> բաց
                                @else
                                    <input type="radio" name="kc_type" /> բաց
                                @endif
                            </div>
                            <div>
                                @if($visit['kc_type'] == 6)
                                    <input type="radio" name="kc_type" checked /> խաչաձև
                                @else
                                    <input type="radio" name="kc_type" /> խաչաձև
                                @endif
                            </div>
                    </div>
                </div>
            </div>

            {{--examination--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Ճառագայթային ախտորոշիչ հետազոտություն.
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $visit['examination'] }}
                </div>
            </div>

            {{--gigienik--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">Կծվածքի տեսակը.</div>
                {{--db--}}
                <div class="view_customer_db col-md-12" style="border-bottom: none">
                    @if($visit['gigienik'] == 1)
                        <input type="radio" name="gigienik" checked /> վատ
                    @else
                        <input type="radio" name="gigienik" /> վատ
                    @endif
                    @if($visit['gigienik'] == 2)
                        <input type="radio" name="gigienik" checked /> բավարար
                    @else
                        <input type="radio" name="gigienik" /> բավարար
                    @endif
                    @if($visit['gigienik'] == 3)
                        <input type="radio" name="gigienik" checked /> լավ
                    @else
                        <input type="radio" name="gigienik" /> լավ
                    @endif
                </div>
            </div>

            <div class="title_add_page col-xs-12">ԲՈՒԺՄԱՆ ԳՈՐԾԸՆԹԱՑ</div>

            {{--reason_subject--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Այցի պատճառը(սուբյեկտիվ տվյալներ)
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $visit['reason_subject'] }}
                </div>
            </div>

            {{--reason_object--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Օբյեկտիվ տվյալներ
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $visit['reason_object'] }}
                </div>
            </div>

            {{--diagnosis--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Ախտորոշում
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $visit['diagnosis'] }}
                </div>
            </div>

            {{--treat--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Բուժումը (բուժման պլանը)
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-12">
                    {{ $visit['treat'] }}
                </div>
            </div>

            {{--price--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Ընդհանուր գումար
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-4">
                    {{ $visit['price'] }}
                </div>
            </div>

            {{--primaryprice--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Վճարված գումար
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-4">
                    {{ $visit['primaryprice'] }}
                </div>
            </div>

            {{--debt--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Պարտք
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-4">
                    {{ $visit['debt'] }}
                </div>
            </div>

            {{--doctor--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Բժիշկ
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-4">
                    {{ $visit['doctor'] }}
                </div>
            </div>

            {{--code--}}
            <div class="view_visit_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-12">
                    Գրանցման կոդ
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-4">
                    {{ $visit['code'] }}
                </div>
            </div>

            @if($visit['images'])
                <input type="hidden" name="old_images" value="{{ $visit['images'] }}" />
                <!--1-->
                <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col' style="margin: 25px 0">
                    <a class='thumbnail gallery_box' href='#'
                       data-image-id=''
                       data-toggle='modal'
                       data-image='{{ asset('assets/images') }}/{{ $visit['images'] }}'
                       data-target='#image-gallery'>
                        <img src="{{ asset('assets/images') }}/{{ $visit['images'] }}" />
                    </a>
                </div>
            @endif

            @if($visit['images2'])
                <input type="hidden" name="old_images2" value="{{ $visit['images2'] }}" />
                <!--1-->
                <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col' style="margin: 25px 0">
                    <a class='thumbnail gallery_box' href='#'
                       data-image-id=''
                       data-toggle='modal'
                       data-image='{{ asset('assets/images') }}/{{ $visit['images2'] }}'
                       data-target='#image-gallery'>
                        <img src="{{ asset('assets/images') }}/{{ $visit['images2'] }}" />
                    </a>
                </div>
            @endif

            @if($visit['images3'])
                <input type="hidden" name="old_images3" value="{{ $visit['images3'] }}" />
                <!--1-->
                <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col' style="margin: 25px 0">
                    <a class='thumbnail gallery_box' href='#'
                       data-image-id=''
                       data-toggle='modal'
                       data-image='{{ asset('assets/images') }}/{{ $visit['images3'] }}'
                       data-target='#image-gallery'>
                        <img src="{{ asset('assets/images') }}/{{ $visit['images3'] }}" />
                    </a>
                </div>
            @endif

            @if($visit['images4'])
                <input type="hidden" name="old_images4" value="{{ $visit['images4'] }}" />
                <!--1-->
                <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col' style="margin: 25px 0">
                    <a class='thumbnail gallery_box' href='#'
                       data-image-id=''
                       data-toggle='modal'
                       data-image='{{ asset('assets/images') }}/{{ $visit['images4'] }}'
                       data-target='#image-gallery'>
                        <img src="{{ asset('assets/images') }}/{{ $visit['images4'] }}" />
                    </a>
                </div>
            @endif

        <!--Modal-->
            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body modal-body_modal">
                            <img id="image-gallery-image" class="img-responsive" src="">
                        </div>
                    </div>
                </div>
            </div>


            {{--signature--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-10 text-right">
                    Բժշկի ստորագրությունը
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-2" style="padding-top: 32px;"></div>
            </div>

            {{--signature--}}
            <div class="view_customer_box col-xs-12">
                {{--title--}}
                <div class="view_customer_title col-md-10 text-right">
                    Պոցենտի ստորագրությունը
                </div>
                {{--db--}}
                <div class="view_customer_db col-md-2" style="padding-top: 32px;"></div>
            </div>

        </div>
    </div>
@endsection