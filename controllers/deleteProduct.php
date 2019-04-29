<?php
use App\Core\App;
App::get('database')->deleteProduct($_GET['id']);
header('Location: /');