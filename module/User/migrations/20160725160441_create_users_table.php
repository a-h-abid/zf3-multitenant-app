<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('users');
        $table
            ->addColumn('username', 'string', ['limit' => 200])
            ->addColumn('password', 'string', ['limit' => 200])
            ->addColumn('verified', 'integer', ['limit' => 1])
            ->addColumn('status', 'integer', ['limit' => 1])
            ->addColumn('banned', 'integer', ['limit' => 1])
            ->addColumn('created', 'datetime')
            ->addColumn('updated', 'datetime', ['null' => true])
            ->addIndex(['username'], ['unique' => true])
            ->create();
    }

}
