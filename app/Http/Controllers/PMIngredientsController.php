<?php namespace App\Http\Controllers;


use App\Models\PMIngredients;

class PMIngredientsController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pmingredients
	 *
	 * @return Response
	 */
	public function getRoutesData(){
	    $config = [];
        $config ['index'] = 'app.ingredients.adminIndex';
        $config ['create'] = 'app.ingredients.adminCreate';
        $config ['edit'] = 'app.ingredients.adminEdit';
        $config ['delete'] = 'app.ingredients.adminDelete';

        return $config;
    }

	public function adminIndex()
	{
	    $config = $this->getRoutesData();
		$config ['list'] = PMIngredients::get()->toArray();

//dd($config);

        return view ('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pmingredients/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pmingredients
	 *
	 * @return Response
	 */
	public function adminStore()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pmingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{

        $config = $this->getRoutesData();
        $config['item'] = PMIngredients::find($id)->toArray();
//dd($config);
              return view ('admin.single',$config);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pmingredients/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pmingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminUpdate($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pmingredients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
        PMIngredients::destroy($id);
        return PMIngredients::get()->toArray(); //pabandymui paduota lentele kad padarytu json faila ir ajax mestu message success
	}

}