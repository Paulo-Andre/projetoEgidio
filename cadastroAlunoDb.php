<?php

// Dados do Aluno
/*$nomeFormAluno             = $_GET['nomeFormAluno'];
$dataNascimentoFormAluno   = $_GET['dataNascimentoFormAluno'];
$generoFormAluno           = $_GET['generoFormAluno'];
$CPFFormAluno              = $_GET['CPFFormAluno'];
$RGFormAluno               = $_GET['RGFormAluno'];
$emissorRGFormAluno        = $_GET['emissorRGFormAluno'];
$expedicaoRGFormAluno      = $_GET['expedicaoRGFormAluno'];*/
$nacionalidade             = $_GET['nacionalidade'];
$nacionalidadeFormAluno    = $_GET['nacionalidadeFormAluno'];
$UF                        = $_GET['UF'];
$UFFormAluno               = $_GET['UFFormAluno'];
$naturalidade              = $_GET['naturalidade'];
$naturalidadeFormAluno     = $_GET['naturalidadeFormAluno'];/*
$raca                      = $_GET['raca'];
$necessidadesFormAluno     = $_GET['necessidadesFormAluno'];
$tipoNecessidadesFormAluno = $_GET['tipoNecessidadesFormAluno'];
$resticoesFormAluno        = $_GET['resticoesFormAluno'];
$tiposRestricoesFormAluno   = $_GET['tiposRestricoesFormAluno'];
$beneficioSocial           = $_GET['beneficioSocial'];
$beneficioSocialFormAluno  = $_GET['beneficioSocialFormAluno'];
$NISFormAluno              = $_GET['NISFormAluno'];
*/


if($nacionalidade=="Outro"){
    $nacionalidade=$nacionalidadeFormAluno;
}
if($UF=="Outro"){
    $UF=$UFFormAluno;
}
if($naturalidade=="Outro"){
    $naturalidade=$naturalidadeFormAluno;
}
/*
// Dados dos Pais - Pai
$nomeFormPai         = $_GET['nomeFormPai'];
$dataNascimentoFormPai = $_GET['dataNascimentoFormPai'];
$naturalidadeFormPai = $_GET['naturalidadeFormPai'];
$CPFFormPai          = $_GET['CPFFormPai'];
$RGFormPai           = $_GET['RGFormPai'];
$emissorRGFormPai    = $_GET['emissorRGFormPai'];
$expedicaoRGFormPai  = $_GET['expedicaoRGFormPai'];
$telefoneFormPai     = $_GET['telefoneFormPai'];
$whatsappFormPai     = $_GET['whatsappFormPai'];
$profissaoFormPai    = $_GET['profissaoFormPai'];


// Dados dos Pais - Mãe
$nomeFormMae         = $_GET['nomeFormMae'];
$naturalidadeFormMae = $_GET['naturalidadeFormMae'];
$dataNascimentoFormMae = $_GET['dataNascimentoFormMae'];
$CPFFormMae          = $_GET['CPFFormMae'];
$RGFormMae           = $_GET['RGFormMae'];
$emissorRGFormMae    = $_GET['emissorRGFormMae'];
$expedicaoRGFormMae  = $_GET['expedicaoRGFormMae'];
$telefoneFormMae     = $_GET['telefoneFormMae'];
$whatsappFormMae     = $_GET['whatsappFormMae'];
$profissaoFormMae    = $_GET['profissaoFormMae'];

// Estado Civil dos Pais
$estadoCivilFormPais   = $_GET['estadoCivilFormPais'];
$situacaoCivilFormPais = $_GET['situacaoCivilFormPais'];

// Dados do Responsável Legal
$responsavelFormAluno      = $_GET['responsavelFormAluno'];
$nomeFormResponsavel       = $_GET['nomeFormResponsavel'];
$parentescoFormResponsavel = $_GET['parentescoFormResponsavel'];
$CPFFormResponsavel        = $_GET['CPFFormResponsavel'];
$RGFormResponsavel         = $_GET['RGFormResponsavel'];
$emissorRGFormResponsavel  = $_GET['emissorRGFormResponsavel'];
$expedicaoRGFormResponsavel= $_GET['expedicaoRGFormResponsavel'];
$telefoneFormResponsavel   = $_GET['telefoneFormResponsavel'];
$whatsappFormResponsavel   = $_GET['whatsappFormResponsavel'];
$profissaoFormResponsavel  = $_GET['profissaoFormResponsavel'];

// Endereço do Aluno
$CEPFormAluno   = $_GET['CEPFormAluno'];
$ruaFormAluno   = $_GET['ruaFormAluno'];
$BairroFormAluno= $_GET['BairroFormAluno'];
$cidadeFormAluno= $_GET['cidadeFormAluno'];
$situacaocasa   = $_GET['situacaocasa'];

// Informações Escolares
$informacoesFormEscolaresAnterior = $_GET['informacoesFormEscolaresAnterior'];
$escolarFormEscola                = $_GET['escolarFormEscola'];
$escolarFormSerie                 = $_GET['escolarFormSerie'];
$dadosFormTurno                   = $_GET['dadosFormTurno'];

// Dados Matrícula
$anoMatricula   = $_GET['anoMatricula'];
$turnoMatricula = $_GET['turnoMatricula'];
$dataMatricula  = $_GET['dataMatricula'];

// Informações Médicas
$dadosFormPlanoSaude    = $_GET['dadosFormPlanoSaude'];
$SUSFormMedicos         = $_GET['SUSFormMedicos'];
$telefoneFormEmergencia = $_GET['telefoneFormEmergencia'];

// Histórico da Criança
$problemaSaude         = $_GET['problemaSaude'];
$qualProblemaSaude     = $_GET['qualProblemaSaude'];
$medicamentoControlado = $_GET['medicamentoControlado'];
$qualMedicamentoControlado = $_GET['qualMedicamentoControlado'];
$tratamento            = $_GET['tratamento'];
$qualTratamento        = $_GET['qualTratamento'];
$internado             = $_GET['internado'];
$qualMotivoInternacao  = $_GET['qualMotivoInternacao'];
$necessidadeEspecial   = $_GET['necessidadeEspecial'];
$qualNecessidadeEspecial = $_GET['qualNecessidadeEspecial'];
$atendimentoEspecializado = $_GET['atendimentoEspecializado'];
$atendimentoEspecializadoSalaRecuso = $_GET['atendimentoEspecializadoSalaRecuso'];
$parto                 = $_GET['parto'];
$gestacao              = $_GET['gestacao'];
$gestacaoOcorrencia    = $_GET['gestacaoOcorrencia'];
$acompanhadoCRAS       = $_GET['acompanhadoCRAS'];
$qualAcompanhadoCRAS   = $_GET['qualAcompanhadoCRAS'];
$visitaSocial          = $_GET['visitaSocial'];
$visitaTutelar         = $_GET['visitaTutelar'];
$atendimentoDomiciliar = $_GET['atendimentoDomiciliar'];
$transporteEscolar     = $_GET['transporteEscolar'];

// Autorizações
$usoImagem             = isset($_GET['usoImagem']) ? $_GET['usoImagem'] : 'nao';
$sairSozinho           = isset($_GET['sairSozinho']) ? $_GET['sairSozinho'] : 'nao';
$atividadeEstracurricular = isset($_GET['atividadeEstracurricular']) ? $_GET['atividadeEstracurricular'] : 'nao';*/

require_once 'criarDb.php';

try {
    // Conecta (ou cria) o banco de dados "meubanco.db"
    $db = new PDO('sqlite:BancoDeDados.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepara a declaração SQL com placeholders para todos os campos
    $sql = "INSERT INTO alunos (
        nomeFormAluno,
        dataNascimentoFormAluno,
        generoFormAluno,
        CPFFormAluno,
        possuiRG,
        RGFormAluno,
        emissorRGFormAluno,
        expedicaoRGFormAluno,
        nacionalidade,
        UF,
        naturalidade,
        raca,
        necessidadesFormAluno,
        tipoNecessidadesFormAluno,
        resticoesFormAluno,
        tiposRestricoesFormAlun,
        beneficioSocial,
        beneficioSocialFormAluno,
        NISFormAluno,
        nomeFormPai,
        dataNascimentoFormPai,
        naturalidadeFormPai,
        CPFFormPai,
        RGFormPai,
        emissorRGFormPai,
        expedicaoRGFormPai,
        telefoneFormPai,
        whatsappFormPai,
        profissaoFormPai,
        nomeFormMae,
        naturalidadeFormMae,
        dataNascimentoFormMae,
        CPFFormMae,
        RGFormMae,
        emissorRGFormMae,
        expedicaoRGFormMae,
        telefoneFormMae,
        whatsappFormMae,
        profissaoFormMae,
        estadoCivilFormPais,
        situacaoCivilFormPais,
        responsavelFormAluno,
        nomeFormResponsavel,
        parentescoFormResponsavel,
        CPFFormResponsavel,
        RGFormResponsavel,
        emissorRGFormResponsavel,
        expedicaoRGFormResponsavel,
        telefoneFormResponsavel,
        whatsappFormResponsavel,
        profissaoFormResponsavel,
        CEPFormAluno,
        ruaFormAluno,
        BairroFormAluno,
        cidadeFormAluno,
        situacaocasa,
        informacoesFormEscolaresAnterior,
        escolarFormEscola,
        escolarFormSerie,
        dadosFormTurno,
        anoMatricula,
        turnoMatricula,
        dataMatricula,
        dadosFormPlanoSaude,
        SUSFormMedicos,
        telefoneFormEmergencia,
        problemaSaude,
        qualProblemaSaude,
        medicamentoControlado,
        qualMedicamentoControlado,
        tratamento,
        qualTratamento,
        internado,
        qualMotivoInternacao,
        necessidadeEspecial,
        qualNecessidadeEspecial,
        atendimentoEspecializado,
        atendimentoEspecializadoSalaRecuso,
        parto,
        gestacao,
        gestacaoOcorrencia,
        acompanhadoCRAS,
        qualAcompanhadoCRAS,
        visitaSocial,
        visitaTutelar,
        atendimentoDomiciliar,
        transporteEscolar,
        usoImagem,
        sairSozinho,
        atividadeEstracurricular
    ) VALUES (
        :nomeFormAluno,
        :dataNascimentoFormAluno,
        :generoFormAluno,
        :CPFFormAluno,
        :possuiRG,
        :RGFormAluno,
        :emissorRGFormAluno,
        :expedicaoRGFormAluno,
        :nacionalidade,
        :UF,
        :naturalidade,
        :raca,
        :necessidadesFormAluno,
        :tipoNecessidadesFormAluno,
        :resticoesFormAluno,
        :tiposRestricoesFormAlun,
        :beneficioSocial,
        :beneficioSocialFormAluno,
        :NISFormAluno,
        :nomeFormPai,
        :dataNascimentoFormPai,
        :naturalidadeFormPai,
        :CPFFormPai,
        :RGFormPai,
        :emissorRGFormPai,
        :expedicaoRGFormPai,
        :telefoneFormPai,
        :whatsappFormPai,
        :profissaoFormPai,
        :nomeFormMae,
        :naturalidadeFormMae,
        :dataNascimentoFormMae,
        :CPFFormMae,
        :RGFormMae,
        :emissorRGFormMae,
        :expedicaoRGFormMae,
        :telefoneFormMae,
        :whatsappFormMae,
        :profissaoFormMae,
        :estadoCivilFormPais,
        :situacaoCivilFormPais,
        :responsavelFormAluno,
        :nomeFormResponsavel,
        :parentescoFormResponsavel,
        :CPFFormResponsavel,
        :RGFormResponsavel,
        :emissorRGFormResponsavel,
        :expedicaoRGFormResponsavel,
        :telefoneFormResponsavel,
        :whatsappFormResponsavel,
        :profissaoFormResponsavel,
        :CEPFormAluno,
        :ruaFormAluno,
        :BairroFormAluno,
        :cidadeFormAluno,
        :situacaocasa,
        :informacoesFormEscolaresAnterior,
        :escolarFormEscola,
        :escolarFormSerie,
        :dadosFormTurno,
        :anoMatricula,
        :turnoMatricula,
        :dataMatricula,
        :dadosFormPlanoSaude,
        :SUSFormMedicos,
        :telefoneFormEmergencia,
        :problemaSaude,
        :qualProblemaSaude,
        :medicamentoControlado,
        :qualMedicamentoControlado,
        :tratamento,
        :qualTratamento,
        :internado,
        :qualMotivoInternacao,
        :necessidadeEspecial,
        :qualNecessidadeEspecial,
        :atendimentoEspecializado,
        :atendimentoEspecializadoSalaRecuso,
        :parto,
        :gestacao,
        :gestacaoOcorrencia,
        :acompanhadoCRAS,
        :qualAcompanhadoCRAS,
        :visitaSocial,
        :visitaTutelar,
        :atendimentoDomiciliar,
        :transporteEscolar,
        :usoImagem,
        :sairSozinho,
        :atividadeEstracurricular
    )";

    // Prepara a declaração
    $stmt = $db->prepare($sql);

    // Cria um array associativo com os dados do formulário
    // Utilizando o operador ?? para definir um valor padrão caso o campo não seja enviado
    $data = [
        ':nomeFormAluno' => $_GET['nomeFormAluno'] ?? '',
        ':dataNascimentoFormAluno' => $_GET['dataNascimentoFormAluno'] ?? '',
        ':generoFormAluno' => $_GET['generoFormAluno'] ?? '',
        ':CPFFormAluno' => $_GET['CPFFormAluno'] ?? '',
        ':possuiRG' => $_GET['possuiRG'] ?? '',
        ':RGFormAluno' => $_GET['RGFormAluno'] ?? '',
        ':emissorRGFormAluno' => $_GET['emissorRGFormAluno'] ?? '',
        ':expedicaoRGFormAluno' => $_GET['expedicaoRGFormAluno'] ?? '',
        ':nacionalidade' => $_GET['nacionalidade'] ?? '',
        ':UF' => $_GET['UF'] ?? '',
        ':naturalidade' => $_GET['naturalidade'] ?? '',
        ':raca' => $_GET['raca'] ?? '',
        ':necessidadesFormAluno' => $_GET['necessidadesFormAluno'] ?? '',
        ':tipoNecessidadesFormAluno' => $_GET['tipoNecessidadesFormAluno'] ?? '',
        ':resticoesFormAluno' => $_GET['resticoesFormAluno'] ?? '',
        ':tiposRestricoesFormAlun' => $_GET['tiposRestricoesFormAlun'] ?? '',
        ':beneficioSocial' => $_GET['beneficioSocial'] ?? '',
        ':beneficioSocialFormAluno' => $_GET['beneficioSocialFormAluno'] ?? '',
        ':NISFormAluno' => $_GET['NISFormAluno'] ?? '',
        ':nomeFormPai' => $_GET['nomeFormPai'] ?? '',
        ':dataNascimentoFormPai' => $_GET['dataNascimentoFormPai'] ?? '',
        ':naturalidadeFormPai' => $_GET['naturalidadeFormPai'] ?? '',
        ':CPFFormPai' => $_GET['CPFFormPai'] ?? '',
        ':RGFormPai' => $_GET['RGFormPai'] ?? '',
        ':emissorRGFormPai' => $_GET['emissorRGFormPai'] ?? '',
        ':expedicaoRGFormPai' => $_GET['expedicaoRGFormPai'] ?? '',
        ':telefoneFormPai' => $_GET['telefoneFormPai'] ?? '',
        ':whatsappFormPai' => $_GET['whatsappFormPai'] ?? '',
        ':profissaoFormPai' => $_GET['profissaoFormPai'] ?? '',
        ':nomeFormMae' => $_GET['nomeFormMae'] ?? '',
        ':naturalidadeFormMae' => $_GET['naturalidadeFormMae'] ?? '',
        ':dataNascimentoFormMae' => $_GET['dataNascimentoFormMae'] ?? '',
        ':CPFFormMae' => $_GET['CPFFormMae'] ?? '',
        ':RGFormMae' => $_GET['RGFormMae'] ?? '',
        ':emissorRGFormMae' => $_GET['emissorRGFormMae'] ?? '',
        ':expedicaoRGFormMae' => $_GET['expedicaoRGFormMae'] ?? '',
        ':telefoneFormMae' => $_GET['telefoneFormMae'] ?? '',
        ':whatsappFormMae' => $_GET['whatsappFormMae'] ?? '',
        ':profissaoFormMae' => $_GET['profissaoFormMae'] ?? '',
        ':estadoCivilFormPais' => $_GET['estadoCivilFormPais'] ?? '',
        ':situacaoCivilFormPais' => $_GET['situacaoCivilFormPais'] ?? '',
        ':responsavelFormAluno' => $_GET['responsavelFormAluno'] ?? '',
        ':nomeFormResponsavel' => $_GET['nomeFormResponsavel'] ?? '',
        ':parentescoFormResponsavel' => $_GET['parentescoFormResponsavel'] ?? '',
        ':CPFFormResponsavel' => $_GET['CPFFormResponsavel'] ?? '',
        ':RGFormResponsavel' => $_GET['RGFormResponsavel'] ?? '',
        ':emissorRGFormResponsavel' => $_GET['emissorRGFormResponsavel'] ?? '',
        ':expedicaoRGFormResponsavel' => $_GET['expedicaoRGFormResponsavel'] ?? '',
        ':telefoneFormResponsavel' => $_GET['telefoneFormResponsavel'] ?? '',
        ':whatsappFormResponsavel' => $_GET['whatsappFormResponsavel'] ?? '',
        ':profissaoFormResponsavel' => $_GET['profissaoFormResponsavel'] ?? '',
        ':CEPFormAluno' => $_GET['CEPFormAluno'] ?? '',
        ':ruaFormAluno' => $_GET['ruaFormAluno'] ?? '',
        ':BairroFormAluno' => $_GET['BairroFormAluno'] ?? '',
        ':cidadeFormAluno' => $_GET['cidadeFormAluno'] ?? '',
        ':situacaocasa' => $_GET['situacaocasa'] ?? '',
        ':informacoesFormEscolaresAnterior' => $_GET['informacoesFormEscolaresAnterior'] ?? '',
        ':escolarFormEscola' => $_GET['escolarFormEscola'] ?? '',
        ':escolarFormSerie' => $_GET['escolarFormSerie'] ?? '',
        ':dadosFormTurno' => $_GET['dadosFormTurno'] ?? '',
        ':anoMatricula' => $_GET['anoMatricula'] ?? '',
        ':turnoMatricula' => $_GET['turnoMatricula'] ?? '',
        ':dataMatricula' => $_GET['dataMatricula'] ?? '',
        ':dadosFormPlanoSaude' => $_GET['dadosFormPlanoSaude'] ?? '',
        ':SUSFormMedicos' => $_GET['SUSFormMedicos'] ?? '',
        ':telefoneFormEmergencia' => $_GET['telefoneFormEmergencia'] ?? '',
        ':problemaSaude' => $_GET['problemaSaude'] ?? '',
        ':qualProblemaSaude' => $_GET['qualProblemaSaude'] ?? '',
        ':medicamentoControlado' => $_GET['medicamentoControlado'] ?? '',
        ':qualMedicamentoControlado' => $_GET['qualMedicamentoControlado'] ?? '',
        ':tratamento' => $_GET['tratamento'] ?? '',
        ':qualTratamento' => $_GET['qualTratamento'] ?? '',
        ':internado' => $_GET['internado'] ?? '',
        ':qualMotivoInternacao' => $_GET['qualMotivoInternacao'] ?? '',
        ':necessidadeEspecial' => $_GET['necessidadeEspecial'] ?? '',
        ':qualNecessidadeEspecial' => $_GET['qualNecessidadeEspecial'] ?? '',
        ':atendimentoEspecializado' => $_GET['atendimentoEspecializado'] ?? '',
        ':atendimentoEspecializadoSalaRecuso' => $_GET['atendimentoEspecializadoSalaRecuso'] ?? '',
        ':parto' => $_GET['parto'] ?? '',
        ':gestacao' => $_GET['gestacao'] ?? '',
        ':gestacaoOcorrencia' => $_GET['gestacaoOcorrencia'] ?? '',
        ':acompanhadoCRAS' => $_GET['acompanhadoCRAS'] ?? '',
        ':qualAcompanhadoCRAS' => $_GET['qualAcompanhadoCRAS'] ?? '',
        ':visitaSocial' => $_GET['visitaSocial'] ?? '',
        ':visitaTutelar' => $_GET['visitaTutelar'] ?? '',
        ':atendimentoDomiciliar' => $_GET['atendimentoDomiciliar'] ?? '',
        ':transporteEscolar' => $_GET['transporteEscolar'] ?? '',
        ':usoImagem' => $_GET['usoImagem'] ?? '',
        ':sairSozinho' => $_GET['sairSozinho'] ?? '',
        ':atividadeEstracurricular' => $_GET['atividadeEstracurricular'] ?? ''
    ];

    // Executa a inserção
    $stmt->execute($data);
    echo "Dados gravados com sucesso!";
} catch(PDOException $e) {
    echo "Erro ao gravar os dados: " . $e->getMessage();
}




?>
