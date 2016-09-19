<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ExampleController extends Controller
{

    public $examples = [
      1 => [
        'example_name' => 'Fun example.',
        'example_details' => 'Pretend this is interesting.'
      ],
      2 => [
        'example_name' => 'Another fun example.',
        'example_details' => 'Seriously, please, pretend this is interesting.'
      ]
    ];

    /**
     * Get all examples
     *
     * @return JSON Response
     */
    public function index()
    {
      return response()->json($this->examples);
    }

    /**
     * Show single example by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return response()->json($this->examples[$id]);
    }

    /**
     * Creates single example.
     *
     * @return Response
     */
    public function store()
    {
    }

    /**
     * Update single example by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
    }

    /**
     * Destroy single example by ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
    }
}
