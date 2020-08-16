<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200615141659 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contatos ADD nome VARCHAR(255) NOT NULL, ADD email VARCHAR(255) NOT NULL, ADD telefone VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE produtos CHANGE descricao descricao VARCHAR(255) NOT NULL, CHANGE fornecedor fornecedor VARCHAR(200) NOT NULL, CHANGE dta_fabricacao dta_fabricacao VARCHAR(13) NOT NULL, CHANGE dta_validade dta_validade VARCHAR(13) NOT NULL');
        $this->addSql('ALTER TABLE promotores ADD cpf VARCHAR(13) NOT NULL, CHANGE nome nome VARCHAR(200) NOT NULL, CHANGE empresa empresa VARCHAR(200) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contatos DROP nome, DROP email, DROP telefone');
        $this->addSql('ALTER TABLE produtos CHANGE descricao descricao TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fornecedor fornecedor VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE dta_fabricacao dta_fabricacao VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE dta_validade dta_validade VARCHAR(10) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE promotores DROP cpf, CHANGE nome nome VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE empresa empresa VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
