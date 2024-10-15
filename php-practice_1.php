<?php
// Q1 変数と文字列
$message = '谷山';
var_dump($message);

$newMessage = '私の名前は「' . $message . '」です。';
var_dump($newMessage);

// Q2 四則演算
$num = (5 * 4);
var_dump($num);

var_dump($num / 2);

// Q3 日付操作
$message = date( "Y年m月d日 H時i分s秒" ) ;
$newMessage = '現在時刻は、' . $message . 'です。';
var_dump($newMessage);

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
$Prefecture = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

$newMessage = $Prefecture[2] . 'と' . $Prefecture[3] . 'は関東地方の都道府県です。';
var_dump($newMessage);

// Q7 連想配列-1　
$Prefecture = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
var_dump($Prefecture['東京都']);
var_dump($Prefecture['神奈川県']);
var_dump($Prefecture['千葉県']);
var_dump($Prefecture['埼玉県']);
var_dump($Prefecture['栃木県']);
var_dump($Prefecture['群馬県']);
var_dump($Prefecture['茨城県']);

// Q8 連想配列-2
$Prefecture = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
if ( $Prefecture = '埼玉県' ) {
echo '埼玉県の県庁所在地は、さいたま市です。';
}

// Q9 連想配列-3 ★
$Prefecture = ['東京都' => '新宿区', '神奈川県' => '横浜市', '千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
$Prefecture['北海道'] = '札幌市';
$Prefecture['沖縄県'] = '那覇市';

foreach ($Prefecture as $key => $value) {
if ($key === '北海道' || $key === '沖縄県') {
  echo $key . "は関東地方ではありません。\n";
}else  {
  echo $key.'の県庁所在地は、'.$value. "です。\n";
}}


// Q10 関数-1
function hello($name)
{
  echo $name . "さん、こんにちは。\n";
}

hello('佐藤');
hello('田中');

// Q11 関数-2
$price = 1000;
calcTaxInPrice($price);
function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  echo $price."円の商品の税込み価格は".$taxInPrice."円です";
}

// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 == 0) {
      return $number."は偶数です。\n";
  } else {
      return $number."は奇数です。\n";
  }
}

$a = distinguishNum(5);
$b = distinguishNum(6);
echo $a . $b;


// Q13 関数とswitch文
$evaluateGrade = "A";

switch($evaluateGrade){
    case "A":
        print "合格です。";
        break;
    case "B":
        print "合格です。";
        break;
    case "C":
        print "合格ですが追加課題があります。";
        break;
    case "D":
        print "不合格です。";
        break;
    default:
        print "判定不明です。講師に問い合わせてください。";
}

?>