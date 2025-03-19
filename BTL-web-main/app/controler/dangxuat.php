<?php
session_start();
session_destroy(); // Hủy toàn bộ session
header("Location: ../indexok.php");
exit();