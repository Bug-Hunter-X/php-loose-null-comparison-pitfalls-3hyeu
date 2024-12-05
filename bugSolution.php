function foo(a, b) {
  if (!isset($a) || !isset($b) ) {
    return null; //Explicit check for isset for null values or undefined variables
  }

  //Some operations
}