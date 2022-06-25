<?php
session_start();
@$_SESSION['count']++;
echo "Count times=".$_SESSION['count'];