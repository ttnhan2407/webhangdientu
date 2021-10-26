<?php
 $Connect = pg_connect("postgres://wsrmpvzaojwula:0aab706662e150da7a6250def84da179d170b439992b82f9bdf73919e445ebef@ec2-34-193-46-89.compute-1.amazonaws.com:5432/d73qatb0jgabls");
 if (!$Connect) {
    die("Connection failed");
    }
?>
