<?php

namespace App\Http\Controllers;

use App\User;
use App\Example;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{
    /**
     * Get all examples
     *
     * @return JSON Response
     */
    public function index()
    {
      $examples = Example::all();

      return response()->json($examples);
    }

    /**
     * Show single example by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $example = Example::find($id);
      return response()->json($example);
    }

    /**
     * Creates single example.
     *
     * @return Response
     */
    public function store(Request $request)
    {
      $example = new Example;

      $example->title = $request->title;
      $example->body = $request->body;

      $example->save();
    }

    /**
     * Update single example by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
      $example = Example::find($id);

      if($request->title) {
        $example->title = $request->title;
      }

      if($request->body) {
        $example->body = $request->body;
      }

      $example->save();
    }

    /**
     * Destroy single example by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      Example::destroy($id);
    }
}
