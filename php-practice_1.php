<?php
// Q1 変数と文字列
    $name = '中久保';
    $letter = '私の名前は「' . $name . '」です。';
    echo $letter;

// Q2 四則演算
    $num = 5*4;
    echo $num;
    $num /= 2;
    echo "\n$num";

// Q3 日付操作
    $date ='現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';
    echo $date;

// Q4 条件分岐-1 if文
    $device = 'php-lesson';
    if ($device == 'windows' || 'mac') {
        echo '使用OSは、' . $device . 'です。';
    } else {
        echo 'どちらでもありません。';

// Q5 条件分岐-2 三項演算子
    $age = 10;
    $message = ($age < 18) ? '未成年です。' : '成人です。';

    echo $message;

// Q6 配列
    $kanto = ['東京', '千葉', '埼玉', '神奈川', '群馬', '栃木', '茨城'];
    $message = $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。';

    echo $message;

// Q7 連想配列-1
    $capitalLocation = ['東京' => '新宿区', '千葉' => '千葉市', '埼玉' => 'さいたま市', '神奈川' => '横浜市', '群馬' => '前橋市', '栃木' => '宇都宮市', '茨城' => '水戸市'];
    foreach ($capitalLocation as $y) {
        echo $y;
        echo "\n";
    }

// Q8 連想配列-2
    $capitalLocation = ['東京' => '新宿区', '千葉' => '千葉市', '埼玉' => 'さいたま市', '神奈川' => '横浜市', '群馬' => '前橋市', '栃木' => '宇都宮市', '茨城' => '水戸市'];
    $keys = array_keys($capitalLocation);
    $message = $keys[2] . '県の県庁所在地は、' . $capitalLocation['埼玉'] . 'です。';

    echo $message;

// Q9 連想配列-3
    $capitalLocation = ['東京' => '新宿区', '千葉' => '千葉市', '埼玉' => 'さいたま市', '神奈川' => '横浜市', '群馬' => '前橋市', '栃木' => '宇都宮市', '茨城' => '水戸市', '大阪' => '大阪市', '愛知' => '名古屋市'];
    foreach ($capitalLocation as $x => $y) {
        if ($x !== '愛知' && $x !== '大阪') {
            echo $x . '県の県庁所在地は、' . $y .'です。';
        } else {
            $z = ($x == '大阪') ? '府' : '県';
            echo $x . $z . 'は関東地方ではありません。';
        }
        echo "\n";
    }

// Q10 関数-1
    function hello($name) {
        echo $name . 'さん、こんにちは。';
    }

    $nameList = ['金谷', '安藤'];

    foreach ( $nameList as $x) {
        hello($x);
        echo "\n";
    }

// Q11 関数-2
    function calTaxInPrice($price) {
        return 1.1*$price;
    }

    $price = 1000;

    echo $price . '円の商品の税込価格は' . calTaxInPrice($price) . '円です。';

// Q12 関数とif文
    function distinguishNum($num) {
        return $num . (($num % 2 == 0) ? 'は奇数です。' : 'は偶数です。');
    }

    echo distinguishNum(11);
    echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';
            break;
            
        case 'C':
            return '合格ですが追加課題があります。';
            break;
        
        case 'D':
            return '不合格です。';
            break;        
        
        default:
            return '判定不明です。講師に問い合わせてください。';
            break;
    }
}

echo evaluateGrade('D');
echo "\n";
echo evaluateGrade('Z');

?>
