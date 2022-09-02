
if($_POST){
  //postから送られてきたデータをcontentに入れる
  $content = $_POST['comment'];
  
  //ファイルパス　任意でよろ
  $file_name = './database/bbs.txt';

  //先程作った関数に、データを渡す
  fwrite('$file_name, $content');
  //リロード
  header('Location: ./');
}