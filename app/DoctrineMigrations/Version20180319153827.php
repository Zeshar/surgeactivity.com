<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180319153827 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        if ( ! $schema->hasTable('parameters')) {
            $sql
                = <<<Q
                CREATE TABLE parameters (
                    id INT AUTO_INCREMENT NOT NULL,
                    name VARCHAR(100) NOT NULL UNIQUE,
                    value VARCHAR(255) DEFAULT "",                   
                    PRIMARY KEY(id)
                ) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = "InnoDB"
Q;
            $this->addSql($sql);
        }
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        if ( ! $schema->hasTable('parameters')) {
            return;
        }

        $this->addSql('DROP TABLE parameters');
    }
}
