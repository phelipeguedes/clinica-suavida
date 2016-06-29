/* Função p/ validar a entrada de colaboradores nas páginas que possuem, no cabeçalho, os campos de login e senha */

function validarLogin() {
    if ((document.getElementById("usuario").value === "") || (document.getElementById("senha").value === "")) {
        alert("Por favor, preencha os campos de usuário e senha.");
    }
}

/* Função que valida a entrada de pacientes p/ a marcação de consultas com cpf e senha */

function validarLoginConsulta() {
    if ((document.getElementById("cpf").value.length === "") || (document.getElementById("senha").value === "")) {
        alert("Por favor, preencha os campos corretamente.");
        
        return false;
    }
        
}

/* "validarFomrMedico" informa o/a colaborador(a) se há campos vazios no cadastro de médicos */

function validarFormMedico() {
    if ((document.getElementById("nome").value === "") || (document.getElementById("crm").value === "") || (document.getElementById("uf").value === "") || (document.getElementById("nascimento").value === "") || (document.getElementById("especialidade").value === "") || (document.getElementById("email").value === "") || (document.getElementById("login").value === "") || (document.getElementById("senha").value === "")){
        alert("Para realizar o cadastro, preencha todos os campos.");
    }
}

/* "validarFomrMedico" informa o/a usuario(a) se há campos vazios no cadastro de pacientes */

function validarFormPaciente() {
    if ((document.getElementById("nome").value === "") || (document.getElementById("nascimento").value === "") || (document.getElementById("e_civil").value === "") || (document.getElementById("cpf").value === "") || (document.getElementById("rg").value === "") || (document.getElementById("plano").value === "") || (document.getElementById("senha").value === "") || (document.getElementById("historico").value === "") || (document.getElementById("logradouro").value === "") || (document.getElementById("bairro").value === "") || (document.getElementById("cidade").value === "") || (document.getElementById("estado").value === "")){                
        alert("Para realizar o cadastro, preencha todos os campos.");
    }
}

/* "validarConsultaDados" informa o/a usuario(a) se há campos vazios informados na marcação de uma consulta  */

function validarConsultaDados(){
    
    if ((document.getElementById("local").value === "") || (document.getElementById("especialidade").value === "") || (document.getElementById("data").value == "")){
        alert("Para confirmar sua consulta, preencha os campos obrigatórios.");        
    }
    else if((document.getElementById("telefone").value === "") && (document.getElementById("celular").value === "")){
        alert("Você deve fornecer pelo menos um telefone para contato.");
        return false;
    }
    else{
        location.href="marcarconsulta-confirmacao.php";
    }
      
}

/* Esta função apresenta um alert no momento em que a página é carregada. Informa a quem se destina o uso da página */

function entrarCadMedico(){
    alert("ATENÇÃO! Esta página é de uso restrito. Somente médicos e colaboradores são autorizados para cadastrar, alterar ou excluir um médico(a).");
}

// Funções que verificam se o login é válido. A função 'cadastrarMedico' redireciona p/ o cadastro, 'errarLoginMedico' redireciona p/ a página de login

function cadastrarMedico(){
    setTimeout("window.location='cadastrar-medico_form.php'", 2000);
}
        
function errarLoginMedico(){            
    setTimeout("window.location='cadastrar-medico_login.html'");
    alert("Login ou senha incorretos! :( ");
}

/* Esta função apresenta um alert no momento em que a página é carregada. Informa a quem se destina o uso da página */

function entrarCadPaciente(){
    alert("ATENÇÃO! Somente colaboradores são autorizados para cadastrar pacientes.");
}

/* Abrir janela popup */

function abrirPopUp(URL){

    //Parâmetros passados: url do popup, nome da janela, tamanhos de altura e largura e o atributo para não exibir a barra na janela
    window.open(URL, 'popup', "width=400, height=300, scrollbar=no");

}


