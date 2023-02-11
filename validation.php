<?php

function validation($request){

  $errors = [];

  if(empty($request['your_name']) || 20 < mb_strlen($request['your_name'])){
    $errors[] = '氏名は必須です。氏名は20文字以上で入力してください';
  }
  if(empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = "メールアドレスは必須です。正しい形式で入力してください。";
  }
  if(empty($request['url']) || !filter_var($request['url'], FILTER_VALIDATE_URL)){
    $errors[] = "URLは必須です。正しい形式で入力してください。";
  }
  if(empty($request['contact']) || 20 < mb_strlen($request['contact'])){
    $errors[] = 'お問い合わせ内容は必須です。氏名は20文字以上で入力してください';
  }
  if(empty($request['caution'])){
    $errors[] = '注意事項をご確認ください。';
  }
  if(!isset($request['gender'])){
    $errors[] = '性別は必須です';
  }
  if(empty($request['age']) || 7 < $request['age']){
    $errors[] = '年齢は必須です';
  }

  return $errors;
}

?>