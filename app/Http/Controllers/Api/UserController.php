<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // GET all users
    public function index(Request $request)
    {
        $query = User::query();
        
        if ($request->has('status')) {
            $query->where('status', $request->status);
        }
        
        $users = $query->paginate($request->get('per_page', 10));
        
        return response()->json($users);
    }
    
    // GET single user
    public function show($id)
    {
        $user = User::find($id);
        
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        
        return response()->json($user);
    }
    
    // CREATE new user
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|min:8',
            'status' => 'required|in:active,inactive'
        ]);
        
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        
        return response()->json($user, 201);
    }
    
    // UPDATE user
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        
        $data = $request->validate([
            'name' => 'sometimes|required',
            'email' => 'sometimes|required|email|unique:users,email,' . $id,
            'phone_number' => 'sometimes|required',
            'status' => 'sometimes|required|in:active,inactive'
        ]);
        
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }
        
        $user->update($data);
        
        return response()->json($user);
    }
    
    // DELETE user
    public function destroy($id)
    {
        $user = User::find($id);
        
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        
        $user->delete();
        
        return response()->json(['message' => 'User deleted successfully']);
    }
    
    // BULK DELETE
    public function bulkDelete(Request $request)
    {
        $request->validate([
            'ids' => 'required|array',
            'ids.*' => 'exists:users,id'
        ]);
        
        User::whereIn('id', $request->ids)->delete();
        
        return response()->json(['message' => 'Users deleted successfully']);
    }
}