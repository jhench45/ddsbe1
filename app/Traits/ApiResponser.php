<?php

    namespace App\Traits;
    use Illuminate\Http\Response;
    trait ApiResponser
{
    protected function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data'=>$data, 'site' => 1],$code);
    }

    protected function errorResponse($message,$code)
    {
        return response()->json(['error'=>$message, 'site' => 1,'code'=>$code],$code);
    }
}




?>