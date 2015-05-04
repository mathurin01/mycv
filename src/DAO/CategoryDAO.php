<?php

namespace Mycv\DAO;

use Mycv\Domain\Category;

class CategoryDAO extends DAO
{
    /**
     * Return a list of all categories, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from t_category order by cat_id desc";
        $result = $this->getDb()->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $categories = array();
        foreach ($result as $row) {
            $categoryId = $row['cat_id'];
            $categories[$categoryId] = $this->buildDomainObject($row);
        }
        return $categories;
    }

    /**
     * Creates an Category object based on a DB row.
     *
     * @param array $row The DB row containing Category data.
     * @return \Mycv\Domain\Category
     */
    protected function buildDomainObject($row) {

        $category = new Category();
        $category->setId($row['cat_id']);
        $category->setTitle($row['cat_title']);
        $category->setLogo($row['cat_logo']);
        return $category;
    }
}
