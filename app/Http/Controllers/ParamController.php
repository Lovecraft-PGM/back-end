<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ServiceController as OS;
use Illuminate\Http\Request;
use App\Models\Param;
class ParamController extends Controller
{
    public function orderList($params){
        foreach($params as $param){
            $data_param =[
                'id' =>$param-> id,
                'name' =>$param-> name,
                'typeParam' =>$param-> paramtype_id,
            ];

            $data[] = $data_param;
        }
        return OS::frontendResponse('200', 'success', $data, null);
    }



    public function countriesList(){
        $countries = Param::where ('','')->get();

        return $this->orderList($countries);
    }

    public function departmentsList(){
        $departments = Param::where ('','')->get();

        return $this->orderList($departments);
    }

    public function citiesList(){
        $cities = Param::where ('','')->get();

        return $this->orderList($cities);
    }

    public function typesOfUsersList(){
        $typesUsers = Param::where ('','')->get();

        return $this->orderList($typesUsers);
    }

    public function rolesList(){
        $roles = Param::where ('','')->get();

        return $this->orderList($roles);
    }

    public function statesList(){
        $states = Param::where ('','')->get();

        return $this->orderList($states);
    }

    public function banksList(){
        $banks = Param::where ('','')->get();

        return $this->orderList($banks);
    }

    public function typesOfBankAccountsList(){
        $bankAccounts = Param::where ('','')->get();

        return $this->orderList($bankAccounts);
    }

    public function sizesList(){
        $sizes = Param::where ('','')->get();

        return $this->orderList($sizes);
    }

    public function genderList(){
        $genders = Param::where ('','')->get();

        return $this->orderList($genders);
    }

    public function categoriesList(){
        $categories = Param::where ('','')->get();

        return $this->orderList($categories);
    }

    public function subcategoriesList(){
        $subcategories = Param::where ('','')->get();

        return $this->orderList($subcategories);
    }

    public function marksList(){
        $marks = Param::where ('','')->get();

        return $this->orderList($marks);
    }

    public function colorsList(){
        $colors = Param::where ('','')->get();

        return $this->orderList($colors );
    }

    public function paymentMethodsList(){
        $payment = Param::where ('','')->get();

        return $this->orderList($payment);
    }

    public function typesOfordersList(){
        $orders = Param::where ('','')->get();

        return $this->orderList($orders);
    }

    public function index()
    {
  
   }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $param=new Param;   
        $param->paramtype_id = $request -> paramtype_id ;
        $param->name= $request ->name ;
        $param->param_foreign = $request -> param_foreign  ;
        $param->param_state= $request ->param_state;
        $param-> save ();    // save
        $data[] = $param;
        if ($data == null) {
            return OS::frontendResponse('404', 'error',  $data, 'Parametro no creado.' );
        }else{
            return OS::frontendResponse('201','success', $data, 'Parametro creado correctamente.'); 
        }
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Param $param)
    {
        $data[] = $param;
        if ($data == null) {
            return OS::frontendResponse('404', 'error',  $data, 'Parametros no encontrados.' );
        }else{
            return OS::frontendResponse('200','success', $data, 'Parametros encontrados.'); 
        }
    }


    public function edit(string $id)
    {
        //
    }

  
    public function update(Request $request, Param $param)
    {
        $param=new Param;   
        $param->paramtype_id = $request -> paramtype_id ;
        $param->name= $request ->name ;
        $param->param_foreign = $request -> param_foreign  ;
        $param->param_state= $request ->param_state;
        $param-> save ();    // save
        $data[]= $param;
        if ($data == null) {
            return OS::frontendResponse('404', 'error',  $data, 'Parametro no Actualizado.' );
        }else{
            return OS::frontendResponse('201','success', $data, 'Parametro Actualizado correctamente.'); 
        }
    }

   
    public function destroy(Param $param)
    {
        $param->delete();
        $data[] = $param;
        return OS::frontendResponse('200','success', $data, 'Parametro eliminado'); 
    }

}
