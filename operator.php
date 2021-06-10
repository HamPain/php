<?php
  $num = 10;
  $num2 = 20;
  # 해당부분은 삼항연산자(ternary operator) 이다.
  #           비교할 부분              참                      거짓
  #의 값이 나오게된다.
  $result = ($num < $num2) ? 'num2의 값이 더 큽니다.':'num1의 값이 더 큽니다.';
  # 결론은 num2의 값이 10 더 큼으로 true가 return 된다.
  echo $result; # num2의 값이 더 큽니다.
  echo '<br/><br/><br/>';

  # 해당 부분은 문자열을 합칠수있는 . 연산사의 예제이다.
  $str = 'Ansan';
  $str1 = 'Tomak';
  # echo 문을 보면 문자열과 변수가 협쳐진것이 보인다.
  echo '두 문자열 $str 과 $str1 의 합은'.$str.$str1.'입니다.';

 ?>
