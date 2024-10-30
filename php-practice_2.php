<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
      echo "tic\n";
  } elseif ($i % 5 == 0) {
      echo "tac\n";
  } else {
      echo "$i \n";
  }
}

// Q2 多次元連想配列

//問1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'].'の電話番号は'.$personalInfos[1]['tel'].'です。';

//問2
$i = 0;
$key = [0];
foreach($personalInfos as $key => $value) {
$i += 1;
echo $i.'番目の'.$personalInfos[$key]['name'].'のメールアドレスは'.$personalInfos[$key]['mail'].'で、電話番号は'.$personalInfos[$key]['tel']."です。\n";
}

foreach($personalInfos as $key => $value) {
  echo ($key + 1).'番目の'.$personalInfos[$key]['name'].'のメールアドレスは'.$personalInfos[$key]['mail'].'で、電話番号は'.$personalInfos[$key]['tel']."です。\n";
  }

//問3

//回答①
$ageList = [25, 30, 18];
foreach($personalInfos as $key => $value){
  $personalInfos[$key] += array("age" => $ageList[$key]);
}

//回答②
$ageList = [25, 30, 18];
foreach($personalInfos as $key => $value){
    $personalInfos[$key]['age'] = $ageList[$key];
}


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
    
    public function lesson()
    {
        echo '学籍番号'.$this->studentId.'番の生徒は'.$this->studentName.'です。';
    }
}

$Student = new Student(120, '山田');
$Student->lesson();

// Q4 オブジェクト-2
class Student
{
    // プロパティ
    public $studentId;
    public $studentName;

    // メソッド
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName.'は'.$subject.'の授業に出席しました。'."学籍番号：".$this->studentId;
    }
    
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス

//問1
$date = new DateTime('2024-10-09');
$prev_date = $date->modify('-1 month')->format('Y-m-d');
echo $prev_date;

//問2
//回答①
$day1 = strtotime('1994-04-25');
$day2 = strtotime('2024-10-09');
echo 'あの日から'.($day2 - $day1) / (60 * 60 * 24). '日経過しました。';

//回答②
$day1 = new DateTime('1994-04-25');
$day2 = new DateTime('2024-10-09');

$diff = $day1->diff($day2)->format('%a');
echo 'あの日から'.$diff.'日経過しました。';



//DateTime処理 回答
class DateTime
{
    public $date;
    public $timezone_type;
    public $timezone;
    
    public function __construct($days, $type, $zone)
        {
          $this->date = $days;
          $this->timezone_type = $type;
          $this->timezone = $zone;
        }
    
}

$day1 = new DateTime("now", "int", "Asia/Tokyo");
var_dump($day1);
?>