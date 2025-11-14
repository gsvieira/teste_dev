<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::with('role');

        if($role = $request->get('role')) {
            $query->whereHas('role', fn($q) => $q->where('name', 'role'));
        }

        $users = $query->get();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required|exists:roles,id',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário criado com sucesso');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));   
    }

    public function edit(User $user)
    {
        $roles = Role::All();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'password' => 'nullable|min:8|confirmed',
            'role_id' => 'string',
        ]);

        $data = [
            'name' => $request->name,
            'role_id' => $request->role_id,
        ];
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('sucess', 'Perfil atualizado!');
    }

    public function editCourses(User $user)
    {
        $courses = Course::all();

        return view('users.courses', compact('user', 'courses'));
    }

    public function updateCourses(Request $request, User $user)
    {
        $user->courses()->sync($request->courses ?? []);

        return redirect()
            ->route('users.show', $user->id)
            ->with('success', 'Cursos do usuário atualizados com sucesso!');
    }


    public function destroy($id)
    {
        $user = User::FindorFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('sucess', 'Perfil deletado com sucesso');
    }
}
