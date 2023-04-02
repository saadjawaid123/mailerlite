<?php

namespace App\Http\Controllers\Api\Subscriber;

use App\Helper\AppHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Subscriber\CreateSubscriberRequest;
use App\Http\Requests\Api\Subscriber\UpdateSubscriberRequest;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use MailerLite\Exceptions\MailerLiteException;
use Psr\Http\Client\ClientExceptionInterface;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class SubscriberController extends Controller
{
    public function getDatatable(Request $request): JsonResponse
    {
        $query = Subscriber::orderBy('name');

        if($request->get('email')) {
            $query = $query->where('email', $request->get('email'));
        }

        return DataTables::of($query)
            ->addColumn('created_at', function ($subscriber) {
                return $subscriber->created_at->format('Y-m-d H:i A');
            })
            ->addColumn('action', function ($subscriber) {
                $action = '<button value="'.route('update-subscriber', $subscriber->id).'" class="btn btn-primary edit-subscrber">Edit</button>';
                $action .= '<button value="'.route('delete-subscriber', $subscriber->id).'" class="btn btn-primary delete">Delete</button>';

                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create(CreateSubscriberRequest $request): JsonResponse
    {
        try {
            /**
             * @var User $user
             */
            $user = auth()->user();
            $mailerlite = AppHelper::mailerlite($user->getMailerLiteApiKey());

            $response = $mailerlite->subscribers->create([
                'email' => $request->get('email'),
                'fields' => [
                    'name' => $request->get('name'),
                    'country' => $request->get('country')
                ]
            ]);

            if(200 !== $response['status_code'] && 201 !== $response['status_code']) {
                return response()->json([
                    'Failed to create subscriber at mailerlite'
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $return = Subscriber::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'country' => $request->get('country'),
                'mailerlite_id' => $response['body']['data']['id']
            ]);

            return response()->json($return, Response::HTTP_CREATED);

        } catch (BindingResolutionException $e) {
            return response()->json([
                'message' => 'An unexpected error has occured!'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'message' => 'Invalid mailerlite API key. Please update before proceeding.'
            ], Response::HTTP_BAD_REQUEST);
        } catch(MailerLiteException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (ClientExceptionInterface $e) {
            if(Response::HTTP_UNAUTHORIZED === $e->getCode()) {
                return response()->json([
                    'message' => 'Invalid api key.'
                ], Response::HTTP_BAD_REQUEST);
            }

            return response()->json([
                'message' => 'Failed to create subscriber at mailerlite.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update(UpdateSubscriberRequest $request, Subscriber $subscriber): JsonResponse
    {
        try {
            /**
             * @var User $user
             */
            $user = auth()->user();
            $mailerlite = AppHelper::mailerlite($user->getMailerLiteApiKey());

            $response = $mailerlite->subscribers->update((string) $subscriber->getMailerliteId(), [
                'fields' => [
                    'name' => $request->get('name'),
                    'country' => $request->get('country')
                ]
            ]);

            if(200 !== $response['status_code']) {
                return response()->json([
                    'Failed to update subscriber at mailerlite'
                ], Response::HTTP_INTERNAL_SERVER_ERROR);
            }

            $subscriber->update([
                'name' => $request->get('name'),
                'country' => $request->get('country')
            ]);

            return response()->json([
                'message' => 'Subscriber updated successfully'
            ], Response::HTTP_OK);

        } catch (BindingResolutionException $e) {
            return response()->json([
                'message' => 'An unexpected error has occured!'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'message' => 'Invalid mailerlite API key. Please update before proceeding.'
            ], Response::HTTP_BAD_REQUEST);
        } catch(MailerLiteException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch(ClientExceptionInterface $e) {
            if(Response::HTTP_UNAUTHORIZED === $e->getCode()) {
                return response()->json([
                    'message' => 'Invalid api key.'
                ], Response::HTTP_BAD_REQUEST);
            }

            return response()->json([
                'message' => 'Failed to update subscriber at mailerlite.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function delete(Subscriber $subscriber): JsonResponse
    {
        try {
            /**
             * @var User $user
             */
            $user = auth()->user();
            $mailerlite = AppHelper::mailerlite($user->getMailerLiteApiKey());

            $response = $mailerlite->subscribers->delete((string) $subscriber->getMailerliteId());

            if(404 === $response['status_code']) {
                return response()->json([
                    'message' => 'Subscriber not found at mailerlite'
                ], Response::HTTP_NOT_FOUND);
            }

            $subscriber->delete();

            return response()->json([
                'message' => 'Subscriber deleted successfully'
            ], Response::HTTP_OK);

        } catch (BindingResolutionException $e) {
            return response()->json([
                'message' => 'An unexpected error has occured!'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'message' => 'Invalid mailerlite API key. Please update before proceeding.'
            ], Response::HTTP_BAD_REQUEST);
        } catch(MailerLiteException $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (ClientExceptionInterface $e) {
            if(Response::HTTP_UNAUTHORIZED === $e->getCode()) {
                return response()->json([
                    'message' => 'Invalid api key.'
                ], Response::HTTP_BAD_REQUEST);
            }

            return response()->json([
                'message' => 'Failed to delete subscriber at mailerlite.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
