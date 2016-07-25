<?php

use Phinx\Migration\AbstractMigration;

class CreateUserProfilesTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('user_profiles', ['id' => false, 'primary_key' => ['user_id']]);
        $table
            ->addColumn('user_id', 'integer')
            ->addColumn('avatar', 'string', ['limit' => 200, 'null' => true])
            ->addColumn('first_name', 'string', ['limit' => 200])
            ->addColumn('middle_name', 'string', ['limit' => 200, 'null' => true])
            ->addColumn('last_name', 'string', ['limit' => 200])
            ->addColumn('gender', 'enum', ['values' => ['male', 'female']])
            ->addColumn('date_of_birth', 'date')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addForeignKey('user_id', 'users', 'id', ['delete'=> 'CASCADE', 'update'=> 'CASCADE'])
            ->create();

    }

}
