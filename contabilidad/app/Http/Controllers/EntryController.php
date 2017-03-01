<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Entry;
use App\Concepts;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EntryController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

		$dateIni = date('Y-m-').'1';
		$dateEnd = date('Y-m-').cal_days_in_month(CAL_GREGORIAN, date('m'), date('y'));

		$entrys = Entry::select(
			'amount', 
			'type', 
			'execute_time', 
			'concept',
			'id'
			)->
		where('execute_time', '>=', $dateIni)->
		where('execute_time', '<=', $dateEnd)->
		get();	   	

		return view('balance.entry.list', [
			'entrys' => $entrys, 
			'concepts' => Concepts::all('name', 'id')
			]
			);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {

		//Pasamos los datos antiguos del form o un objeto vacio a la vista
		return view('balance.entry.insert', [
			'title'  	=> 'Insertar Registro',
			'action' 	=> [
			'name'  => 'insert',
			'value' => 'Insertar',
			'route' => '/entry/insert'
			],
			'concepts'	=> Concepts::all('name', 'id'),
			'entry'	=> $this->createEntry (old())
			]
			);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$validator = $this->createValidator($request);

		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}

		//insertar en db
		$this->createEntry($request)->save();
		return redirect('/entry/insert')->with('message', '¡Registro insertado con exito!');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		
		return Entry::where('id', '=', $id)->get();

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {

		return view('balance.entry.edit', 
			[
			'title'  => 'Editar Registro',
			'action' => [
			'name'  => 'edit',
			'value' => 'Editar',
			'route' => '/entry/update/'.$id,
			],
			'concepts' => Concepts::all('name', 'id'),
			'entry' => count(old()) > 0 ? $this->createEntry (old()) : $this->show($id)[0]
			]
			);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {

		$validator = $this->createValidator($request);

		if ($validator->fails()) {
			return back()
			->withInput()
			->withErrors($validator);
		}

		//Actualizar registro en db
		Entry::where('id', '=', $id)->update($request->except(['_token', 'edit']));
		return redirect('/entry')->with('message', '¡Registro actualizado con exito!');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy ($id) {
		Entry::where('id', '=', $id)->delete();
		return redirect('/entry');
	}

	/**
	 * Create a validation rules.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	private function createValidator (Request $request) {

		$messages = [
		'numeric'  => 'El campo :attribute tiene que ser un numero.',
		'min'      => 'El valor minimo de :attribute tiene que ser mayor de :min.',
		'max'      => 'El valor máximo de :attribute tiene que ser menor de :max.',
		'date'     => 'El campo :attribute no es una fecha correcta.',
		'required' => 'El campo :attribute es requerido.',
		'string'   => 'El campo :attribute no es una cadena.'
		];

		$rules = [
		'concept' 		=> 'required|string',
		'amount'  		=> 'required|numeric|min:0|max:1000',
		'type'    		=> 'required',
		'execute_time'	=> 'required|date'
		];

		return Validator::make($request->all(), $rules, $messages);

	}

	/**
	 * Create a object by data
	 *
	 * @param  array|object   $id
	 * @return \Illuminate\Http\Response
	 */
	private function createEntry ($data) {

		$entry = new Entry;

		if (isset($data['amount'])) $entry->amount = $data['amount'];
		if (isset($data['execute_time'])) $entry->execute_time = $data['execute_time'];
		if (isset($data['concept'])) $entry->concept = $data['concept'];
		if (isset($data['type'])) $entry->type = $data['type'];

		return $entry;

	}

	/**
	 * Return list of entrys filtered.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function getFilteredEntrys (Request $request) {

		$entrys = Entry::select(
			'amount', 
			'type', 
			'execute_time', 
			'concept',
			'id'
			)->
		where('amount', $request->min != '' ? '>=' : '!=', $request->min)->
		where('amount', $request->max != '' ? '<=' : '!=', $request->max)->
		where('execute_time', '>=', $request->ini)->
		where('execute_time', '<=', $request->end)->
		where('concept', $request->concept != "" ? '=' : '!='  , $request->concept)->
		get();

		return view('balance.entry.list', [
			'entrys' => $entrys,
			'concepts' => Concepts::all('name', 'id'),
			]
			);

	}

}
