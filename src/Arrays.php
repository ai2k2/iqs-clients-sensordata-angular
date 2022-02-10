<?hh

function exerciseVec(): void {
  $v = vec['foo', 'barr', 2];
  $v[] = 'bazzz';
  echo var_dump($v);
}

function exerciseDict(): void {
  $d = dict['f