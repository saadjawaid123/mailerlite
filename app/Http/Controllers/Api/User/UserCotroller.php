<?php

namespace App\Http\Controllers\Api\User;

use App\Helper\AppHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Psr\Http\Client\ClientExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class UserCotroller extends Controller
{
    public function saveMailerliteKey(Request $request): JsonResponse
    {
        try {
            $mailerlite = AppHelper::mailerlite($request->get('api_key'));
            $mailerlite->subscribers->get();

            /**
             * @var User $user
             */
            $user = auth()->user();
            $user->mailerlite_api_key = $request->get('api_key');
            $user->save();

            return response()->json([
                'message' => 'Mailerlite api key added successfully.'
            ], Response::HTTP_OK);
        } catch (BindingResolutionException $e) {
            return response()->json([
                'message' => 'An unexpected error has occurred.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_BAD_REQUEST);
        } catch (ClientExceptionInterface $e) {
            if(Response::HTTP_UNAUTHORIZED === $e->getCode()) {
                return response()->json([
                    'message' => 'Invalid api key.'
                ], Response::HTTP_BAD_REQUEST);
            }

            return response()->json([
                'message' => 'Failed to authorize api key with mailerlite.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
