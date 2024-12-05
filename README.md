# PHP Loose Comparison with NULL values

This example demonstrates a common error in PHP when dealing with null values and loose comparison operators.  Loose comparison (==) does not always behave as expected when comparing against null, leading to potential bugs that can be difficult to track down.

The `bug.php` file contains a function with a flawed null check. The `bugSolution.php` file presents a corrected version that addresses the issue and ensures robust handling of null values.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`. Observe the unexpected results when null values are passed.
3. Run `bugSolution.php`.  Note the improved handling of null values.