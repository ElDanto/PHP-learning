<?php 
class DB
{

    protected $dbh;

    public function __construct()
    {
        $config = include __DIR__ . '/../config.php';
        $dsn = 'mysql:host=' . $config['host'] . ';' . 'dbname=' . $config['dbName'] . ';';
        $this->dbh = new PDO($dsn, $config['dbUser'], $config['dbPass']);
    }

    public function getDbh()
    {
        $prepare = $this->dbh->prepare('SELECT * FROM `albums`');
        $prepare->execute();
        return $prepare->fetchAll();
        // return $this->dbh;
    }

    /**
     * execute
     *
     * @param string $sql
     * @return bool
     */
    public function execute(string $sql)
    {
        $this->prepare = $this->dbh->prepare($sql);
        $result = $this->prepare->execute();
        return $result;
    }

    /**
     * Undocumented function
     *
     * @param string $sql
     * @param array $data
     * @return void
     */
    public function query(string $sql, array $data=[])
    {
        $prepare = $this->dbh->prepare($sql);
        $test = $prepare->execute($data);
        // var_dump($sql, $prepare, $data);
        // return $test;
        return $prepare->fetchAll(PDO::FETCH_CLASS);
    }
}