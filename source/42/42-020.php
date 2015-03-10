<?php
  // パラメータを取得し、字符编码チェックと変換
  // 入力値検証まで行う関数
  // $key : GETパラメータ名
  // $pattern : 入力値検証用正規表現文字列
  // $error : 入力値検証時のエラーメッセージ
  // 戻り値 : 取得したパラメータ（string）
  function getParam($key, $pattern, $error) {
    $val = isset($_GET[$key]) ? $_GET[$key] : '';
    // 字符编码（Shift_JIS）のチェック
    if (! mb_check_encoding($val, 'Shift_JIS')) {
      die('字符编码が不正です');
    }
    // 字符编码の変換（Shift_JIS→UTF-8）
    $val = mb_convert_encoding($val, 'UTF-8', 'Shift_JIS');
    if (preg_match($pattern, $val) == 0) {
      die($error);
    }
    return $val;
  }
  // パラメータ取得関数の呼び出し
  $name = getParam('name', '/\A[[:^cntrl:]]{1,20}\z/u', 
    '20文字以内で姓名を入力してください（必須項目）。制御文字は使用できません');
?>
<body>
名前は<?php echo htmlspecialchars($name, ENT_NOQUOTES, 'UTF-8'); ?>です
</body>
