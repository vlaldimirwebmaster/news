<?php
/**
*	inerface INewsDB
*		содержит основные методы для работы с новостной лентой
*/
interface INewsDB{
	/**
	*	Добавление новой записи в новостную ленту
	*	
	*	@param string $title - заголовок новости
	*	@param string $category - категория новости
	*	@param string $description - текст новости
	*	@param string $source - источник новости
	*	
	*/
	function saveNews($title, $category, $description, $source);
	/**
	*	Выборка всех записей из новостной ленты
	*	
	*	@return result - результат выборки в виде массива
	*/
	function getNews();
	/**
	*	Удаление записи из новостной ленты
	*	
	*	@param integer $id - идентификатор удаляемой записи
	*	
	*/
	function deleteNews($id);
}
?>