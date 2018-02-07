<form id="form" method="post">
  <label>Заголовок новости:</label><br>
  <input type="text" name="title" id="title"><br>
  <label>Выберите категорию:</label><br>
  <select name="category" id="category">
    <option value="1">Политика</option>
    <option value="2">Культура</option>
    <option value="3">Спорт</option>
    <option value="4">Финансы</option>
  </select>
  <label>Текст новости:</label><br/>
  <textarea name="description" cols="50" rows="5" id="description"></textarea><br>
  <label>Источник:</label><br/>
  <input type="text" name="source" id="source"><br>
  <br>
  <input type="button" id="button" onclick="checkForm()" value="Добавить!">
</form>
<div id="result"></div>