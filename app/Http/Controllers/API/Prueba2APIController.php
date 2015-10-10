<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\Prueba2Repository;
use App\Models\Prueba2;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as Controller;
use Response;

class Prueba2APIController extends Controller
{
	/** @var  Prueba2Repository */
	private $prueba2Repository;

	function __construct(Prueba2Repository $prueba2Repo)
	{
		$this->prueba2Repository = $prueba2Repo;
	}

	/**
	 * Display a listing of the Prueba2.
	 * GET|HEAD /prueba2s
	 *
	 * @return Response
	 */
	public function index()
	{
		$prueba2s = $this->prueba2Repository->all();

		return $this->sendResponse($prueba2s->toArray(), "Prueba2s retrieved successfully");
	}

	/**
	 * Show the form for creating a new Prueba2.
	 * GET|HEAD /prueba2s/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Prueba2 in storage.
	 * POST /prueba2s
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Prueba2::$rules) > 0)
			$this->validateRequestOrFail($request, Prueba2::$rules);

		$input = $request->all();

		$prueba2s = $this->prueba2Repository->create($input);

		return $this->sendResponse($prueba2s->toArray(), "Prueba2 saved successfully");
	}

	/**
	 * Display the specified Prueba2.
	 * GET|HEAD /prueba2s/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$prueba2 = $this->prueba2Repository->apiFindOrFail($id);

		return $this->sendResponse($prueba2->toArray(), "Prueba2 retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Prueba2.
	 * GET|HEAD /prueba2s/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Prueba2 in storage.
	 * PUT/PATCH /prueba2s/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		$prueba2 = $this->prueba2Repository->apiFindOrFail($id);

		$prueba2 = $this->prueba2Repository->updateRich($input, $id);

		return $this->sendResponse($prueba2->toArray(), "Prueba2 updated successfully");
	}

	/**
	 * Remove the specified Prueba2 from storage.
	 * DELETE /prueba2s/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->prueba2Repository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Prueba2 deleted successfully");
	}
}
