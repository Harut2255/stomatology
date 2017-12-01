<?php

namespace App\Http\Controllers;

use App\Tooth;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use DB;
use Validator;
use App\Customer;
use App\Illness;
use App\Visit;
use Carbon\Carbon;

class IndexController extends Controller
{
//    index
    public function index(){
        $customers = DB::table('customers')->orderBy('id', 'desc')->paginate(10);
//        $customers = Customer::all()->toArray();
        return view('project.index', [
            'customers' => $customers
        ]);
    }
    ///////////////////////////////// Search /////////////////////////////////
    public function search(Request $request){
        if ($request->isMethod('get')){

            $search = $request->search;
            $newSearch = explode(' ',$search);
            if(empty($newSearch[0])){
                return redirect('/')->with('status', 'Որոնման արդյունքը 0');
            }
            if (!isset($newSearch[1])){
                $search_customers = Customer::where('name','LIKE','%'.$newSearch[0].'%')
                    ->orwhere('surname', 'LIKE', '%'.$newSearch[0].'%')->paginate(7);
            }else{
                $search_customers = Customer::where('name','LIKE','%'.$newSearch[0].'%')
                    ->orwhere('surname', 'LIKE', '%'.$newSearch[0].'%')
                    ->orwhere('name', 'LIKE', '%'.$newSearch[1].'%')
                    ->orwhere('surname', 'LIKE', '%'.$newSearch[1].'%')
                    ->paginate(10);
            }

            return view('project.index', [
                'customers' => $search_customers
            ]);

        }



    }



    ///////////////////////////////// Search Doctor /////////////////////////////////
    public function searchDoctor(Request $request){
        if ($request->isMethod('get')){
            $search_doctor = $request->search_doctor;
            if(empty($search_doctor)){
                return redirect('/')->with('status', 'Որոնման արդյունքը 0');
            }
            $search_doctor_customers = Customer::where('doctor','LIKE','%'.$search_doctor.'%')->paginate(10);
            return view('project.index', [
                'customers' => $search_doctor_customers
            ]);
        }

    }


    ///////////////////////////////// Start Customer View /////////////////////////////////
    public function customer($id){

//        table customers
        $customer = Customer::find($id);

//        table customer_illness
        $customer_illnesses = $customer->illnesses->toArray();
        foreach ($customer_illnesses as $customer_illness){
            $customer_illness_pivots[] = $customer_illness['pivot'];
        }

        if (!empty($customer_illnesses)){
            foreach ($customer_illnesses as $customer_illness){
                $customer_illness_pivots[] = $customer_illness['pivot'];
            }
            $cust_ill_relation = array_column($customer_illness_pivots, 'customer_id', 'illness_id');
        }else{
            $cust_ill_relation = '';
        }

//        table illnesses
        $illnesses = Illness::all();

        return view('project.customer', [
            'id' => $id,
            'illnesses' => $illnesses,
            'customer' => $customer,
            'cust_ill_relation' => $cust_ill_relation
        ]);
    }
    ///////////////////////////////// End Customer View /////////////////////////////////


    ///////////////////////////////// Start Add /////////////////////////////////
    public function add(Request $request){

//        POST
        if ($request->isMethod('post')){

            $input = $request->except('_token');

            //Message
            $massages = [
                'required' => '*',
            ];
            //Validation
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'surname' => 'required|max:255',
                'patronymic' => 'required|max:255',
                'tel' => 'required|max:255',
            ], $massages);
            //if validation is false
            if ( $validator->fails() ){
                return redirect()->route('add')->withErrors($validator)->withInput();
            }
            //save information to database
            $customer = new Customer;
            $user_id = Auth::user()->id;
            $customer->user_id = $user_id;
            $customer->created_at = $carbon = Carbon::now(-20);
            $customer->updated_at = $carbon = Carbon::now(-20);
            $customer->fill($input);

            if ($customer->save()){

                $customer_id = Customer::max('id');

                if (isset($input['checkbox'])){

                    $checkboxSet = [];
                    foreach ($input['checkbox'] as $checkboxValue){
                        $checkboxSet[] = [
                            'customer_id' => $customer_id,
                            'illness_id' => $checkboxValue
                        ];
                    }

                    DB::table('customer_illness')->insert($checkboxSet);
                }

                return redirect('/')->with('status', 'Հաճախորդը հաջողությամբ գրանցված է');
            }
        }
//        GET
        if (view()->exists('project.add')){
            //select illnesses
            $illnesses = Illness::all()->toArray();
            return view('project.add', [
                'illnesses' => $illnesses
            ]);
        }


    }
    ///////////////////////////////// End Add /////////////////////////////////

    ///////////////////////////////// Start Edit /////////////////////////////////
    public function edit(Request $request,$id){

        //POST
        if ($request->isMethod('post')){
            $input_edit = $request->except('_token');

            //Message
            $massages = [
                'required' => '*',
            ];
            //Validation
            $validator = Validator::make($input_edit, [
                'name' => 'required|max:255',
                'surname' => 'required|max:255',
                'patronymic' => 'required|max:255',
                'tel' => 'required|max:255',
            ], $massages);
            //if validation is false
            if ( $validator->fails() ){
                return redirect()->route('edit',array('id'=>$id))->withErrors($validator)->withInput();
            }
            //update information to database
            $customer = new Customer;
            $user_id = Auth::user()->id;
            $customer->created_at = $carbon = Carbon::now(-20);
            $customer->updated_at = $carbon = Carbon::now(-20);
            $customer->user_id = $user_id;

            DB::table('customers')->where('id','=',$id)->update([
                'name'=>$input_edit['name'],
                'surname'=>$input_edit['surname'],
                'patronymic'=>$input_edit['patronymic'],
                'date'=>$input_edit['date'],
                'sex'=>$input_edit['sex'],
                'place'=>$input_edit['place'],
                'email'=>$input_edit['email'],
                'tel'=>$input_edit['tel'],
                'allergic'=>$input_edit['allergic'],
                'bleeding'=>$input_edit['bleeding'],
                'new_illness'=>$input_edit['new_illness'],
                'pregnant'=>$input_edit['pregnant'],
                'doctor'=>$input_edit['doctor']
            ]);


            if (isset($input_edit['checkbox'])){

                DB::table('customer_illness')->where('customer_id',$id)->delete();

                $checkboxSet = [];
                foreach ($input_edit['checkbox'] as $checkboxValue){
                    $checkboxSet[] = [
                        'customer_id' => $id,
                        'illness_id' => $checkboxValue
                    ];
                }

                DB::table('customer_illness')->insert($checkboxSet);
            }else{
                DB::table('customer_illness')->where('customer_id',$id)->delete();
            }
            return redirect('/')->with('status', 'Հաճախորդի տվյալները հաջողությամբ փոփոխված են');


        }

        //GET
//        table customers
        $customer = Customer::find($id);

//        table customer_illness
        $customer_illnesses = $customer->illnesses->toArray();

        if (!empty($customer_illnesses)){
            foreach ($customer_illnesses as $customer_illness){
                $customer_illness_pivots[] = $customer_illness['pivot'];
            }
            $cust_ill_relation = array_column($customer_illness_pivots, 'customer_id', 'illness_id');
        }else{
            $cust_ill_relation = '';
        }

//        table illnesses
        $illnesses = Illness::all();

        return view('project.edit', [
            'id' => $id,
            'illnesses' => $illnesses,
            'customer' => $customer,
            'cust_ill_relation' => $cust_ill_relation
        ]);
    }
    ///////////////////////////////// End Edit /////////////////////////////////

    ///////////////////////////////// Start Delete /////////////////////////////////
    public function delete($id){
        $visits = Customer::find($id)->visits->toArray();
        $visits_id = [];
        foreach ($visits as $visit){
            $visits_id[] = [
                'visit_id' => $visit['id']
            ];
        }
        if (!empty($visits_id)){
            DB::table('teeth')->whereIn('visit_id',$visits_id)->delete();
        }


        DB::table('visits')->where('customer_id',$id)->delete();

        DB::table('customer_illness')->where('customer_id',$id)->delete();
        DB::table('customers')->where('id',$id)->delete();

        return redirect('/')->with('status', 'Հաճախորդի տվյալները հաջողությամբ ջնջված են');



    }


    ///////////////////////////////// End Delete /////////////////////////////////

    ///////////////////////////////// Start Visit Add /////////////////////////////////
    public function addVisit(Request $request,$id){

        //        POST
        if ($request->isMethod('post')){

            $input_visit = $request->except('_token');

            //Message
            $massages = [
                'integer' => 'Միայն թվեր *'
            ];

            //Validation
            $validator = Validator::make($input_visit, [
                'price' => 'Integer',
                'primaryprice' => 'Integer',
                'debt' => 'Integer',
            ], $massages);
            //if validation is false
            if ( $validator->fails() ){
                return redirect()->route('addVisit',array('id'=>$id))->withErrors($validator)->withInput();
            }
            //if file(images) is true
//            1
            if ($request->hasFile('images')){
                $file = $request->file('images');
                //get file name from object
                $input_visit['images'] = $file->getClientOriginalName();
                //move file to dir
                $file->move( public_path().'/assets/images', $input_visit['images'] );
            }
//            2
            if ($request->hasFile('images2')){
                $file2 = $request->file('images2');
                //get file name from object
                $input_visit['images2'] = $file2->getClientOriginalName();
                //move file to dir
                $file2->move( public_path().'/assets/images', $input_visit['images2'] );
            }
//            3
            if ($request->hasFile('images3')){
                $file3 = $request->file('images3');
                //get file name from object
                $input_visit['images3'] = $file3->getClientOriginalName();
                //move file to dir
                $file3->move( public_path().'/assets/images', $input_visit['images3'] );
            }
//            4
            if ($request->hasFile('images4')){
                $file4 = $request->file('images4');
                //get file name from object
                $input_visit['images4'] = $file4->getClientOriginalName();
                //move file to dir
                $file4->move( public_path().'/assets/images', $input_visit['images4'] );
            }
            //save information to database
            $visit = new Visit;
            $customer_id = $input_visit['customer_id'];
            $visit->customer_id = $customer_id;
            $visit->created_at = $carbon = Carbon::now(-20);
            $visit->updated_at = $carbon = Carbon::now(-20);
            $visit->fill($input_visit);

            if ($visit->save()){

                $visit_id = Visit::max('id');

                $input = $request->except('_token','mouth_state','kc_type','examination','gigienik','reason_subject',
                    'reason_object','diagnosis','treat','price','primaryprice','debt','doctor','code','submit','images',
                    'images2','images3','images4','customer_id');
                $input = array_filter($input, create_function('$value', 'return $value !== "";'));

                $setTooth = [];
                foreach ($input as $key => $value){
                    $setTooth[] = [
                        'visit_id' => $visit_id,
                        'tooth' => $key,
                        'tooth_ill' => $value
                    ];
                }

                DB::table('teeth')->insert($setTooth);

                return redirect('/')->with('status', 'Այցելությունը հաջողությամբ ավելացված է');
            }

        }




        //        GET
        if (view()->exists('project.addVisit')){
            return view('project.addVisit',[
                'id' => $id
            ]);
        }

    }
    ///////////////////////////////// End Visit Add /////////////////////////////////

    ///////////////////////////////// Start Visit List /////////////////////////////////
    public function visitList($id){

        $customer_visits = Customer::find($id)->visits->toArray();

        return view('project.visitList',[
            'customer_visits' => $customer_visits
        ]);
    }
    ///////////////////////////////// End Visit List /////////////////////////////////

    ///////////////////////////////// Start Visit View /////////////////////////////////
    public function visit($id){

        $visit = Visit::find($id)->toArray();
        $tooth_visits = Visit::find($id)->teeth->toArray();
        return view('project.visit',[
            'id' => $id,
            'visit' => $visit,
            'tooth_visits' => $tooth_visits
        ]);
    }
    ///////////////////////////////// End Visit View /////////////////////////////////

    ///////////////////////////////// Start Visit Edit /////////////////////////////////
    public function editVisit(Request $request,$id){

        $visit = Visit::find($id)->toArray();
        $teeth = Visit::find($id)->teeth->toArray();

        //POST
        if ($request->isMethod('post')){
            $data = $request->except('_token');


            //Message
            $massages = [
                'integer' => 'Միայն թվեր *'
            ];

            //Validation
            $validator = Validator::make($data, [
                'price' => 'Integer',
                'primaryprice' => 'Integer',
                'debt' => 'Integer',
            ], $massages);
            //if validation is false
            if ( $validator->fails() ){
                return redirect()->route('addVisit',array('id'=>$id))->withErrors($validator)->withInput();
            }


//            images
//            1
            if ($request->hasFile('images')){
                $file = $request->file('images');
                $file->move(public_path().'/assets/images',$file->getClientOriginalName());
                $data['images'] = $file->getClientOriginalName();
            }elseif(isset($data['old_images'])) {
                $data['images'] = $data['old_images'];
            }else{
                $data['images'] = '';
            }
            unset($data['old_images']);

//            2
            if ($request->hasFile('images2')){
                $file2 = $request->file('images2');
                $file2->move(public_path().'/assets/images',$file2->getClientOriginalName());
                $data['images2'] = $file2->getClientOriginalName();
            }elseif(isset($data['old_images2'])) {
                $data['images2'] = $data['old_images2'];
            }else{
                $data['images2'] = '';
            }
            unset($data['old_images2']);

//            3
            if ($request->hasFile('images3')){
                $file3 = $request->file('images3');
                $file3->move(public_path().'/assets/images',$file3->getClientOriginalName());
                $data['images3'] = $file3->getClientOriginalName();
            }elseif(isset($data['old_images3'])) {
                $data['images3'] = $data['old_images3'];
            }else{
                $data['images3'] = '';
            }
            unset($data['old_images3']);
//            4
            if ($request->hasFile('images4')){
                $file4 = $request->file('images4');
                $file4->move(public_path().'/assets/images',$file4->getClientOriginalName());
                $data['images4'] = $file4->getClientOriginalName();
            }elseif(isset($data['old_images4'])) {
                $data['images4'] = $data['old_images4'];
            }else{
                $data['images4'] = '';
            }
            unset($data['old_images4']);


            //update information to database
            DB::table('visits')->where('id','=',$id)->update([
                'mouth_state'=>$data['mouth_state'],
                'kc_type'=>$data['kc_type'],
                'examination'=>$data['examination'],
                'gigienik'=>$data['gigienik'],
                'reason_subject'=>$data['reason_subject'],
                'reason_object'=>$data['reason_object'],
                'diagnosis'=>$data['diagnosis'],
                'treat'=>$data['treat'],
                'price'=>$data['price'],
                'primaryprice'=>$data['primaryprice'],
                'debt'=>$data['debt'],
                'doctor'=>$data['doctor'],
                'code'=>$data['code'],
                'images'=>$data['images'],
                'images2'=>$data['images2'],
                'images3'=>$data['images3'],
                'images4'=>$data['images4'],
            ]);

            $input = $request->except('_token','mouth_state','kc_type','examination','gigienik','old_images','reason_subject',
                'reason_object', 'diagnosis','treat','price','primaryprice','debt','doctor','code','submit','images',
                'images2','images3','images4','customer_id');
            $input = array_filter($input, create_function('$value', 'return trim($value) !== "";'));
            DB::table('teeth')->where('visit_id',$id)->delete();

            $setTooth = [];
            foreach ($input as $key => $value){
                $setTooth[] = [
                    'visit_id' => $id,
                    'tooth' => $key,
                    'tooth_ill' => $value
                ];
            }
//
            DB::table('teeth')->insert($setTooth);
            return redirect('/')->with('status', 'Այցելության տվյալները հաջողությամբ փոփոխված են');
        }


        //GET
        if (view()->exists('project.editVisit')){
            return view('project.editVisit',[
                'id' => $id,
                'visit' => $visit,
                'teeth' => $teeth
            ]);
        }

    }

    ///////////////////////////////// End Visit Edit /////////////////////////////////

    ///////////////////////////////// Start Visit Delete /////////////////////////////////
    public  function deleteVisit($id){

        DB::table('teeth')->where('visit_id',$id)->delete();
        DB::table('visits')->where('id',$id)->delete();


        return redirect()->back()->with('status', 'Այցելությունը հաջողությամբ ջնջված է');

    }
    ///////////////////////////////// End Visit Delete /////////////////////////////////

}
