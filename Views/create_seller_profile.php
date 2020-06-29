<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create Shop Profile</title>
  </head>
  <body> 
    <h1>Create Shop</h1>
    <main class="wrapper"> 
        <form method="post" class="form" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>" enctype="multipart/form-data">
            <?php 
                if(!empty($message)){
                    echo "<p>" .$message. "</p>";
                }
            ?>
            <div>
                <label>
                    Descrição
                    <input type="text" name="description" required>
                </label>
            </div>
            <div>
                <label>
                    Url
                    <input type="text" name="url" required>
                </label>
            </div>
            <div>
                <label>
                    Imagem
                    <input type="file" name="picture">
                </label>
            </div>
            <div class="buttonw">
                <button type="submit" name="send">Criar</button>
                <a href="<?php echo ROOT;?>" class="backbutton">Voltar</a>
            </div>
        </form>
    </main>
    <footer>
      <div class="footer">
      </div>
    </footer>
  </body>
</html>