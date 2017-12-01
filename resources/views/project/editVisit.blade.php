@extends('project.layouts.layouts')

{{-------------------------------  HEADER  ----------------------}}
@section('header')
    @parent
@endsection

{{-------------------------------  CONTENT  ----------------------}}
@section('content')
    @parent
    <div class="container">
        <div class="row">
            <div class="title_add_page">ԲԵՐԱՆԻ ԽՈՌՈՉԻ ՎԻՃԱԿԸ</div>
            {{--FORM--}}
            <form class="add_form form-horizontal" action="{{ route('editVisit',array('id'=>$id)) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>

                    <div class="container-fluid">
                        <div class="row">
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
                            <div class="col-md-12">

                                <table class="tooth_ill" style="margin: 20px auto">
                                    <tr>
                                        <td>
                                            <textarea name="18" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 18){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="17" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 17){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="16" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 16){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="15" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 15){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="14" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 14){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="13" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 13){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="12" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 12){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="11" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 11){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="21" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 21){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="22" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 22){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="23" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 23){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="24" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 24){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="25" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 25){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="26" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 26){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="27" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 27){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="28" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 28){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
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
                                            <textarea name="48" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 48){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="47" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 47){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="46" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 46){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="45" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 45){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="44" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 44){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="43" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 43){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="42" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 42){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="41" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 41){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="31" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 31){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="32" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 32){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="33" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 33){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="34" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 34){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="35" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 35){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="36" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 36){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="37" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 37){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                        <td>
                                            <textarea name="38" class="textarea" cols="5">@foreach($teeth as $tooth)@if($tooth['tooth'] == 38){{ $tooth['tooth_ill'] }}@endif @endforeach</textarea>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>




                    {{--mouth_state--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Հարատամնահյուսվածքի և բերանի խոռոչի լորձաթաղանթի վիճակը
                        </label>
                        <textarea name="mouth_state" class="form-control materail_input material_textarea" style="overflow-y: hidden;">{{ $visit['mouth_state'] }}</textarea>
                    </div>
                    {{--kc_type--}}
                    <div class="form-group col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">Կծվածքի տեսակը</label>

                        <div class="col-md-2">
                            <label class="material_radio_group" for="radio1">
                                @if($visit['kc_type'] == 1)
                                    <input type="radio" name="kc_type" id="radio1" class="material_radiobox" value="1" checked />
                                @else
                                    <input type="radio" name="kc_type" id="radio1" class="material_radiobox" value="1" />
                                @endif
                                <span class="material_check_radio"></span>
                                բնականոն
                            </label>
                        </div>
                        <div class="col-md-2">
                            <div style="font-size: 16px;font-weight: bold;padding-bottom: 15px">
                                ախտաբանական
                            </div>
                            <label class="material_radio_group" for="radio2" style="display: block">
                                @if($visit['kc_type'] == 2)
                                    <input type="radio" name="kc_type" id="radio2" class="material_radiobox" value="2" checked />
                                @else
                                    <input type="radio" name="kc_type" id="radio2" class="material_radiobox" value="2" />
                                @endif
                                <span class="material_check_radio"></span>
                                հեռադիր
                            </label>
                            <label class="material_radio_group" for="radio3" style="display: block">
                                @if($visit['kc_type'] == 3)
                                    <input type="radio" name="kc_type" id="radio3" class="material_radiobox" value="3" checked />
                                @else
                                    <input type="radio" name="kc_type" id="radio3" class="material_radiobox" value="3" />
                                @endif
                                <span class="material_check_radio"></span>
                                միջադիր
                            </label>
                            <label class="material_radio_group" for="radio4" style="display: block">
                                @if($visit['kc_type'] == 4)
                                    <input type="radio" name="kc_type" id="radio4" class="material_radiobox" value="4" checked />
                                @else
                                    <input type="radio" name="kc_type" id="radio4" class="material_radiobox" value="4" />
                                @endif
                                <span class="material_check_radio"></span>
                                խոր
                            </label>
                            <label class="material_radio_group" for="radio5" style="display: block">
                                @if($visit['kc_type'] == 5)
                                    <input type="radio" name="kc_type" id="radio5" class="material_radiobox" value="5" checked />
                                @else
                                    <input type="radio" name="kc_type" id="radio5" class="material_radiobox" value="5" />
                                @endif
                                <span class="material_check_radio"></span>
                                բաց
                            </label>
                            <label class="material_radio_group" for="radio6" style="display: block">
                                @if($visit['kc_type'] == 6)
                                    <input type="radio" name="kc_type" id="radio6" class="material_radiobox" value="6" checked />
                                @else
                                    <input type="radio" name="kc_type" id="radio6" class="material_radiobox" value="6" />
                                @endif
                                <span class="material_check_radio"></span>
                                խաչաձև
                            </label>
                        </div>
                    </div>
                    {{--examination--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Ճառագայթային ախտորոշիչ հետազոտություն
                        </label>
                        <textarea name="examination" class="form-control materail_input material_textarea" style="overflow-y: hidden;">{{ $visit['examination'] }}</textarea>
                    </div>
                    {{--gigienik--}}
                    <div class="form-group col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Բերանի խոռոչի հիգենիկ վիճակը
                        </label>
                        <div class="col-md-12">
                            <label class="material_radio_group" for="radio2-1">
                                @if($visit['gigienik'] == 1)
                                    <input type="radio" name="gigienik" id="radio2-1" class="material_radiobox" value="1" checked />
                                @else
                                    <input type="radio" name="gigienik" id="radio2-1" class="material_radiobox" value="1" />
                                @endif
                                <span class="material_check_radio"></span>
                                վատ
                            </label>
                            <label class="material_radio_group" for="radio2-2">
                                @if($visit['gigienik'] == 2)
                                    <input type="radio" name="gigienik" id="radio2-2" class="material_radiobox" value="2" checked />
                                @else
                                    <input type="radio" name="gigienik" id="radio2-2" class="material_radiobox" value="2" />
                                @endif
                                <span class="material_check_radio"></span>
                                բավարար
                            </label>
                            <label class="material_radio_group" for="radio2-3">
                                @if($visit['gigienik'] == 3)
                                    <input type="radio" name="gigienik" id="radio2-3" class="material_radiobox" value="3" checked />
                                @else
                                    <input type="radio" name="gigienik" id="radio2-3" class="material_radiobox" value="3" />
                                @endif
                                <span class="material_check_radio"></span>
                                լավ
                            </label>
                        </div>
                    </div>

                    <div class="title_add_page">ԲՈՒԺՄԱՆ ԳՈՐԾԸՆԹԱՑ</div>
                    {{--id--}}
                    <input name="customer_id" type="hidden" value="{{ $id }}">

                    {{--reason_subject--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Այցի պատճառը(սուբյեկտիվ տվյալներ)
                        </label>
                        <textarea name="reason_subject" class="form-control materail_input material_textarea" style="overflow-y: hidden;">{{ $visit['reason_subject'] }}</textarea>
                    </div>
                    {{--reason_object--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Օբյեկտիվ տվյալներ
                        </label>
                        <textarea name="reason_object" class="form-control materail_input material_textarea" style="overflow-y: hidden;">{{ $visit['reason_object'] }}</textarea>
                    </div>
                    {{--diagnosis--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Ախտորոշում
                        </label>
                        <textarea name="diagnosis" class="form-control materail_input material_textarea" style="overflow-y: hidden;">{{ $visit['diagnosis'] }}</textarea>
                    </div>
                    {{--Treat--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Բուժումը (բուժման պլանը)
                        </label>
                        <textarea name="treat" class="form-control materail_input material_textarea" style="overflow-y: hidden;">{{ $visit['treat'] }}</textarea>
                    </div>
                    {{--price--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">
                            {{--ERROR--}}
                            @if (count($errors) > 0)
                                <span style="color: #ff0000">{{ $errors->first() }}</span>
                            @endif
                            Ընդհանուր գումար
                        </label>
                        <div class="col-md-8">
                            <input name="price" type="text" class="form-control materail_input" value=" {{ $visit['price'] }}" />
                        </div>
                    </div>
                    {{--primaryprice--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">
                            {{--ERROR--}}
                            @if (count($errors) > 0)
                                <span style="color: #ff0000">{{ $errors->first() }}</span>
                            @endif
                            Վճարված գումար
                        </label>
                        <div class="col-md-8">
                            <input name="primaryprice" type="text" class="form-control materail_input" value="{{ $visit['primaryprice'] }}" />
                        </div>
                    </div>
                    {{--debt--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">
                            {{--ERROR--}}
                            @if (count($errors) > 0)
                                <span style="color: #ff0000">{{ $errors->first() }}</span>
                            @endif
                            Պարտք
                        </label>
                        <div class="col-md-8">
                            <input name="debt" type="text" class="form-control materail_input" value="{{ $visit['debt'] }}" />
                        </div>
                    </div>
                    {{--doctor--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">Բժիշկ</label>
                        <div class="col-md-8">
                            <input name="doctor" type="text" class="form-control materail_input" value=" {{ $visit['doctor'] }}" />
                        </div>
                    </div>
                    {{--code--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-2 control-label">Գրանցման կոդ</label>
                        <div class="col-md-2">
                            <input name="code" type="text" class="form-control materail_input" value="{{ $visit['code'] }}" />
                        </div>
                    </div>


                    @if($visit['images'])
                        <input type="hidden" name="old_images" value="{{ $visit['images'] }}" />
                    <!--1-->
                        <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col'>
                            <p style="font-size: 20px">1-ին նկար</p>
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
                        <!--2-->
                        <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col'>
                            <p style="font-size: 20px">2-րդ նկար</p>
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
                        <!--3-->
                        <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col'>
                            <p style="font-size: 20px">3-րդ նկար</p>
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
                        <!--4-->
                        <div class='col-xs-6 col-md-4 col-lg-3 thumb thumb_col'>
                            <p style="font-size: 20px">4-րդ նկար</p>
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
                    {{--Images--}}
                    <div class="form-group col-md-12">
                        <label class="col-md-2 control-label">Ընտրել նկարներ</label>
                        <div class="col-md-4">
                            {{--1--}}
                            <p>
                                1<input name='images' type='file' value="{{ old('images') }}" style="padding: 5px">
                            </p>
                            {{--2--}}
                            <p>
                                2<input name='images2' type='file' value="{{ old('image2') }}" style="padding: 5px">
                            </p>
                            {{--3--}}
                            <p>
                                3<input name='images3' type='file' value="{{ old('image3') }}" style="padding: 5px">
                            </p>
                            {{--4--}}
                            <p>
                                4<input name='images4' type='file' value="{{ old('images4') }}" style="padding: 5px">
                            </p>

                        </div>
                    </div>

                    {{--Button--}}
                    <button name="submit" type="submit" class="btn-change">Փոփոխել</button>

                </fieldset>
            </form>

        </div>
    </div>

@endsection


@section('js')
    @parent
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.8.20/jquery-ui.min.js" type="text/javascript"></script>
    {{--<script src="http://jquery-ui.googlecode.com/svn/tags/latest/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>--}}
    {{--<script src="http://jquery-ui.googlecode.com/svn/tags/latest/ui/minified/i18n/jquery-ui-i18n.min.js" type="text/javascript"></script>--}}
@endsection