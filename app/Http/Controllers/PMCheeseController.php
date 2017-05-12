<?php namespace App\Http\Controllers;



use App\Models\PMCheese;

class PMCheeseController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pmcheese
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $config ['list'] = PMCheese::get()->toArray();
        return view ('admin.list', $config);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pmcheese/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pmcheese
	 *
	 * @return Response
	 */
	public function adminStore()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pmcheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pmcheese/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pmcheese/{id}
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
	 * DELETE /pmcheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
        PMCheese::destroy($id);
        return PMCheese::get()->toArray();
	}

}