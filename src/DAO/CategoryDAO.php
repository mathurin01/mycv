<?php

namespace Mycv\DAO;

use Doctrine\DBAL\Connection;
use Mycv\Domain\Category;

class CategoryDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Return a list of all categories, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from t_category order by cat_id desc";
        $result = $this->db->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $categories = array();
        foreach ($result as $row) {
            $categoryId = $row['cat_id'];
            $categories[$categoryId] = $this->buildCategory($row);
        }
        return $categories;
    }

    /**
     * Creates an Category object based on a DB row.
     *
     * @param array $row The DB row containing Category data.
     * @return \Mycv\Domain\Category
     */
    private function buildCategory(array $row) {
        $category = new Category();
        $category->setId($row['cat_id']);
        $category->setTitle($row['cat_title']);
        $category->setLogo($row['cat_logo']);
        return $category;
    }
}
