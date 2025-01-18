# PHP Loose Comparison with Null

This example demonstrates a common error in PHP related to loose comparison with null.  The function `myFunc` might return `null`, but because PHP uses loose typing, a comparison with `==` could yield unexpected results.

The solution demonstrates the proper way of handling null comparisons in PHP using the strict comparison operator (`===`).