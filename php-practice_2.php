<?php
// Q1 tic-tac問題
  echo "1から100までのカウントを開始します\n\n";

  for ($i = 1; $i <= 100; $i++) {
    echo (($i % 4 == 0) ? 'tic' : '') . (($i % 20 == 0) ? '-' : '') . (($i % 5 == 0) ? 'tac' : '') . ((($i % 4 !== 0) && ($i % 5 !== 0)) ? $i : '');
    echo "\n";     
  }

// Q2 多次元連想配列
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

  function individualInfo($index) {
    global $personalInfos;

    if (isset($personalInfos[$index])) {
      return $personalInfos[$index];
    } else {
      return null;
    }
  }

// 問題１
  echo individualInfo(1)['name'] . 'の電話番号は' . individualInfo(1)['tel'] . 'です。'; 

// 問題２
  foreach ($personalInfos as $x => $y) {
    echo $x+1 . '番目の' . individualInfo($x)['name'] . 'のメールアドレスは' . individualInfo($x)['mail'] . 'で、電話番号は' . individualInfo($x)['tel'] . 'です。'; 
    echo "\n";
  }

// 問題３
  $ageList = [25, 30, 18];

  foreach ($personalInfos as $x => $y) {
    $array = individualInfo($x);
    $array['age'] = $ageList[$x];
    $personalInfos[$x] = $array;
  }

  var_dump($personalInfos);

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
    }

  $masaya = new Student(16, 'Masaya');
  echo '学籍番号' . $masaya->studentId . '番の生徒は' . $masaya->studentName . 'です。';

// Q4 オブジェクト-2
  class Student
    {
      public $studentId;
      public $studentName;

      public function __construct($id, $name)
        {
          $this->studentId = $id;
          $this->studentName = $name;
        }

      public function attend($class)
        {
          echo $this->studentName . 'は' . $class . 'の授業に出席しました。学籍番号：' . $this->studentId;
        }
    }

  $yamada = new Student(120, '山田');
  $yamada->attend('PHP');

// Q5 定義済みクラス
// 問題１
  $date = new DateTime();
  $date->modify('-1 month');
  echo $date->format('Y-m-d');

// 問題２
  $date1 = new DateTime();
  $date2 = new DateTime('1992-04-25');
  $diff = $date2->diff($date1);
  echo $diff->format('あの日から%a日経過しました。');


?>