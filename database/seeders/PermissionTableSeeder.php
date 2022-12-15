<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$permissions = [
   'manage-role',
   'manage-user',
   'user-delete',
'role-list',
'role-create',
'role-edit',
'role-delete',
'order-list',
'order-create',
'order-edit',
'order-delete',
'service-list',
'service-create',
'service-edit',
'service-delete'
];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}
}
}
