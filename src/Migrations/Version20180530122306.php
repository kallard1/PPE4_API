<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180530122306 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mssql',
            'Migration can only be executed safely on \'mssql\'.');

        $this->addSql('CREATE TABLE category (id INT IDENTITY NOT NULL, label NVARCHAR(255) NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_64C19C1EA750E8 ON category (label) WHERE label IS NOT NULL');
        $this->addSql('ALTER TABLE customers ADD category_id INT');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mssql',
            'Migration can only be executed safely on \'mssql\'.');

        $this->addSql('ALTER TABLE customers DROP CONSTRAINT FK_62534E2112469DE2');
        $this->addSql('DROP TABLE category');
        $this->addSql('ALTER TABLE customers DROP COLUMN category_id');
    }
}
