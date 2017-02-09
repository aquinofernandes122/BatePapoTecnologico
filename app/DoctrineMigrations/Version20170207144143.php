<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170207144143 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mini_curso (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(45) NOT NULL, carga_horaria INT NOT NULL, dias VARCHAR(255) NOT NULL, horario TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE aluno_mini_curso (id INT AUTO_INCREMENT NOT NULL, aluno_id INT NOT NULL, minicurso_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evento (id INT AUTO_INCREMENT NOT NULL, nome VARCHAR(45) NOT NULL, cidade VARCHAR(45) NOT NULL, data_hora DATETIME NOT NULL, local VARCHAR(100) NOT NULL, descrissão VARCHAR(255) NOT NULL, tipo VARCHAR(45) NOT NULL, minicurso_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trabalhos (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(45) NOT NULL, descrissao VARCHAR(255) NOT NULL, diretorio VARCHAR(255) NOT NULL, minicurso_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mini_curso');
        $this->addSql('DROP TABLE aluno_mini_curso');
        $this->addSql('DROP TABLE evento');
        $this->addSql('DROP TABLE trabalhos');
    }
}
