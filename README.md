This is a php script that fetch the price of any amazon.com product you are asking.
It's using a python script for the get request and then search by ID to "isolate" the price and print it.
The code is really easy to understand and is only here for demonstration purpose, there is no security test and many errors / exploits are possible.
To use it, simply call the index.php webpage with ?link={youramazonlink} in your browser.
The amazon link must be in this format: https://amazon.com/ASIN
ASIN example: B00004VYNF
