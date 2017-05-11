<?php namespace App\Http\Controllers;


class PMPizzaOrderController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pmpizzaorder
	 *
	 * @return Response
	 */
    public function index()
    {
       return view ('front-end.single');
    }

	public function adminIndex()
	{
        return view ('admin.single');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pmpizzaorder/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pmpizzaorder
	 *
	 * @return Response
	 */
	public function adminStore()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($id)
    {
        return view ('front-end.list');
    }



	public function adminShow($id)
	{
        return view ('admin.list');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pmpizzaorder/{id}/edit
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
	 * PUT /pmpizzaorder/{id}
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
	 * DELETE /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
		//
	}

}