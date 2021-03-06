<form data-remote="true" focus-response="#mensagem" id="form" method="post" action="index.php/relatorioController/buscar">
    <fieldset>
        <legend>Gerar Relatórios</legend>
        <div class="row-fluid">
            <div class="span5">
                <label>Aluno</label>
                <input class="input-xlarge span11" autocomplete="off" name="idAlunos" type="text" data-source='[<?php echo $alunos; ?>]' data-items="4" data-provide="typeahead" style="margin: 0 auto;" required>
                <span class="help-block"></span> 
                <label>Tipo de Relatório</label>
                <select name="tipoDeRelatorio" required>
                    <option></option>
                    <option value="1">Ocorrências</option>
                    <option value="2">Desempenho Escolar</option>
<!--                    <option value="3">Completo</option>-->
                </select>
                <div class="row-fluid">
                    <div class="span5">
                        <label>Data Início</label>
                        <input type="text" class="datepicker span10 maskDate" name="dataInicio">
                    </div>
                    <div class="span5">
                        <label>Data Final</label>
                        <input type="text" class="datepicker span10 maskDate" name="dataFinal">
                    </div>
                </div>
                <label>Busca por Ano</label>
                <select name="ano">
                    <option></option>
                    <?php for ($i = date("Y"); $i > 2000; $i--): ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
                <span class="help-block"></span>
                <input type="submit" class="btn" value="Buscar">
                <span class="help-block"></span>
            </div>
            <div class="span6">
                <p id="mensagem" class="telaRelatorio"></p>  
            </div>
        </div>
    </fieldset>
</form>
