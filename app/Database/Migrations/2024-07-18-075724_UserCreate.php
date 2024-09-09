<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserCreate extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'TEXT',
				'constraint' => '255',
			],
			'password' => [
				'type' => 'TEXT',
				'constraint' => '255',
			],
			'created_at' => [
				'type' => 'datetime',
				'null' => true
			],
			'updated_at' => [
				'type' => 'datetime',
				'null' => true
			],
			/*
            'created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at TIMESTAMP NULL',
			*/
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
