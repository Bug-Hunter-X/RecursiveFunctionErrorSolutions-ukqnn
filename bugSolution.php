function foo(a, b) {
  if (a === 0) {
    return b;
  } elseif (a < 0) {
    return b; //Added base case for a<0
  }
  return foo(a - 1, a + b);
}