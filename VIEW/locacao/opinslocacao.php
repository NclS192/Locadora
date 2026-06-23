<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';

$locacao = new MODEL\Locacao();
$locacao->setCliente($_POST['cliente']);
$locacao->setFilme($_POST['filme']);
$locacao->setDataLocacao(new \DateTime($_POST['data_locacao']));
$locacao->setDataDevolucao(new \DateTime($_POST['data_devolucao']));

$dalFilme = new DAL\Filme();
$idFilme = $_POST['filme'];
$filme = $dalFilme->SelectById($idFilme);

$dalLocacao = new DAL\Locacao();

if ($filme->getSituacao() == 'D'){

        $filme->setSituacao('I'); 
        $dalFilme->Update($filme); 

        $dalLocacao->Insert($locacao); 

    }


header("Location: lstlocacao.php");