# infrastructure-opsone-dba (phpMyAdmin)

Latest phpMyAdmin for installation on an [OpsOne Managed Server PaaS](https://opsone.ch/hosting/managed-server).

## Installation

In the website details from the cockpit set `ENV` to `PROD` and `Type` to
`php72` (of course other compatible values are possible too). Check the other
configuration values and click the `Save` button.

Then ssh into the website and run the following command in your user home
directory:

* `wget https://github.com/gilbertsoft/infrastructure-opsone-dba/raw/master/install && chmod +x install && ./install`

Now the instance is running and accessible over http(s).

Finally you can adapt `config.inc.php` in the home directory to your needs
but it is running out of the box with some default settings.

## Update

Updates are automatically done by a daily cron job.

For a manual update ssh into the website and run the following command in your
user home directory:

* `update`

## License

GPL-3.0 or later
