<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\RolesRepository;
use App\Models\Roles;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as Controller;
use Response;

class RolesAPIController extends Controller
{
	/** @var  RolesRepository */
	private $rolesRepository;

	function __construct(RolesRepository $rolesRepo)
	{
		$this->rolesRepository = $rolesRepo;
	}

	/**
	 * Display a listing of the Roles.
	 * GET|HEAD /roles
	 *
	 * @return Response
	 */
	public function index()
	{
		$roles = $this->rolesRepository->all();

		return $this->sendResponse($roles->toArray(), "Roles retrieved successfully");
	}

	/**
	 * Show the form for creating a new Roles.
	 * GET|HEAD /roles/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Roles in storage.
	 * POST /roles
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Roles::$rules) > 0)
			$this->validateRequestOrFail($request, Roles::$rules);

		$input = $request->all();

		$roles = $this->rolesRepository->create($input);

		return $this->sendResponse($roles->toArray(), "Roles saved successfully");
	}

	/**
	 * Display the specified Roles.
	 * GET|HEAD /roles/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$roles = $this->rolesRepository->apiFindOrFail($id);

		return $this->sendResponse($roles->toArray(), "Roles retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Roles.
	 * GET|HEAD /roles/{id}/edit
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
	 * Update the specified Roles in storage.
	 * PUT/PATCH /roles/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		$roles = $this->rolesRepository->apiFindOrFail($id);

		$roles = $this->rolesRepository->updateRich($input, $id);

		return $this->sendResponse($roles->toArray(), "Roles updated successfully");
	}

	/**
	 * Remove the specified Roles from storage.
	 * DELETE /roles/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->rolesRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Roles deleted successfully");
	}
}
