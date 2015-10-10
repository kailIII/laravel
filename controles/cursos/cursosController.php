<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatecursosRequest;
use App\Http\Requests\UpdatecursosRequest;
use App\Libraries\Repositories\cursosRepository;
use Flash;
use Mitul\Controller\AppBaseController as Controller;
use Response;

class cursosController extends Controller
{

	/** @var  cursosRepository */
	private $cursosRepository;

	function __construct(cursosRepository $cursosRepo)
	{
		$this->middleware('auth');
		$this->cursosRepository = $cursosRepo;
	}

	/**
	 * Display a listing of the cursos.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cursos = $this->cursosRepository->paginate(10);

		return view('cursos.index')
			->with('cursos', $cursos);
	}

	/**
	 * Show the form for creating a new cursos.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('cursos.create');
	}

	/**
	 * Store a newly created cursos in storage.
	 *
	 * @param CreatecursosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatecursosRequest $request)
	{
		$input = $request->all();

		$cursos = $this->cursosRepository->create($input);

		Flash::success('cursos saved successfully.');

		return redirect(route('cursos.index'));
	}

	/**
	 * Display the specified cursos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$cursos = $this->cursosRepository->find($id);

		if(empty($cursos))
		{
			Flash::error('cursos not found');

			return redirect(route('cursos.index'));
		}

		return view('cursos.show')->with('cursos', $cursos);
	}

	/**
	 * Show the form for editing the specified cursos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$cursos = $this->cursosRepository->find($id);

		if(empty($cursos))
		{
			Flash::error('cursos not found');

			return redirect(route('cursos.index'));
		}

		return view('cursos.edit')->with('cursos', $cursos);
	}

	/**
	 * Update the specified cursos in storage.
	 *
	 * @param  int              $id
	 * @param UpdatecursosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdatecursosRequest $request)
	{
		$cursos = $this->cursosRepository->find($id);

		if(empty($cursos))
		{
			Flash::error('cursos not found');

			return redirect(route('cursos.index'));
		}

		$cursos = $this->cursosRepository->updateRich($request->all(), $id);

		Flash::success('cursos updated successfully.');

		return redirect(route('cursos.index'));
	}

	/**
	 * Remove the specified cursos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$cursos = $this->cursosRepository->find($id);

		if(empty($cursos))
		{
			Flash::error('cursos not found');

			return redirect(route('cursos.index'));
		}

		$this->cursosRepository->delete($id);

		Flash::success('cursos deleted successfully.');

		return redirect(route('cursos.index'));
	}
}
