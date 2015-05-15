<?php
class CategoryDB{
	public static function getCategories(){
		$db = Database::getDB();
		$query = "SELECT * FROM categories ORDER BY categoryID ";
		$result = $db->query($query);
		return $result;
	}
	public static function getCategory($category_id){
		$db = Database::getDB();
		$query = "SELECT * FROM categories WHERE category_id = '$category_id';";
		$result = $db->query($query);
		$category = $result->fetch();
		$category_name = $category['categoryName'];
		return $category_name;
	}
}
?>