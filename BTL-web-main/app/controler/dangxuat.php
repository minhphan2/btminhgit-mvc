<?php
session_start();
session_destroy(); // Hủy toàn bộ session
header("Location: ../public/index.php"); 
exit();