<?php
# php 파일의 생성 및 백업 방법
$file = 'hello world.txt';               //원본파일
$newfile = 'example.txt.bak';            //복사파일

if (file_exists($file)) {                //파일이 실제로 존재하는 파일인지 검사
  if (!copy($file, $newfile)) {
      echo "failed to copy $file...\n";
  } else if(file_exists($newfile)) {     //복제된 파일이 있는지 검사후 성공 여부
      echo "successful<br/>";
  }
}
# 있는 파일을 삭제하는 방법 unlink()
//  unlink("example.txt.bak");


# file_get_contents(); 텍스트로 이루워진 파일을 읽어서 문자열로 리턴하는 함수
  echo file_get_contents($file);

# file_put_content(); 문자열을 파일에 저장하는 함수 <파일이 경로안에 존재해야 함>
  file_put_content($flie,'Don Diavleo(Remix)');

?>
