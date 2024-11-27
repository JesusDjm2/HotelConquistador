<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;

class AddRolesToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        // Crear los roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'reservas']);
        Role::create(['name' => 'contabilidad']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        // Eliminar los roles si la migración se revierte
        Role::where('name', 'admin')->delete();
        Role::where('name', 'reservas')->delete();
        Role::where('name', 'contabilidad')->delete();
    }
}
