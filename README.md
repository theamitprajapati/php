# PHP

### What's the difference between `ob_flush()` and `flush()` and why must I call both?

The `ob_flush()` reference says:

This function will send the contents of the output buffer (if any).

The `flush()` reference says:

Flushes the write buffers of PHP and whatever backend PHP is using (CGI, a web server, etc).

However, it continues to say:

[it] may not be able to override the buffering scheme of your web server…

So, seems to me that I could just use `ob_flush()` all of the time. However, I get strange results when I do that. Could someone explain in simple terms what's going on here?

More knowlege for visit [Go](https://stackoverflow.com/questions/4191385/php-buffer-ob-flush-vs-flush)


