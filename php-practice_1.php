<?php
// Q1 変数と文字列
$message = '谷山';
$newMessage = '私の名前は「' . $message . '」です。';
echo $newMessage;

// Q2 四則演算
$num = (5 * 4);
var_dump($num);

var_dump($num / 2);

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$message = date( "Y年m月d日 H時i分s秒" ) ;
echo '現在時刻は、' . $message . 'です。';

// Q4 条件分岐-1 if文　★
$device = 'windows';
if ($device === 'windows'||$device === 'mac') {
  echo '使用OSは、' . $device . 'です。';
} else {
  echo 'どちらでもありません。';
}


// Q5 条件分岐-2 三項演算子
$age = 19;
$message = ($age > 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$prefecture = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

$newMessage = $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。';
var_dump($newMessage);

// Q7 連想配列-1　
$prefecture = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($prefecture as $key => $value){
  echo "$value\n";
}

// Q8 連想配列-2
$prefecture = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
foreach ($prefecture as $key => $value) {
  if ($key === '埼玉県') {
      echo $key.'の県庁所在地は、'.$value.'です。';
      break;
  }}

// Q9 連想配列-3 ★
$prefecture = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
$prefecture['北海道'] = '札幌市';
$prefecture['沖縄県'] = '那覇市';

foreach ($prefecture as $key => $value) {
if ($key === '北海道' || $key === '沖縄県') {
  echo $key . "は関東地方ではありません。\n";
}else  {
  echo $key.'の県庁所在地は、'.$value. "です。\n";
}}


// Q10 関数-1
function hello($name)
{
  return $name . "さん、こんにちは。\n";
}

echo hello('田中');
echo hello('佐藤');



// Q11 関数-2
function calcTaxInPrice($price)
{
  return $price * 1.1;
}

$price = 1000;
echo $price.'円の税込み価格は'.calcTaxInPrice($price).'円です';


// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 == 0) {
      return $number."は偶数です。\n";
  } else {
      return $number."は奇数です。\n";
  }
}

echo distinguishNum(5),distinguishNum(6);

// Q13 関数とswitch文
function evaluateGrade($grades) {
  switch($grades){
      case "A":
          return "合格です。";
          break;
      case "B":
          return "合格です。";
          break;
      case "C":
          return "合格ですが追加課題があります。";
          break;
      case "D":
          return "不合格です。";
          break;
      default:
          return "判定不明です。講師に問い合わせてください。";
  }}
  
  echo evaluateGrade('A');
?>