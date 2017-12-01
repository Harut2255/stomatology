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
            {{--FORM--}}
            <form class="form-horizontal" action="{{ route('add') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                    {{--Name--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">
                            {{--ERROR--}}
                            @if (count($errors) > 0)
                                <span style="color: #ff0000">{{ $errors->first() }}</span>
                            @endif
                             Անուն
                        </label>
                        <div class="col-md-8">
                            <input name="name" type="text" class="form-control materail_input" placeholder="անուն" value="{{ old('name') }}" />
                        </div>
                    </div>
                    {{--Surname--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">
                            {{--ERROR--}}
                            @if (count($errors) > 0)
                                <span style="color: #ff0000">{{ $errors->first() }}</span>
                            @endif
                            Ազգանուն
                        </label>
                        <div class="col-md-8">
                            <input name="surname" type="text" class="form-control materail_input" placeholder="ազգանուն" value="{{ old('surname') }}" />
                        </div>
                    </div>
                    {{--Patronymic--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">
                            {{--ERROR--}}
                            @if (count($errors) > 0)
                                <span style="color: #ff0000">{{ $errors->first() }}</span>
                            @endif
                            Հայրանուն
                        </label>
                        <div class="col-md-8">
                            <input name="patronymic" type="text" class="form-control materail_input" placeholder="հայրանուն" value="{{ old('patronymic') }}" />
                        </div>
                    </div>
                    {{--date--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">Ծննդյան ամսաթիվ</label>
                        <div class="col-md-8">
                            <input name="date" id="registration-date" type="date" class="form-control materail_input" value="{{ old('date') }}" />
                        </div>
                    </div>
                    {{--Sex--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-2 control-label">Սեռ</label>
                        <div class="col-md-4">
                            {{--female--}}
                            <label class="material_radio_group" for="radio1">
                                <input type="radio" name="sex" id="radio1" class="material_radiobox" value="1" />
                                <span class="material_check_radio"></span>
                                Իգական
                            </label>
                            {{--male--}}
                            <label class="material_radio_group" for="radio2">
                                <input type="radio" name="sex" id="radio2" class="material_radiobox" value="2" checked />
                                <span class="material_check_radio"></span>
                                Արական
                            </label>
                        </div>
                    </div>
                    {{--living place--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-2 control-label">Բնակության վայր</label>
                        <div class="col-md-4">
                            <input name="place" type="text" class="form-control materail_input" placeholder="բնակության վայր" value="{{ old('place') }}" />
                        </div>
                    </div>
                    {{--E-mail--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">Էլ. հասցե</label>
                        <div class="col-md-8">
                            <input name="email" type="email" class="form-control materail_input" placeholder="էլ. հասցե" value="{{ old('email') }}" />
                        </div>
                    </div>
                    {{--Tel--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-4 control-label">
                            {{--ERROR--}}
                            @if (count($errors) > 0)
                                <span style="color: #ff0000">{{ $errors->first() }}</span>
                            @endif
                            Հեռախոսահամար
                        </label>
                        <div class="col-md-8">
                            <input name="tel" type="text" class="form-control materail_input" placeholder="հեռ" value="{{ old('tel') }}" />
                        </div>
                    </div>
                    {{--allergic--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            ՈԻնեցե՞լ եք արդյոք ալերգիկ դրսևորումներ
                        </label>
                        <div class="col-md-4">
                            <label class="material_radio_group" for="radio2-1">
                                <input type="radio" name="allergic" id="radio2-1" class="material_radiobox" value="1" />
                                <span class="material_check_radio"></span>
                                Այո
                            </label>
                            <label class="material_radio_group" for="radio2-2">
                                <input type="radio" name="allergic" id="radio2-2" class="material_radiobox" value="2" checked />
                                <span class="material_check_radio"></span>
                                Ոչ
                            </label>
                        </div>
                    </div>
                    {{--bleeding--}}
                    <div class="form-group col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                            Հաճախակի՞ եք ունենում արյունահոսություն քթից,հեշտությա՞մբ են առաջանում կապտուկներ,
                            երկարատև՞ է արյունահոսությունը վերքերից կամ հեռացված ատամի ատամնաբնից(ցանկացած առկայության դեպքում նշել այո):
                        </label>
                        <div class="col-md-12">
                            <label class="material_radio_group" for="radio3-1">
                                <input type="radio" name="bleeding" id="radio3-1" class="material_radiobox" value="1" />
                                <span class="material_check_radio"></span>
                                Այո
                            </label>
                            <label class="material_radio_group" for="radio3-2">
                                <input type="radio" name="bleeding" id="radio3-2" class="material_radiobox" value="2" checked />
                                <span class="material_check_radio"></span>
                                Ոչ
                            </label>
                        </div>
                    </div>
                    {{--checkbox illnesses--}}
                    <div class="form-group col-md-12">
                        <label class="col-xs-12" style="margin: 20px 0">ՈԻնե՞ք կամ երբևէ ունեցել եք ստորև նշված հիվանդություններից որևէ մեկը</label>
                        <div class="col-xs-12">

                            @foreach($illnesses as $illness)
                                <div class="material_checkbox_group">
                                    <input type="checkbox" id="checkbox{{ $illness['id'] }}" name="checkbox[]" class="material_checkbox" value="{{ $illness['id'] }}" />
                                    <label class="material_label_checkbox" for="checkbox{{ $illness['id'] }}">{{ $illness['illness'] }}</label>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    {{--new illness--}}
                    <div class="form-group materail_input_block col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">ՈԻնե՞ք կամ երբևէ ունեցել եք հիվանդություն,որը նշված չէ,եթե այո,նշեք այն</label>
                        <textarea name="new_illness" class="form-control materail_input material_textarea">{{ old('new_illness') }}</textarea>
                    </div>
                    {{--pregnant--}}
                    <div class="form-group col-md-12">
                        <label class="col-md-12" style="margin: 20px 0">
                           Կրծքով կերակրու՞մ եք կամ ունեք հղիություն
                        </label>
                        <div class="col-md-12">
                            <label class="material_radio_group" for="radio4-1">
                                <input type="radio" name="pregnant" id="radio4-1" class="material_radiobox" value="1" />
                                <span class="material_check_radio"></span>
                                Այո
                            </label>
                            <label class="material_radio_group" for="radio4-2">
                                <input type="radio" name="pregnant" id="radio4-2" class="material_radiobox" value="2" checked />
                                <span class="material_check_radio"></span>
                                Ոչ
                            </label>
                        </div>
                    </div>
                    {{--doctor--}}
                    <div class="form-group materail_input_block col-md-6">
                        <label class="col-md-12" style="margin: 20px 0">Բժիշկ/Բժշկուհի</label>
                        <input name="doctor" class="form-control materail_input material_textarea" value="{{ old('doctor') }}" />
                    </div>

                    {{--Button--}}
                    <button name="submit" type="submit" class="btn-change">Գրանցել</button>


                </fieldset>
            </form>

        </div>
    </div>
@endsection