## Test Keen IO PHP Webservice Client

1. Clone the repo
2. Run `composer.phar install`
3. Edit `index.php` and add in API keys
4. Run `php index.php`


##### You should see:

```
 -- Add Event to Keen IO
Array
(
    [collection] => test_timestamp
    [event] => Array
        (
            [foo] => bar
            [keen] => Array
                (
                    [timestamp] => 2013-11-22T00:00:00-08:00
                )

        )

    [request] => Array
        (
            [created] => 1
        )

)


 -- Get last Event from Keen IO
Array
(
    [collection] => test_timestamp
    [document] => Array
        (
            [keen] => Array
                (
                    [timestamp] => 2013-11-22T08:00:00.000Z
                    [created_at] => 2013-11-23T08:30:13.383Z
                    [id] => 5290679500111c468fea649b
                )

            [foo] => bar
        )

)
```
