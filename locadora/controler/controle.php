<?php
    function validar($nome, $email, $telefone, $sexo, $mensagem){
        if(strlen($nome) < 3 || (!isset($nome))){
            $erro = 'ERRO!, Tamanho do nome muito curto (min 3)';
        }else if ((!isset( $email ) || !filter_var( $email, FILTER_VALIDATE_EMAIL ) )) {
            $erro = 'Envie um email válido.';
        }else if(!isset($telefone)){
            $erro = 'Insira o telefone no formato: (99)99999-9999';
        }else if(!isset($sexo) || ($sexo != 'f' && $sexo != 'm')){
            $erro = 'Insira um valor de sexo entre masculino e feminino';
        }else if(!isset($mensagem)){
            $erro = 'ERRO! mensagem obrigatória';
        }else if($telefone[0] != '(' || $telefone[3] != ')' || $telefone[9] != '-' || strlen($telefone) != 14){
            $erro = 'Insira o telefone no formato: (99)99999-9999';
        }else{
            $erro = 'OK';
        }
        return $erro;
    }
    function validarAcesso($usuario, $senha){
        if(strlen($usuario) < 3 || strlen($senha) <= 8){
            return false;
        }else{
            return true;
        }
    }
?>