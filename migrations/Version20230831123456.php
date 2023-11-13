<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230831123456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Created age_group table';
    }

    public function up(Schema $schema): void
    {
        // this up() migration will create the age_group table
        $this->addSql('CREATE TABLE age_group (id INT AUTO_INCREMENT NOT NULL, age VARCHAR(45) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration will drop the age_group table
        $this->addSql('DROP TABLE age_group');
    }
}