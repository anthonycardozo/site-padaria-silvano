<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "anthonycard1405@gmail.com";

$nome = $_REQUEST['nome'];
$telefone = $_REQUEST['telefone']
$email = $_REQUEST['email'];
$interesse = $_REQUEST['interesse'];
$mensagem = $_REQUEST['mensagem'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "CURRICULO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Número: " . $telefone . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Área de interesse: " . $interesse . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $interesse , $body, "From: $email\r\n");

?>