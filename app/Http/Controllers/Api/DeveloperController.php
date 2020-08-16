<?php

namespace App\Http\Controllers\Api;

use App\API\ApiError;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;

class DeveloperController extends Controller
{
    private $developer;

    public function __construct(Developer $developer)
    {
      $this->developer = $developer;
    }

    public function index()
    {
      return response()->json($this->developer->paginate(10));
    }

    public function store(Request $request)

    {
      try {

        $developerData = $request->all();
        $developer = $this->developer->create($developerData);

        $newDeleveloper = ['data' => $developer];
          return response()->json($newDeleveloper, 201);

        } catch (\Exception $e) {
          if(config('app.debug')) {
            return response()->json(ApiError::errorMessage($e->getMessage(), 1010), 500);
          }
          return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de salvar', 1010),  500);
        }
    }

    public function show($id)

    {
      $developer = $this->developer->find($id);

      if(! $developer) return response()->json(ApiError::errorMessage('Developer não encontrado!', 4040), 404);

      $data = ['data' => $developer];
      return response()->json($data);
    }

    public function update(Request $request, $id)
    {
      try {

        $developerData = $request->all();
        $developer  = $this->developer->find($id);
        $developer->update($developerData);

        return response()->json($developer, 201);

      } catch (\Exception $e) {
        if(config('app.debug')) {
          return response()->json(ApiError::errorMessage($e->getMessage(), 1011),  500);
        }
        return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de atualizar', 1011), 500);
      }
    }

    public function delete($id)
    {
      try {

        $id->delete();

        return response()->json(['data' => ['msg' => 'Sucesso!']], 200);

      }catch (\Exception $e) {
        if(config('app.debug')) {
          return response()->json(ApiError::errorMessage($e->getMessage(), 1012),  500);
        }
        return response()->json(ApiError::errorMessage('Houve um erro ao realizar operação de remover', 1012),  500);
      }
    }
}
