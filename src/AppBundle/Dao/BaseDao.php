<?php
namespace AppBundle\Dao;

use Doctrine\DBAL\Connection;
use Symfony\Bridge\Monolog\Logger;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\DBAL\Driver\Statement;

/**
 * Classe de base pour l'acces aux donnees
 *
 * @author gsimar
 */
class BaseDao {

    protected $connection = null;

    protected $logger = null;

    protected $tableName;

    public function __construct(Connection $connection, Logger $logger) {
        $this->connection = $connection;
        $this->logger = $logger;
    }

    /**
     * Execute une requête select et retourne le résultat
     * Les éventuelles erreurs sont attrapées et enregistrées dans le fichier de logs
     * @param $sql
     * @return array|bool
     */
    public function doSelectQuery($sql){

        try{
            $data = $this->connection->fetchAll($sql);
            return $data;
        } catch (\Exception $ex) {
            $this->logger->critical(
                $ex->getMessage(),
                array(
                    'cause'   =>  $ex
                )
            );
            return false;
        }
    }

    /**
     * Execute une requête select et retourne le résultat sous forme de taleau d'objet
     * Les éventuelles erreurs sont attrapées et enregistrées dans le fichier de logs
     * @param QueryBuilder $queryBuilder
     * @return array|bool
     * @internal param $sql
     */
    public function doSelectFromQueryBuilder(QueryBuilder $queryBuilder){

        try{
            return $queryBuilder->execute()->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Exception $ex) {
            $this->logError($ex);
            return false;
        }
    }

    /**
     * @param $sql
     * @return int
     */
    public function insertData($sql)
    {
        try {
            return $this->getConnection()->executeUpdate($sql);
        } catch (\Exception $e){
            $this->logger->critical(
                $e->getMessage(),
                array(
                    'cause'   =>  $e
                )
            );
            var_dump($e);
            return 0;
        }
    }

    /**
     * @param array $sqlArray
     * @throws \Exception
     */
    public function execQueryWithTransaction(array $sqlArray){

        $this->getConnection()->beginTransaction();

        try{
            foreach ($sqlArray as $sql){
                $this->getConnection()->executeUpdate($sql);
            }
            $this->getConnection()->commit();
        } catch (\Exception $e){

            $this->getConnection()->rollBack();
            // log l'erreur
            $this->logger->critical(
                $e->getMessage(),
                array(
                    'cause'   =>  $e
                )
            );
            throw $e;
        }
    }

    /**
     * @param Statement $stmt
     * @return array|bool
     */
    public function doSelectStatement(Statement $stmt)
    {
        try {
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        } catch (\Exception $e){
            $this->logError($e);
            return false;
        }
    }

    /**
     * @param Statement $stmt
     * @return array|bool
     */
    public function doUpdateStatement(Statement $stmt)
    {
        try {
            return $stmt->execute();
        } catch (\Exception $e){
            $this->logError($e);
            return false;
        }
    }

    public function getConnection(){
        return $this->connection;
    }

    public function logError(\Exception $e){
        $this->logger->critical(
            $e->getMessage(),
            array(
                'cause'   =>  $e
            )
        );
    }
    
    /**
     * test connection to database
     */
    public function testConnection() {
    	
    }
}
