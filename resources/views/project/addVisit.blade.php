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
            <form class="add_form form-horizontal" action="{{ route('addVisit',array('id'=>$id)) }}" id="form1" runat="server" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                    <div class="container-fluid">
                        <div class="row">
                            {{--<div class="col-md-4">--}}
                                {{--<div class="col-md-9" style="padding: 0">--}}
                                    {{--<ul style="padding: 0;list-style: none">--}}
                                        {{--<li>Բացակայող ատամ - </li>--}}
                                        {{--<li>Սեպաձև դեֆեկտ - </li>--}}
                                        {{--<li>Ատամնատուփ - </li>--}}
                                        {{--<li>Պուլպիտ/կակղանաբորբ/ - </li>--}}
                                        {{--<li>Պերիոդոնտիտ/Շուրջատամնաբորբ/ - </li>--}}
                                        {{--<li>Արմատ - </li>--}}
                                        {{--<li>Իմպլանտ/ներտունկ/ - </li>--}}
                                        {{--<li>Ատամնալիցք - </li>--}}
                                        {{--<li>Ատամնափառ - </li>--}}
                                        {{--<li>Ատամնաքար - </li>--}}
                                        {{--<li>Արհեստական պսակ - </li>--}}
                                        {{--<li>Ատամների շարժունություն - </li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3" style="padding: 0">--}}
                                    {{--Ilnesses--}}
                                    {{--<ul class="table_illnesses" id="allfields" runat="server">--}}
                                        {{--<li id="node1">&#9675; </li>--}}
                                        {{--<li id="node2">&#9661; </li>--}}
                                        {{--<li id="node3">C</li>--}}
                                        {{--<li id="node4">P</li>--}}
                                        {{--<li id="node5">Pt</li>--}}
                                        {{--<li id="node6">R</li>--}}
                                        {{--<li id="node7">|</li>--}}
                                        {{--<li id="node8">F</li>--}}
                                        {{--<li id="node9">DP</li>--}}
                                        {{--<li id="node10">DC</li>--}}
                                        {{--<li id="node11">Cr</li>--}}
                                        {{--<li id="node12">|,||,|||</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}





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
                                            {{--<input name="18" id="TextArea1" type="text" size="1" value="{{ old('18') }}"/>--}}
                                            <textarea name="18" class="textarea" cols="5">{{ old('18') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="17" id="TextArea2" type="text" size="1" value="{{ old('17') }}" />--}}
                                            <textarea name="17" class="textarea" cols="5">{{ old('17') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="16" id="TextArea3" type="text" size="1" value="{{ old('16') }}" />--}}
                                            <textarea name="16" class="textarea" cols="5">{{ old('16') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="15" id="TextArea4" type="text" size="1" value="{{ old('15') }}" />--}}
                                            <textarea name="15" class="textarea" cols="5">{{ old('15') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="14" id="TextArea5" type="text" size="1" value="{{ old('14') }}" />--}}
                                            <textarea name="14" class="textarea" cols="5">{{ old('14') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="13" id="TextArea6" type="text" size="1" value="{{ old('13') }}" />--}}
                                            <textarea name="13" class="textarea" cols="5">{{ old('13') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="12" id="TextArea7" type="text" size="1" value="{{ old('12') }}" />--}}
                                            <textarea name="12" class="textarea" cols="5">{{ old('12') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="11" id="TextArea8" type="text" size="1" value="{{ old('11') }}" />--}}
                                            <textarea name="11" class="textarea" cols="5">{{ old('11') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="21" id="TextArea9" type="text" size="1" value="{{ old('21') }}" />--}}
                                            <textarea name="21" class="textarea" cols="5">{{ old('21') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="22" id="TextArea10" type="text" size="1" value="{{ old('22') }}" />--}}
                                            <textarea name="22" class="textarea"  cols="5">{{ old('22') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="23" id="TextArea11" type="text" size="1" value="{{ old('23') }}" />--}}
                                            <textarea name="23" class="textarea" cols="5">{{ old('23') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="24" id="TextArea12" type="text" size="1" value="{{ old('24') }}" />--}}
                                            <textarea name="24" class="textarea" cols="5">{{ old('24') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="25" id="TextArea13" type="text" size="1" value="{{ old('25') }}" />--}}
                                            <textarea name="25" class="textarea" cols="5">{{ old('25') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="26" id="TextArea14" type="text" size="1" value="{{ old('26') }}" />--}}
                                            <textarea name="26" class="textarea" cols="5">{{ old('26') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="27" id="TextArea15" type="text" size="1" value="{{ old('27') }}" />--}}
                                            <textarea name="27" class="textarea" cols="5">{{ old('27') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="28" id="TextArea16" type="text" size="1" value="{{ old('28') }}" />--}}
                                            <textarea name="28" class="textarea" cols="5">{{ old('28') }}</textarea>
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
                                            {{--<input name="48" id="TextArea17"  type="text" size="1" value="{{ old('48') }}" />--}}
                                            <textarea name="48" class="textarea" cols="5">{{ old('48') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="47" id="TextArea18" type="text" size="1" value="{{ old('47') }}" />--}}
                                            <textarea name="47" class="textarea" cols="5">{{ old('47') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="46" id="TextArea19" type="text" size="1" value="{{ old('46') }}" />--}}
                                            <textarea name="46" class="textarea" cols="5">{{ old('46') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="45" id="TextArea20" type="text" size="1" value="{{ old('45') }}" />--}}
                                            <textarea name="45" class="textarea" cols="5">{{ old('45') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="44" id="TextArea21" type="text" size="1" value="{{ old('44') }}" />--}}
                                            <textarea name="44" class="textarea" cols="5">{{ old('44') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="43" id="TextArea22" type="text" size="1" value="{{ old('43') }}" />--}}
                                            <textarea name="43" class="textarea" cols="5">{{ old('43') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="42" id="TextArea23" type="text" size="1" value="{{ old('42') }}" />--}}
                                            <textarea name="42" class="textarea" cols="5">{{ old('42') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="41" id="TextArea24" type="text" size="1" value="{{ old('41') }}" />--}}
                                            <textarea name="41" class="textarea" cols="5">{{ old('41') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="31" id="TextArea25" type="text" size="1" value="{{ old('31') }}" />--}}
                                            <textarea name="31" class="textarea" cols="5">{{ old('31') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="32" id="TextArea26" type="text" size="1" value="{{ old('32') }}" />--}}
                                            <textarea name="32" class="textarea" cols="5">{{ old('32') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="33" id="TextArea27" type="text" size="1" value="{{ old('33') }}" />--}}
                                            <textarea name="33" class="textarea" cols="5">{{ old('33') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="34" id="TextArea28" type="text" size="1" value="{{ old('34') }}" />--}}
                                            <textarea name="34" class="textarea" cols="5">{{ old('34') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="35" id="TextArea29" type="text" size="1" value="{{ old('35') }}" />--}}
                                            <textarea name="35" class="textarea" cols="5">{{ old('35') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="36" id="TextArea30" type="text" size="1" value="{{ old('36') }}" />--}}
                                            <textarea name="36" class="textarea" cols="5">{{ old('36') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="37" id="TextArea31" type="text" size="1" value="{{ old('37') }}" />--}}
                                            <textarea name="37" class="textarea" cols="5">{{ old('37') }}</textarea>
                                        </td>
                                        <td>
                                            {{--<input name="38" id="TextArea32" type="text" size="1" value="{{ old('38') }}" />--}}
                                            <textarea name="38" class="textarea" cols="5">{{ old('38') }}</textarea>
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
                        <textarea name="mouth_state" class="form-control materail_input material_textarea">{{ old('mouth_state') }}</textarea>
                    </div>
                    {{--kc_type--}}
                    <div class="form-group col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">Կծվածքի տեսակը</label>
                        <div class="col-md-2">
                            <label class="material_radio_group" for="radio1">
                                <input type="radio" name="kc_type" id="radio1" class="material_radiobox" value="1" checked />
                                <span class="material_check_radio"></span>
                                բնականոն
                            </label>
                        </div>
                        <div class="col-md-2">
                            <div style="font-size: 16px;font-weight: bold;padding-bottom: 15px">
                                ախտաբանական
                            </div>
                            <label class="material_radio_group" for="radio2" style="display: block">
                                <input type="radio" name="kc_type" id="radio2" class="material_radiobox" value="2" />
                                <span class="material_check_radio"></span>
                                հեռադիր
                            </label>
                            <label class="material_radio_group" for="radio3" style="display: block">
                                <input type="radio" name="kc_type" id="radio3" class="material_radiobox" value="3" />
                                <span class="material_check_radio"></span>
                                միջադիր
                            </label>
                            <label class="material_radio_group" for="radio4" style="display: block">
                                <input type="radio" name="kc_type" id="radio4" class="material_radiobox" value="4" />
                                <span class="material_check_radio"></span>
                                խոր
                            </label>
                            <label class="material_radio_group" for="radio5" style="display: block">
                                <input type="radio" name="kc_type" id="radio5" class="material_radiobox" value="5" />
                                <span class="material_check_radio"></span>
                                բաց
                            </label>
                            <label class="material_radio_group" for="radio6" style="display: block">
                                <input type="radio" name="kc_type" id="radio6" class="material_radiobox" value="6" />
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
                        <textarea name="examination" class="form-control materail_input material_textarea">{{ old('examination') }}</textarea>
                    </div>
                    {{--gigienik--}}
                    <div class="form-group col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Բերանի խոռոչի հիգենիկ վիճակը
                        </label>
                        <div class="col-md-12">
                            <label class="material_radio_group" for="radio2-1">
                                <input type="radio" name="gigienik" id="radio2-1" class="material_radiobox" value="1" />
                                <span class="material_check_radio"></span>
                                վատ
                            </label>
                            <label class="material_radio_group" for="radio2-2">
                                <input type="radio" name="gigienik" id="radio2-2" class="material_radiobox" value="2" checked />
                                <span class="material_check_radio"></span>
                                բավարար
                            </label>
                            <label class="material_radio_group" for="radio2-3">
                                <input type="radio" name="gigienik" id="radio2-3" class="material_radiobox" value="3" />
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
                        <textarea name="reason_subject" class="form-control materail_input material_textarea">{{ old('reason_subject') }}</textarea>
                    </div>
                    {{--reason_object--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Օբյեկտիվ տվյալներ
                        </label>
                        <textarea name="reason_object" class="form-control materail_input material_textarea">{{ old('reason_object') }}</textarea>
                    </div>
                    {{--diagnosis--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Ախտորոշում
                        </label>
                        <textarea name="diagnosis" class="form-control materail_input material_textarea">{{ old('diagnosis') }}</textarea>
                    </div>
                    {{--Treat--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Բուժումը (բուժման պլանը)
                        </label>
                        <textarea name="treat" class="form-control materail_input material_textarea">{{ old('treat') }}</textarea>
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
                            <input name="price" type="text" class="form-control materail_input" value="{{ old('price') }}" />
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
                            <input name="primaryprice" type="text" class="form-control materail_input" value="{{ old('primaryprice') }}" />
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
                            <input name="debt" type="text" class="form-control materail_input" value="{{ old('debt') }}" />
                        </div>
                    </div>
                    {{--doctor--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">Բժիշկ</label>
                        <div class="col-md-8">
                            <input name="doctor" type="text" class="form-control materail_input" value="{{ old('doctor') }}" />
                        </div>
                    </div>
                    {{--code--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-2 control-label">Գրանցման կոդ</label>
                        <div class="col-md-2">
                            <input name="code" type="text" class="form-control materail_input" value="{{ old('code') }}" />
                        </div>
                    </div>

                    {{--Images--}}
                    <div class="form-group">
                        <label class="col-md-2 control-label">Ընտրել նկարներ</label>
                        <div class="col-md-4">
                            {{--1--}}
                            <input name='images' type='file' value="{{ old('images') }}" style="padding: 5px">
                            {{--2--}}
                            <input name='images2' type='file' value="{{ old('image2') }}" style="padding: 5px">
                            {{--3--}}
                            <input name='images3' type='file' value="{{ old('image3') }}" style="padding: 5px">
                            {{--4--}}
                            <input name='images4' type='file' value="{{ old('images4') }}" style="padding: 5px">
                        </div>
                    </div>

                    {{--Button--}}
                    <button name="submit" type="submit" class="btn-change">Պահպանել</button>

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