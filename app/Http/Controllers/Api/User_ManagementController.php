<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUser_ManagementRequest;
use App\Http\Requests\UpdateUser_ManagementRequest;
use App\Http\Resources\User_ManagementResource;
use App\Models\User_Management;
use Illuminate\Support\Facades\Log;
use Exception;

class User_ManagementController extends Controller
{
  /**
   * Display - Get /api/user_management
   */
  public function index()
  {
    try {
      $user_management = User_Management::latest()->get();
      // return User_ManagementResource::collection($user_management);

      return response()->json([
        'success' => true,
        'message' => 'List Data User Management',
        'data' => User_ManagementResource::collection($user_management),
      ], 200);
    } catch (Exception $e) {
      Log::error($e->getMessage());

      return response()->json([
        'success' => false,
        'message' => 'Error retrieving user management data',
      ], 500);
    }
  }

  /**
   * Store/Input - Post /api/user_management
   */
  public function store(StoreUser_ManagementRequest $request)
  {
    try {
      $data = $request->validated();
      $user_management = User_Management::create($data);
      // return (new User_ManagementResource($user_management))->response()->setStatusCode(201);

      if ($user_management) {
        return response()->json([
          'success' => true,
          'message' => 'User Management Created',
          'data' => new User_ManagementResource($user_management),
        ], 201);
      } else {
        return response()->json([
          'success' => false,
          'message' => 'User Management Creation Failed',
        ], 400);
      }
    } catch (Exception $e) {
      Log::error($e->getMessage());

      return response()->json([
        'success' => false,
        'message' => 'Error creating user management',
      ], 500);
    }
  }

  /**
   * Display specified - Get /api/user_management/{id_user}
   */
  public function show($id_user)
  {
    try {
      $user_management = User_Management::where('id_user', $id_user)->first();
      // return new User_ManagementResource($user_management);

      if (!$user_management) {
        return response()->json([
          'success' => false,
          'message' => 'User Management Not Found',
        ], 404);
      } else {
        return response()->json([
          'success' => true,
          'message' => 'User Management Retrieved',
          'data' => new User_ManagementResource($user_management),
        ], 200);
      }
    } catch (Exception $e) {
      Log::error($e->getMessage());

      return response()->json([
        'success' => false,
        'message' => 'Error retrieving user management data',
      ], 500);
    }
  }

  /**
   * Update specified user - Put /api/user_management/{id_user}
   */
  public function update(UpdateUser_ManagementRequest $request, User_Management $user_management)
  {
    try {
      $data = $request->validated();
      $user_management->update($data);
      // return new User_ManagementResource($user_management);

      if ($user_management) {
        return response()->json([
          'success' => true,
          'message' => 'User Management Updated',
          'data' => new User_ManagementResource($user_management),
        ], 200);
      } else {
        return response()->json([
          'success' => false,
          'message' => 'User Management Update Failed',
        ], 400);
      }
    } catch (Exception $e) {
      Log::error($e->getMessage());

      return response()->json([
        'success' => false,
        'message' => 'Error updating user management',
      ], 500);
    }
  }

  /**
   * Delete specified user - Delete /api/user_management/{id_user}
   */
  public function destroy($id_user)
  {
    try {
      $user_management = User_Management::where('id_user', $id_user)->first();
      // return response()->json(null, 204);

      if (!$user_management) {
        return response()->json([
          'success' => false,
          'message' => 'User Management Not Found',
        ], 404);
      }

      $deleted = $user_management->delete();

      if ($deleted) {
        return response()->json([
          'success' => true,
          'message' => 'User Management Deleted',
        ], 200);
      }
    } catch (Exception $e) {
      Log::error($e->getMessage());

      return response()->json([
        'success' => false,
        'message' => 'Error finding user management',
      ], 500);
    }
  }
}
