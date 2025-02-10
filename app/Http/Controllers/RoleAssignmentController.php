<?php
// filepath: /c:/laragon/www/products-store/app/Http/Controllers/RoleAssignmentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RoleAssignmentController extends Controller
{
    /**
     * Asigna un rol a un usuario.
     */
    public function assignRole(Request $request, $userId)
    {
        // Validar la solicitud
        $request->validate([
            'role' => 'required|string|exists:roles,name',
        ]);

        // Encontrar al usuario
        $user = User::findOrFail($userId);

        // Asignar el rol al usuario
        $user->assignRole($request->input('role'));

        return response()->json(['message' => 'Rol asignado correctamente.']);
    }
}
