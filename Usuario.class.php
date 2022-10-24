<?php

    class Usuario{

        public function login($email, $senha){
            global $connection;

            $sql = "SELECT * FROM tb_usuario WHERE nm_usuario = :email AND nm_senha = :senha";
            $sql = $connection->prepare($sql);
            $sql->bindValue("email", $email);
            $sql->bindValue("senha", $senha);
            $sql->execute();
        }

    }


?>