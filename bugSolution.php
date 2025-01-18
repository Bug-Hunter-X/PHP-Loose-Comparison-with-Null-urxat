function myFunc() {
  //Some code here
  return $a;
}

$result = myFunc();

if ($result === null) {
  echo 'Result is null';
} else {
  echo 'Result is not null';
}

//alternative solution, checking for isset before using a variable
if (isset($a) && $a !== null){
  //use $a
}
