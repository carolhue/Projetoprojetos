<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Rifa Gremista - CSL</title>
<style>
  body {
    font-family:monospace;
    background-color:cornflowerblue;
    text-align: center;
  }
  .rifa-container {
    margin: 0 auto;
    width: 50%;
    padding: 20px;
    border-radius: 10px;
    background-color:cornflowerblue;
  }
  .bilhete {
    display:inline-block;
    background-color:dimgrey;
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
    color:darkgrey
  }
  .premio-img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
  }
  input[type=text], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  button {
    background-color:royalblue;
    color:black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  .message {
    margin: 20px 0;
    padding: 10px;
    border-radius: 5px;
  }
  .sucess {
    background-color:aqua;
    color:aqua;
  }
  .error {
    background-color:aqua;
    color:aqua;
  }
</style>
</head>
<body>

<div class="rifa-container">
  <h2>Rifa Gremista - CSL</h2>
  <?php
  $premios = [
    ["nome" => "Camisa do Grêmio feminina", "imagem" => "https://acdn.mitiendanube.com/stores/002/183/167/products/camisa-gremio-feminina-1-home-i-tricolor-2023-2024-umbro1-7d86babafc67973b7916859736608653-640-0.png"],
    ["nome" => "Camisa do Grêmio masculina", "imagem" => "https://acdn.mitiendanube.com/stores/003/786/071/products/89c4771c-removebg-preview-78828ed14e8d251e9e17081060489987-480-0.png"],
    ["nome" => "Corta-vento do Grêmio", "imagem" => "https://acdn.mitiendanube.com/stores/001/986/628/products/gremio-2020-21-depositphotos-bgremover1-2a48936df156f876ec16540962655397-480-0.png"],
  ];
  $valor = 10.00;
  $quantNum = 1;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $bilhete = $_POST['bilhete'];
    $premioIndex = $_POST['premioIndex'];

    if (!empty($nome) && !empty($email)) {
      echo "<div class='message sucess'>Obrigado, $nome! Você está participando com o bilhete número $bilhete.</div>";
    } else {
      echo "<div class='message error'>Por favor, preencha todos os campos.</div>";
    }
  }
  foreach ($premios as $index => $premio) {
    $valor = ($index == count($premios) - 1) ? 20.00 : 10.00; 
    echo "<h3><strong>Prêmio: {$premio['nome']}</strong></h3>";
  for ($i = 1; $i <= $quantNum; $i++) {
    echo "<div class='bilhete'>";
    echo "<h3>Bilhete Número: $i</h3>";
    echo "<p>Prêmio: {$premio['nome']}</p>";
    echo "<p>Valor: R\$ " . number_format($valor, 2, ',', '.') . "</p>";
    echo "<img src='{$premio['imagem']}' alt='Imagem do prêmio' class='premio-img'>";
    echo "<form method='post' action='rifa.php'>";
    echo "<input type='hidden' name='bilhete' value='$i'>";
    echo "<input type='text' name='nome' placeholder='Seu nome'>";
    echo "<input type='email' name='email' placeholder='Seu e-mail'>";
    echo "<button type='submit'>Participar</button>";
    echo "</form>";
    echo "</div>";
  }
}
  ?>
</div>

</body>
</html>

