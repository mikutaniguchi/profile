 <?php 
        $name= $_POST['name'];
        $mail = $_POST['mail'];
        $content = $_POST['content'];
        
       
  
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="intro.css">
    <title>Miku Taniguchi</title>
  </head>
  <body>
 
 
        <div class="container">
            <h2 class="mt-4 pb-4 border-bottom">送信完了</h2>
            <p>ありがとうございました。送信を受け付けました。</p>
            
            <h2>送信内容</h2>
            <table class="table">                    
                <tr><th>氏名</th><td><?php print htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></td></tr>
                <tr><th>メールアドレス</th><td><?php print htmlspecialchars($mail, ENT_QUOTES, "UTF-8"); ?></td></tr>
                <tr><th>お問い合わせ内容</th><td><?php print nl2br(htmlspecialchars($content, ENT_QUOTES, "UTF-8")); ?></td></tr>
            </table>
            
            <div class="text-center mb-4">
                <a href="index.php" class="btn btn-info btn-lg">戻る</a> 
                            
            </div>
        </div>
        <footer class="text-center pt-3 border-top">
            &copy; 2019 MIKU Inc.
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>