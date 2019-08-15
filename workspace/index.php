<?php

$dataSource = new JsonFileSource('data.json');
// $dataSource->sort('Price', 'asc');

$tableView = new TableView($dataSource);
echo $tableView->render();
