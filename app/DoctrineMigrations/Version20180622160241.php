<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180622160241 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE job_admin.newsletter_locked_domain (id INT AUTO_INCREMENT NOT NULL, domain VARCHAR(100) NOT NULL, createddate DATETIME NOT NULL, changeddate DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_admin.account_company (id INT AUTO_INCREMENT NOT NULL, activationid VARCHAR(20) DEFAULT NULL, account_type VARCHAR(10) DEFAULT \'customer\', title VARCHAR(150) NOT NULL, street VARCHAR(75) DEFAULT NULL, zip VARCHAR(10) DEFAULT NULL, city VARCHAR(100) DEFAULT NULL, email VARCHAR(75) DEFAULT NULL, password VARCHAR(50) NOT NULL, gender VARCHAR(5) DEFAULT NULL, lastname VARCHAR(75) DEFAULT NULL, firstname VARCHAR(75) DEFAULT NULL, department VARCHAR(100) DEFAULT NULL, telephone VARCHAR(50) DEFAULT NULL, fax VARCHAR(50) DEFAULT NULL, homepage VARCHAR(200) DEFAULT NULL, facebook VARCHAR(200) DEFAULT NULL, logo VARCHAR(50) DEFAULT NULL, createddate TIMESTAMP, changeddate TIMESTAMP, lastlogin DATETIME DEFAULT NULL, lastloginip VARCHAR(20) DEFAULT NULL, INDEX search_idx (title), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_admin.newsletter (id INT AUTO_INCREMENT NOT NULL, mailing_status TINYINT(1) DEFAULT \'0\' NOT NULL, email VARCHAR(100) NOT NULL, salutation VARCHAR(1) DEFAULT NULL, title VARCHAR(25) DEFAULT NULL, lastname VARCHAR(150) DEFAULT NULL, firstname VARCHAR(150) DEFAULT NULL, info VARCHAR(150) DEFAULT NULL, createddate TIMESTAMP, changeddate TIMESTAMP, subscribe_date TIMESTAMP, subscribe_ip VARCHAR(20) NOT NULL, unsubscribe_date TIMESTAMP, unsubscribe_ip VARCHAR(20) NOT NULL, creator VARCHAR(20) NOT NULL, random_hash VARCHAR(12) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE job_admin.newsletter_locked_domain');
        $this->addSql('DROP TABLE job_admin.account_company');
        $this->addSql('DROP TABLE job_admin.newsletter');
    }
}
