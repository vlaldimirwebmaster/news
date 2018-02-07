<?php
require_once "../interfaces/INewsDB.class.php";

class NewsDB implements INewsDB
{	
	const DB_PATH = "../db/news.db";
	public $db = null;

	
	
	function __construct()
	{	
		$this->db = new \PDO("sqlite:" . self::DB_PATH);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if (filesize(self::DB_PATH) == 0) {
			try {
				$sql = "CREATE TABLE msgs(
					id INTEGER PRIMARY KEY AUTOINCREMENT,
					title TEXT,
					category INTEGER,
					description TEXT,
					source TEXT,
					dtetime INTEGER
				)";
				$this->db->exec($sql);

				$sql = "CREATE TABLE category(
						id INTEGER,
						name TEXT
					)";
				$this->db->exec($sql);

				$sql = "INSERT INTO category(id, name)
						VALUES (1, 'Политика'),
						(2, 'Культура'),
						(3, 'Спорт'),
						(4, 'Финансы')"						
					;
				$this->db->exec($sql);

			} catch (PDOException $e) {
				file_put_contents("../logs/logdb_construct.txt", $e->getMessage() . "\n", FILE_APPEND);
			}
		}
	}

	function saveNews($title, $category, $description, $source)
	{
		$dtetime = time();
		try {
			$stmt = $this->db->prepare("INSERT INTO msgs (title, category, description, source, dtetime) VALUES (:title, :category, :description, :source, :dtetime)");
			$stmt->bindParam(":title", $title);
			$stmt->bindParam(":category", $category);
			$stmt->bindParam(":description", $description);
			$stmt->bindParam(":source", $source);
			$stmt->bindParam(":dtetime", $dtetime);
			return $stmt->execute();
		} catch (PDOException $e) {
			file_put_contents("../logs/logdb_saveNews.txt",  $e->getMessage() . "\n", FILE_APPEND);
		}
	}

	function getNews()
	{	
		$result = [];
		try {
			$sth = $this->db->prepare("SELECT msgs.id as id, title, category.name as category, description, source, dtetime
				FROM msgs, category
				WHERE category.id = msgs.category
				ORDER BY msgs.id DESC
			");
			$res = $sth->execute();
			while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
     			 $result[] = $row;
    		}
		} catch (PDOException $e) {
			file_put_contents("../logs/logdb_getNews.txt",  $e->getMessage() . "\n", FILE_APPEND);
		}
		return $result;
	}
	function deleteNews($id){
		try {
			$stmt = $this->db->prepare("DELETE FROM msgs WHERE id = :id");
			$stmt->bindParam(":id", $id);
			$stmt->execute();
		} catch (PDOException $e) {
			file_put_contents("../logs/logdb_deleteNews.txt",  $e->getMessage() . "\n", FILE_APPEND);
		}
	}
	function __destruct()
	{
		$this->db = null;
	}
}