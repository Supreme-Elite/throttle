<?php

namespace ThrottleMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20180811185922 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE frame CHANGE rendered rendered VARCHAR(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        $this->throwIrreversibleMigrationException();
    }
}
